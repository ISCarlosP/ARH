<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Models\Products_images;
use App\Services\Utilities;
use Illuminate\Http\Request;
use Mockery\Exception;

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
    public function updateProductImage(Request $request){
        $this->deleteProductImage($request);
        $utiliesProvider = new Utilities();
        $response = $utiliesProvider->createResponse();
        $isDeleted = $this->deleteBannerImage();
        $response['message'] = 'Se actualizó tu imagen correctamente';

        if(!$isDeleted){
            $response['response'] = false;
            $response['message'] = 'Hubo un problema al actualizar el banner, reintenta';

            return $response;
        }

        $request->file('banner')->move(public_path('img\products\ ' . $request->productId ), $request->productId . '.jpeg');

        return $response;
    }
    public function deleteProductImage($request){
        $response = true;

        try{
            $url = public_path('img\products') . '\ ' . $request->productId . '.jpeg';
            if(file_exists($url)){
                unlink($url);
            }
        }catch (Exception $exception){
            $response = false;
        }
        return $response;
    }
}
