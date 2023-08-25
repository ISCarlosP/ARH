<?php

namespace App\Http\Controllers;

use App\Models\products_images;
use App\Http\Requests\Storeproducts_imagesRequest;
use App\Http\Requests\Updateproducts_imagesRequest;
use App\Http\Controllers\ProductsController;
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
        $productsProvider = new ProductsController();
        $utilitiesProvider = new Utilities();
        $response = $utilitiesProvider->createResponse();
        $count = 0;

        while ($count < count($request->galleryToDelete)) {
            $toDelete = Products_images::query()
                ->where('products_images_id', $request->galleryToDelete[$count]['products_images_id'])
                ->first();

            $toDelete->delete();

            $url = public_path($toDelete->product_image_url);

            if (file_exists($url)) {
                unlink($url);
            }

            $count++;
        }

        $response['message'] = 'Tu imagen se eliminó correctamente';
        $response['values'] = $productsProvider->getProducts();

        return $response;
    }
}
