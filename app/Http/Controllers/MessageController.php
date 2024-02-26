<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\MessageSent;
use Illuminate\Http\Request;
use App\Mail\MessageSentReply;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    function message(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:3|max:255',
            'subject' => 'required|string|min:3|max:255',
            'email' => 'required|email|min:3|max:255',
            'message' => 'required|string|min:10|max:1500',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/#contact')->withErrors($validator)->withInput();
        } else {
            try {
                DB::beginTransaction();
                $data = new Message();
                $data->name = $request->input('name');
                // $data->subject = $request->input('subject');
                $data->email = $request->input('email');

                $data->user_id = Auth::id();
                $data->subject = htmlspecialchars($request->input('subject'));
                $data->message = htmlspecialchars($request->input('message'));
                $data->save();
                $mailto = 'info@cloudstechn.com';
                Mail::to($mailto)->send(new MessageSent($data));
                Mail::to($data->email)->send(new MessageSentReply($data));
                DB::commit();
                session()->flash('success', 'Thank you for contacting TechClouds, Your Message is received successiful!!');
                return redirect()->route('home');
            } catch (\Exception $e) {
                DB::rollBack();
                session()->flash('error', 'Sorry. There is a Technical Problem in sending Message, Our technical Pasonnel team in handling it down. Service will be up very soon');
                return redirect()->route('home');
            }
        }
    }
}