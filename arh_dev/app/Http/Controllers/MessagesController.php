<?php

namespace App\Http\Controllers;

use App\Models\messages;
use App\Http\Requests\StoremessagesRequest;
use App\Http\Requests\UpdatemessagesRequest;
use Illuminate\Http\Request;

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
    public function create()
    {
        //
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

    public function validateMessageRequest(Request $request){
        $a = 0;
       return 'Hola como estas';
    }
}
