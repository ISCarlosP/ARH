<?php

namespace App\Http\Controllers;

use App\Models\site_visits;
use App\Http\Requests\Storesite_visitsRequest;
use App\Http\Requests\Updatesite_visitsRequest;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Exceptions\CustomException;
use App\Services\Cookies;
use Illuminate\Http\Request;

class SiteVisitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $cookies = new Cookies();

        if(!$cookies->validateCookieExist($request)){
            try{
                $token = Str::random(25);
                $date = Carbon::now();
                $timeStamp = $date->timestamp;

                $cookies->createCookie([
                    'cookie_type' => 'visit_token',
                    'token' => $token,
                ]);

                Site_visits::create([
                    'site_visit_token' => $token,
                    'site_visit_created_at' => $timeStamp,
                    'site_visit_updated_at' => $timeStamp
                ]);
            }catch(CustomException $error ){
                echo $error;
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storesite_visitsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(site_visits $site_visits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(site_visits $site_visits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatesite_visitsRequest $request, site_visits $site_visits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(site_visits $site_visits)
    {
        //
    }

    public function validateCookie(){

    }
}
