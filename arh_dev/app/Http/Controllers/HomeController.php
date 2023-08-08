<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function __invoke(){

        $products = Products::all()
            ->toArray();

        $products = json_encode($products);

        return view('landing_page', compact('products'));
    }
}

