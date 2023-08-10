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
        $myCookie = $siteVisits->create($request);

        $products = Products::all()
            ->toArray();

        $products = json_encode($products);

        if ($myCookie != null){
            return response(view('landing_page',compact('products') ))->cookie($myCookie);
        }

        $routes = [
            'send_message' => route('message.validate.request'),
        ];

        $routes = json_encode($routes);
        
        return view('landing_page', compact('products', 'routes'));
    }
}

