<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Products_images;

class GalleryController extends Controller{

    public function show($product_name){
        $productName = explode('_', $product_name);
        $productName = implode(' ', $productName);

        $productId = Products::query()
            ->select('product_id')
            ->where('product_name', $productName)
            ->first();

        $productImages = Products_images:: query()
            ->where('product_id', $productId->product_id)
            ->get()
            ->toArray();

        $productImages = json_encode($productImages);

        return view('gallery/show', compact('productImages'));
    }
}
