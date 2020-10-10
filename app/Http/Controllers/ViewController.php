<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ViewController extends Controller
{
    public function indexHome()
    {
        return view('welcome');
    }

    public function indexAbout()
    {
        return view('about');
    }

    
    public function indexService()
    {
        return view('service');
    }
    public function indexPortfolio()
    {
        return view('portfolio');
    }
    public function indexContact()
    {
        return view('contact');
    }
    public function AppPortfoliodetails($project_id)
    {   
        $project_details=DB::table('projects')
        ->where('project_id',$project_id)
        ->first();

        $project_details=view('portfolio_details')
        ->with('project_details',$project_details);

        return view('layout')
        ->with('portfolio_details',$project_details);
    }
    public function indexGetStarted()
    {
        return view('get-started');
    }

}    
   
