<?php

namespace App\Http\Controllers;

use App\Models\products_images;
use App\Http\Requests\Storeproducts_imagesRequest;
use App\Http\Requests\Updateproducts_imagesRequest;
use Illuminate\Http\Request;
use App\Services\Utilities;

class ProductsImagesController extends Controller
{
    public function update(Request $request)
    {

    }

    public function create(Request $request)
    {
        $utilitiesProvider = new Utilities();
        $response = $utilitiesProvider->createResponse();

        $currentNumber = Products_images::query()
            ->latest();

        Products_images::create([
            'product_screen_name' => 'img-' . ($currentNumber->products_images_id + 1),
            'product_image_url' => '/img/gallery/' . $request->productId . '/' . 'img-' . ($currentNumber->products_images_id + 1),
            'product_id' => $request->product_id
        ]);

        $request->file('galleryImage')->move(public_path('img\products\\' + $request->productId . '\\'), 'img-' . ($currentNumber->products_images_id + 1) . '.jpeg');

        $response['message'] = 'Se subio tu imagen exitosamente';

        return $response;
    }

    public function delete(Request $request)
    {
        $utilitiesProvider = new Utilities();
        $toDelete = Products_images::query()
            ->where('product_images_id', $request->imageId)
            ->first();

        $toDelete->delete();

        $url = public_path('img\products') . '\\' . $request->productId . '\\' . $toDelete->product_screen_name;
        if(file_exists($url)){
            unlink($url);
        }

    }

}
