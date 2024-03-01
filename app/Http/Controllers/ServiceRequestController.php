<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ServiceRequested;
use App\Models\ServiceRequest;
use Illuminate\Support\Facades\DB;
use App\Mail\ServiceRequestedReply;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ServiceRequestController extends Controller
{
    function order(Request $request)
    {
        $rules = [
            'clientId' => 'required',
            'customerName' => 'required|string|min:5|max:50',
            'customerEmail' => 'required|email|min:5|max:250',
            'serviceRequested' => 'required|string|min:5|max:250',
            'servicetDescription' => 'required|string|min:5|max:1500',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            session()->flash('error', 'Please Describe shortly the service you are wishing to order with a minimum of 15 words and maximum of 1500 words');
            return redirect()->route('home')->withErrors($validator)->withInput();
        } else {
            try {
                DB::beginTransaction();
                $data = new ServiceRequest();
                $data->clientId = $request->input('clientId');
                $data->customerName = $request->input('customerName');
                $data->customerEmail = $request->input('customerEmail');
                $data->serviceRequested = $request->input('serviceRequested');
                $data->servicetDescription = htmlspecialchars($request->input('servicetDescription'));
                $data->save();

                $mailto = 'info@cloudstechn.com';
                Mail::to($mailto)->send(new ServiceRequested($data));
                // Mail::to($data->customerEmail)->send(new ServiceRequestedReply($data));
                DB::commit();
                session()->flash('success', 'Thank you for requesting service at TechClouds, We will come back to you very soon');
                return redirect()->route('home');
            } catch (\Exception $e) {
                DB::rollback();
                session()->flash('error', 'Sorry. There is a Technical Problem in sending Service Application, Our technical Pasonnel team is handling it. Service will be up very soon');
                return redirect()->route('home');
            }
        }
    }
}
