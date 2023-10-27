<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Http\Requests\StoremessagesRequest;
use App\Http\Requests\UpdatemessagesRequest;
use Illuminate\Http\Request;
use App\Services\Utilities;
use mysql_xdevapi\Exception;

class MessagesController extends Controller
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
    public function create($messageData)
    {

        $response = [
            'message' => 'Su solicitud fue enviada exitosamente, en breve te contactaremos',
            'response' => true,
        ];

        try {
            Messages::create([
                'message_text' => $messageData['message'],
                'message_user_name' => $messageData['name'],
                'message_user_phone' => $messageData['phone'],
                'message_user_mail' => $messageData['email'],
                'message_status_id' => 1
            ]);

            $this->sendMailMessage($messageData);

        } catch (CustomException $error) {
            $response['response'] = false;
            $response['message'] = 'Hubo un error al crear la solicitud, reintente';
        }

        return $response;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremessagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(messages $messages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemessagesRequest $request, messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(messages $messages)
    {
        //
    }

    public function validateMessageRequest(Request $request)
    {
        $response = [
            'message' => 'Su solicitud fue enviada exitosamente',
            'response' => true,
        ];

        $errors = [];

        $requestData = $request->all();

        $utilities = new Utilities();

        $exist = Messages::where('message_user_phone', $requestData['email'])
            ->orWhere('message_user_phone', $requestData['phone'])
            ->exists();

        if ($exist) {
            $response['response'] = false;
            $response['message'] = 'Ya hay un registro con el número de telefono o con la dirección de correo electrónico, en breve te contactaremos';
            return $response;
        }

        if (!$utilities->validateEmail($requestData['email'])) {
            $response['response'] = false;
            $errors[] = 'Ingresa una dirección de correo valida';
        }

        if (strlen($requestData['name']) == 0) {
            $response['response'] = false;
            $errors[] = 'Envía tu nombre para continuar';
        }

        if (strlen($requestData['phone']) < 10) {
            $response['response'] = false;
            $errors[] = 'Ingresa un numero de telefono valido';
        }

        if (strlen($requestData['message']) < 20) {
            $response['response'] = false;
            $errors[] = 'Debes ingresar un mensaje más largo';
        }

        if (!$response['response']) {
            $response['errors'] = $errors;
            return $response;
        }

        return $this->create($requestData);
    }

    public function sendMailMessage($messageData)
    {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: arhpresupuestos@example.com' . "\r\n";
        $message = '<div style="display: flex; justify-content: center; width: auto">
<div style=" font-weight: bolder">SOLICITUD DE PRESUPUESTO</div>
</div>
<br>
<div>
<div>Has recibido el siguiente mensaje de :</div>
 <div><b>'. $messageData['name'] .'</b></div>
  <div>Celular: <b>'. $messageData['phone'] .'</b></div> <div>e-mail: <b> '  . $messageData['email'] . '</b></div>
  <br>
  <div style="font-weight: bolder;"> MENSAJE: </div>
  <div>' . $messageData['message'] . '</div>
</div>
<br>
<div style="font-weight: bolder"> CONTACTO</div>
<div>Aquí tienes las opciones para contactar a tu cliente: <a href="tel:' . $messageData['phone'] . '"> <br>Llamar</a> --- <a href="https://wa.me/' . $messageData['phone'] . '">Whatsapp</a> --- <a href="mailto:' . $messageData['email'] . '">Envía un correo</a></div>
<br>
<div style="font-weight: bolder">Recuerda que puedes visualizar este mensaje y todos los demas en tu página web: <a href="https://www.barandalesarh.com.mx">Barandales ARH</a></div>

';

        try {
            mail('barandalesarh79@gmail.com', 'SOLICITUD DE PRESUPUESTO', $message, $headers);
        }catch (CustomException $error){
            echo $error;
        }
    }
}
