<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\SocialNetwork;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home(Request $request)
    {
        // Get Visitors
        $visitorIP = $request->ip();
        // $visitorLocation = $request->locale_get_region();
        // $visitorLocation = $request->platform();
        $visitor = Visitor::firstorCreate(['ip' => $visitorIP]);
        $visitor->increment('request');
        $visitor->save();


        $data['social'] = SocialNetwork::latest()->get();
        $data['servicegen'] = Service::latest()->where('is_active', 1)->get();
        $data['project'] = Project::latest()->where('approved', 1)->get();
        $data['users'] = User::where('isTeamMember', 1)->get();
        return view('/site/index', $data);
    }
    function about()
    {
        $data['social'] = SocialNetwork::latest()->get();
        $data['servicegen'] = Service::latest()->where('is_active', 1)->get();
        return view('/site/about', $data);
    }

    function service(Service $service)
    {
        $data['social'] = SocialNetwork::latest()->get();
        $data['servicegen'] = Service::latest()->where('is_active', 1)->get();
        $data['service'] = $service;
        return view('site/service', $data);
    }
    function project(Project $project)
    {
        $data['social'] = SocialNetwork::latest()->get();
        $data['servicegen'] = Service::latest()->where('is_active', 1)->get();
        $data['project'] = $project;
        return view('/site/project', $data);
    }
}
