<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JetMessages extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['message'] = Message::latest()->where('user_id', Auth::user()->id)->paginate(10);
        $data['count'] = Message::where('user_id', Auth::user()->id)->count();
        return view('site/jetstream/messages/messages', $data);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['message'] = Message::findOrFail($id);
        return view('site/jetstream/messages/message', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}