<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Services\Utilities;
use Carbon\Carbon;
use Hamcrest\Util;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\DashboardController;
use Illuminate\Database\Eloquent;

class UsersController extends Controller
{
    public function index()
    {

    }

    public function create(Request $request){
        $response = $this->validateCreateUser($request);

        if(!$response['response']){
            return $response;
        }

        Users::create([
            'first_name' => $request->userName,
            'last_name' => $request->userLastName.' '.$request->userLastName1,
            'user_birth_date' => Carbon::parse($request->birthDate)->timestamp,
            'email' => $request->createUserCodeName,
            'password' => Hash::make($request->userPassword),
            'status' => 1
        ]);

        $response['message'] = 'El usuario se creo exitosamente';

        $dashboardController = new DashboardController();

        $response['values'] = $dashboardController->getActiveUsers();

        return $response;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreusersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateusersRequest $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users)
    {
        //
    }

    public function validateCreateUser($request){
        $utilitiesProvider = new Utilities();
        $response = $utilitiesProvider->createResponse();

        if($request->userName === null || $request->user_name === ''){
            $response['response'] = false;
            $response['exceptions'][] = 'Debes ingresar un nombre valido';
        }

        if($request->userLastName === null || $request->user_name === ''){
            $response['response'] = false;
            $response['exceptions'][] = 'Debes ingresar un apellido paterno';
        }

        if($request->userLastName1 === null || $request->user_name === ''){
            $response['response'] = false;
            $response['exceptions'][] = 'Debes ingresar un apellido materno';
        }

        $repitedUser = $this->validateRepitedUserName($request->createUserCodeName);

        if($request->createUserCodeName === null || $request->user_name === '' || $repitedUser ){
            $response['response'] = false;
            $response['exceptions'][] = ($repitedUser)? 'Usuario ya registrado en la base de datos' :'Verifica el nombre de usuario que se generó';
        }

        if($request->userBirthDate === null || $request->user_name === ''){
            $response['response'] = false;
            $response['exceptions'][] = 'Debes ingresar una fecha de cumpleaños';
        }

        if($request->userPassword === null || $request->user_name === ''){
            $response['response'] = false;
            $response['exceptions'][] = 'Debes ingresar una contraseña';
        }

        if($request->userConfirmPassword === null || $request->user_name === ''){
            $response['response'] = false;
            $response['exceptions'][] = 'Las contraseñas no coinciden';
        }

        return $response;
    }
    public function validateRepitedUserName($userName){
        return Users::where('email', $userName)
        ->where('status', 1)
            ->exists();
    }
}
