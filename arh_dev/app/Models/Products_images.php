<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_images extends Model
{
    use HasFactory;

    protected $table = 'products_images';
    protected $fillable = [
        'product_image_id',
        'product_image_screen_name',
        'product_image_screen_order',
        'product_image_url',
        'product_id',
    ];

//    Relations
    public function products(){
        
    }
}
