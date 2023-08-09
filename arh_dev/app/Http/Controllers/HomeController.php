<?php

namespace App\Http\Controllers;

use App\Models\Site_visits;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function __invoke(Request $request){

        $siteVisits = new SiteVisitsController();
        $siteVisits->create($request);

        $products = Products::all()
            ->toArray();

        $products = json_encode($products);

        return view('landing_page', compact('products'));
    }
}

