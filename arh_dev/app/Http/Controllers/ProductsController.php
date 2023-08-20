<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Models\Products_images;

class ProductsController extends Controller
{
    public function getProducts (){
        $products = Products::all()
            ->toArray();

        usort($products, function ($a, $b){
            return $a['product_screen_order'] - $b['product_screen_order'];
        });

        $productsResponse = [];

        foreach($products as $product){
            $images = Products_images::query()
                ->where('product_id', $product['product_id'])
                ->get()
                ->toArray();

            $product['images'] = $images;

            $productsResponse[] = $product;
        }

        return $productsResponse;
    }
}
