<?php

namespace App\Http\Controllers;

use App\Models\Site_visits;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Services\SessionServices;

class HomeController extends Controller
{
    public function __invoke(Request $request){

        $sessionServices = new SessionServices();
        if($sessionServices->existSession($request)){
            return redirect()->route('dashboard');
        }

        $siteVisits = new SiteVisitsController();
        $myCookie = $siteVisits->create($request);

        $products = Products::all()
            ->toArray();

        $products = json_encode($products);

        $routes = [
            'send_message' => route('message.validate.request'),
            'authenticate' => route('auth.create')
        ];

        $routes = json_encode($routes);

        if ($myCookie != null){
            return response(view('landing_page',compact('products', 'routes') ))->cookie($myCookie);
        }

        return view('landing_page', compact('products', 'routes'));
    }
}

