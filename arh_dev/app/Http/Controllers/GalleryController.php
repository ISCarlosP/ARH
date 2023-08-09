<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Products_images;

class GalleryController extends Controller{

    public function show($product_name){
        $productId = Products::where('product_name', $product_name)
            ->first()
            ->value('product_id');

        $productImages = Products_images::where('product_id', $productId)
            ->get()
            ->toArray();

        return json_encode(compact('productImages'));
    }
}
