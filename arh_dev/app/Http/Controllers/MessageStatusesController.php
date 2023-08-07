<?php

namespace App\Http\Controllers;

use App\Models\message_statuses;
use App\Http\Requests\Storemessage_statusesRequest;
use App\Http\Requests\Updatemessage_statusesRequest;

class MessageStatusesController extends Controller
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
    public function store(Storemessage_statusesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(message_statuses $message_statuses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(message_statuses $message_statuses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatemessage_statusesRequest $request, message_statuses $message_statuses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(message_statuses $message_statuses)
    {
        //
    }
}
