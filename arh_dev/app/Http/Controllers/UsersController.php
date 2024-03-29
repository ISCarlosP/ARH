<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Services\SessionServices;
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
    public function update(Request $request){
        $utilitiesProvider = new Utilities();
        $response = $utilitiesProvider->createResponse();
        $dashboard = new DashboardController();

        if($this->validateRepitedUserName($request->email)){

            $userWithEmail = Users::where('email', $request->email)
                ->where('status', 1)
                ->first();

            if($userWithEmail->id !== $request->userId){

                $response['response'] = false;
                $response['message'] = 'El nombre de usuario que se generó automaticamente ya esta en el sistema';
                return $response;
            }
        }

        $editUser = Users::where('id', $request->userId)
            ->first();

        $editUser->first_name = $request->userName;
        $editUser->email = $request->email;
        $editUser->last_name = $request->userLastName . ' ' . $request->userLastName1;
        $editUser->user_birth_date = Carbon::parse($request->userBirthDate);

        if($request->userPassword !== '' &&  $request->userPassword !== null){
            $editUser->password = Hash::make($request->userPassword);
        }

        $editUser->save();

        $response['message'] = 'Modificaste el usuario exitosamente';
        $response['values'] = $dashboard->getActiveUsers();

        return $response;
    }

    public function destroy(Request $request){
        $utilitiesProvider = new Utilities();
        $dashboard = new DashboardController();
        $sessionProvider = new SessionServices();
        $logged = $sessionProvider->getLoggedUser();
        $response = $utilitiesProvider->createResponse();

        if($logged['id'] === $request->userId){
            $response['response'] = false;
            $response['message'] = 'No puedes eliminar tu propio usuario';

            return $response;
        }

        $user = Users::where('id', $request->userId)
            ->first();

        $user->status = 2;
        $user->save();

        $allUsers = $dashboard->getActiveUsers();
        $response['values'] = $allUsers;
        $response['message'] = 'Se eliminó el usuario éxitosamente';

        return $response;
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
