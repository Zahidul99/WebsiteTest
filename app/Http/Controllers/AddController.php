<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Logo;
use App\Social;
use App\Subscribe;
use App\Service;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AddController extends Controller
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
    public function addView()
    {
        return view('add_logo');
    }
    public function addSave(Request $request)
    {
        $this->AdminAuthCheck();
        $logo = new Logo;
        $logo->status =$request->status;
        $image=$request->file('logo_image');
       if ($image) {
        $image_name=str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='img/';
     $image_url=$upload_path.$image_full_name;
     $success=$image->move($upload_path,$image_full_name);
     if ($success) {
         $data['logo_image']=$image_url;

                $logo->insert($data);
                Session::put('messege','logo added successfully!!');
                return Redirect::to('/add-logo');

                }       	
            }
    }

    public function allView()
    {
        $logo = Logo::all();

        $manage_logo=view('all_logo')
        ->with('logo',$logo);

        return view('admin_layout')
        ->with('all_logo',$manage_logo);


    }
     
    public function unactive_logo($logo_id)
    {
    
        DB::table('logos')
        ->where('logo_id',$logo_id)
        ->update(['status'=>0]);
        Session::put('messege','Product Unactive successfully !!');

	return Redirect::to('/all-logo');
    }

    public function active_logo($logo_id)
    {
       
        DB::table('logos')
        ->where('logo_id',$logo_id)
        ->update(['status'=>1]);
        Session::put('messege','Logo active successfully !!');
    

	return Redirect::to('/all-logo');
    }

    public function edit_logo($logo_id)
    {
        $logo_info=DB::table('logos')
        ->where('logo_id',$logo_id)
        ->first();

        $logo_info=view('edit_logo')
        ->with('logo_info',$logo_info);

        return view('admin_layout')
        ->with('edit_logo',$logo_info);
    }

    public function update_logo(Request $request,$logo_id)
    {
        $this->AdminAuthCheck();
        $data=array();
    
        $image=$request->file('logo_image');

        if ($image) {
         $image_name=str::random(20);
         $ext=strtolower($image->getClientOriginalExtension());
         $image_full_name=$image_name.'.'.$ext;
         $upload_path='image/';
         $image_url=$upload_path.$image_full_name;
         $success=$image->move($upload_path,$image_full_name);
         if ($success) {
           $data['logo_image']=$image_url;
           unlink($request->old_photo);

              DB::table('logos')
              ->where('logo_id',$logo_id)
               ->update($data);
                Session::put('messege','Logo Update successfully !!');
                return Redirect::to('/all-logo');
              }
            }
 
                     
           $data['logo_image']=$request->old_photo;
           DB::table('logos')
           ->where('logo_id',$logo_id)
           ->update($data);
 
           Session::put('messege','Logo Update successfully without image!!');
                 return Redirect::to('/all-logo'); 
 
     }

     public function delete_logo($logo_id)
     {
        $this->AdminAuthCheck();
        DB::table('logos')
        ->where('logo_id',$logo_id)
        ->delete();
          Session::put('messege','logo deleted successfully !!');
         return Redirect::to('/all-logo');

   } 
     
     public function addSubscribe(Request $request)
   {
      $data=array();
      $data['subscriber_email']=$request->subscriber_email;
      DB::table('subscribes')->insert($data);
      Session::put('messege','Subscribe successfully !!');
      return Redirect::to('/');

   }

   public function all_subscribe()
   {
    $all_data=DB::table('subscribes')->get();
    $manage_subscribe=view('subscribe')
    ->with('all_data',$all_data);

    return view('admin_layout')
    ->with('subscribe',$manage_subscribe);
   }
  
   public function delete_subscriber($subscriber_id)
     {
        $this->AdminAuthCheck();
        DB::table('subscribes')
        ->where('subscriber_id',$subscriber_id)
        ->delete();
          Session::put('messege','Subscriber deleted successfully !!');
         return Redirect::to('/all-subscribe');

   } 

   public function all_service()
   {
    $all_info=DB::table('services')->get();
    $manage_service=view('company_details')
    ->with('all_info',$all_info);

    return view('admin_layout')
    ->with('company_details',$manage_service);
   }

   public function edit_service($service_id)
   {
    $this->AdminAuthCheck();
    $all_service_info=DB::table('services')
    ->where('service_id',$service_id)
    ->first();
    $all_service_info=view('edit_company_details')
         ->with('all_service_info',$all_service_info);

         return view('admin_layout')
         ->with('edit_details',$all_service_info);
   }

   public function update_service(Request $request,$service_id)
   {
    $this->AdminAuthCheck();
    $data=array();
    $data['client_no']=$request->client_no;
    $data['project_no']=$request->project_no;
    $data['support_time']=$request->support_time;
    $data['hard_worker']=$request->hard_worker;
    DB::table('services')
    ->where('service_id',$service_id)
    ->update($data);
    Session::put('messege','Service Update successfully !!');

    return Redirect::to('/all-service');
   }



}
