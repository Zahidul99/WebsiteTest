<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
session_start();

class AdminController extends Controller
{
    public function AdminAuthCheck()
    {
    	$admin_id=Session::get('admin_id');
    	if ($admin_id) {
    		return;
    	}
    	else{
    		return Redirect::to('/admin')->send();
    	}
    }
    public function indexadmin()
    {
        return view('login');
    }
    public function indexDashboard(Request $request)
    {
        $admin_email=$request->admin_email;
        $admin_password=md5($request->admin_password);
        $result = Admin::where('admin_email',$admin_email)
        ->where('admin_password',$admin_password)
        ->first();

        if($result)
        {
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }
        else
        {
               Session::put('messege','Email or Password Invalid');
               return Redirect::to('/admin');
        }

    }
    public function index()
    {
        $this->AdminAuthCheck();
        return view('admin_dashboard');
    }
    public function admin_logout()
    {
    	Session::flush();
    	return Redirect::to('/admin');
    }
}
