<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests;
use DB;
use App\Project;
use App\Cproject;
use App\Wproject;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProjectController extends Controller
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
    public function add_app_project()
    {
        return view('add_app_project');
    }
    public function save_app_project(Request $request)
    {
        $this->AdminAuthCheck();
        $data=array();
        $data['project_name']=$request->project_name;
        $data['project_category']=$request->project_category;
        $data['category']=$request->category;
        $data['client']=$request->client;
        $data['project_date']=$request->project_date;
        $data['project_url']=$request->project_url;
        $data['status']=$request->status;
        $image=$request->file('project_image');
        $image_name=str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='img/';
     $image_url=$upload_path.$image_full_name;
     $success=$image->move($upload_path,$image_full_name);
     
         $data['project_image']=$image_url;

         $image=$request->file('project_image1');
         $image_name=str::random(20);
         $ext=strtolower($image->getClientOriginalExtension());
         $image_full_name=$image_name.'.'.$ext;
         $upload_path='img/';
      $image_url=$upload_path.$image_full_name;
      $success=$image->move($upload_path,$image_full_name);
      
          $data['project_image1']=$image_url;

          $image=$request->file('project_image2');
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='img/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       
           $data['project_image2']=$image_url;

           $image=$request->file('project_image3');
           $image_name=str::random(20);
           $ext=strtolower($image->getClientOriginalExtension());
           $image_full_name=$image_name.'.'.$ext;
           $upload_path='img/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        
            $data['project_image3']=$image_url;
   
  
 

               DB::table('projects')->insert($data);
                Session::put('messege','Project added successfully!!');
                return Redirect::to('/add-app-project');
 

    }

    public function all_app_project()
    {
        $allproject = Project::all();

        $manage_project=view('all_app_project')
        ->with('allproject',$allproject);

        return view('admin_layout')
        ->with('all_app_project',$manage_project);
    }

    public function edit_app_project($project_id)
    {

        $project_info=DB::table('projects')
        ->where('project_id',$project_id)
        ->first();

        $project_info=view('edit_app_project')
        ->with('project_info',$project_info);

        return view('admin_layout')
        ->with('edit_app_project',$project_info);
    }


    public function update_app_project(Request $request,$project_id)
    {
        $data=array();
         $data['project_name']=$request->project_name;
         $data['project_category']=$request->project_category;
         $data['category']=$request->category;
         $data['client']=$request->client;
         $data['project_date']=$request->project_date;
         $data['project_url']=$request->project_url;

         $image=$request->file('project_image');
         if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['project_image']=$image_url;
            unlink($request->old_photo);
            DB::table('projects')
            ->where('project_id',$project_id)
             ->update($data);
          }

        }
        $data['project_image']=$request->old_photo;
        DB::table('projects')
        ->where('project_id',$project_id)
        ->update($data);

            $image=$request->file('project_image1');
            if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['project_image1']=$image_url;
            unlink($request->old_photo1);
            DB::table('projects')
            ->where('project_id',$project_id)
             ->update($data);
          }

        }

        $data['project_image1']=$request->old_photo1;
        DB::table('projects')
        ->where('project_id',$project_id)
        ->update($data);

            $image=$request->file('project_image2');
            if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['project_image2']=$image_url;
            unlink($request->old_photo2);
            DB::table('projects')
            ->where('project_id',$project_id)
             ->update($data);

          }
        }
        $data['project_image2']=$request->old_photo2;
        DB::table('projects')
        ->where('project_id',$project_id)
        ->update($data);
        
            $image=$request->file('project_image3');
            if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['project_image3']=$image_url;
            unlink($request->old_photo3);
 
               DB::table('projects')
               ->where('project_id',$project_id)
                ->update($data);

          }
        }
        $data['project_image3']=$request->old_photo3;
        DB::table('projects')
        ->where('project_id',$project_id)
        ->update($data);
        
                 Session::put('messege','Project Update successfully !!');
                 return Redirect::to('/all-app-project');
            
        

    }



    public function unactive_app_project($project_id)
    {
        DB::table('projects')
        ->where('project_id',$project_id)
        ->update(['status'=>0]);
        Session::put('messege','Project Unactive successfully !!');
    
        return Redirect::to('/all-app-project');
    }

    public function active_app_project($project_id)
    {
        DB::table('projects')
        ->where('project_id',$project_id)
        ->update(['status'=>1]);
        Session::put('messege','Project Active successfully !!');
    
        return Redirect::to('/all-app-project');
    }

    public function delete_app_project($project_id)
    {
        DB::table('projects')
        ->where('project_id',$project_id)
        ->delete();
        Session::put('messege','Project deleted successfully !!');
        return Redirect::to('/all-app-project');
    }
     
     

    public function add_card_project()
    {
        return view('add_card_project');
    }

    public function save_card_project(Request $request)
    {
        $this->AdminAuthCheck();
        $data=array();
        $data['cproject_name']=$request->cproject_name;
        $data['cproject_category']=$request->cproject_category;
        $data['ccategory']=$request->ccategory;
        $data['cclient']=$request->cclient;
        $data['cproject_date']=$request->cproject_date;
        $data['cproject_url']=$request->cproject_url;
        $data['status']=$request->status;
        $image=$request->file('cproject_image');
        $image_name=str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='img/';
     $image_url=$upload_path.$image_full_name;
     $success=$image->move($upload_path,$image_full_name);
     
         $data['cproject_image']=$image_url;

         $image=$request->file('cproject_image1');
         $image_name=str::random(20);
         $ext=strtolower($image->getClientOriginalExtension());
         $image_full_name=$image_name.'.'.$ext;
         $upload_path='img/';
      $image_url=$upload_path.$image_full_name;
      $success=$image->move($upload_path,$image_full_name);
      
          $data['cproject_image1']=$image_url;

          $image=$request->file('cproject_image2');
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='img/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       
           $data['cproject_image2']=$image_url;

           $image=$request->file('cproject_image3');
           $image_name=str::random(20);
           $ext=strtolower($image->getClientOriginalExtension());
           $image_full_name=$image_name.'.'.$ext;
           $upload_path='img/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        
            $data['cproject_image3']=$image_url;
   
  
 

               DB::table('cprojects')->insert($data);
                Session::put('messege','Project added successfully!!');
                return Redirect::to('/add-card-project');
 

    }


    public function all_card_project()
    {
        $allcproject = Cproject::all();

        $manage_cproject=view('all_card_project')
        ->with('allcproject',$allcproject);

        return view('admin_layout')
        ->with('all_card_project',$manage_cproject);
    }

    public function edit_card_project($cproject_id)
    {

        $cproject_info=DB::table('cprojects')
        ->where('cproject_id',$cproject_id)
        ->first();

        $cproject_info=view('edit_card_project')
        ->with('cproject_info',$cproject_info);

        return view('admin_layout')
        ->with('edit_card_project',$cproject_info);
    }
     
    public function update_card_project(Request $request,$cproject_id)
    {
        $data=array();
         $data['cproject_name']=$request->cproject_name;
         $data['cproject_category']=$request->cproject_category;
         $data['ccategory']=$request->ccategory;
         $data['cclient']=$request->cclient;
         $data['cproject_date']=$request->cproject_date;
         $data['cproject_url']=$request->cproject_url;

         $image=$request->file('cproject_image');
         if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['cproject_image']=$image_url;
            unlink($request->old_photo);
            DB::table('cprojects')
            ->where('cproject_id',$cproject_id)
             ->update($data);
          }
        }
        $data['cproject_image']=$request->old_photo;
        DB::table('cprojects')
        ->where('cproject_id',$cproject_id)
        ->update($data);

            $image=$request->file('cproject_image1');
            if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['cproject_image1']=$image_url;
            unlink($request->old_photo1);
            DB::table('cprojects')
            ->where('cproject_id',$cproject_id)
             ->update($data);
          }
        } 

        $data['cproject_image1']=$request->old_photo1;
        DB::table('cprojects')
        ->where('cproject_id',$cproject_id)
        ->update($data);

            $image=$request->file('cproject_image2');
            if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['cproject_image2']=$image_url;
            unlink($request->old_photo2);
            DB::table('cprojects')
            ->where('cproject_id',$cproject_id)
             ->update($data);
          }
        }
        $data['cproject_image2']=$request->old_photo2;
        DB::table('cprojects')
        ->where('cproject_id',$cproject_id)
        ->update($data);
        
            $image=$request->file('cproject_image3');
            if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['cproject_image3']=$image_url;
            unlink($request->old_photo3);
            DB::table('cprojects')
            ->where('cproject_id',$cproject_id)
             ->update($data);
          }
        }
        $data['cproject_image3']=$request->old_photo3;
        DB::table('cprojects')
        ->where('cproject_id',$cproject_id)
        ->update($data);
        
                 Session::put('messege','Project Update successfully !!');
                 return Redirect::to('/all-card-project');
            
        

    }
    public function unactive_card_project($cproject_id)
    {
        DB::table('cprojects')
        ->where('cproject_id',$cproject_id)
        ->update(['status'=>0]);
        Session::put('messege','Project Unactive successfully !!');
    
        return Redirect::to('/all-card-project');
    }

    public function active_card_project($cproject_id)
    {
        DB::table('cprojects')
        ->where('cproject_id',$cproject_id)
        ->update(['status'=>1]);
        Session::put('messege','Project Active successfully !!');
    
        return Redirect::to('/all-card-project');
    }
    public function delete_card_project($cproject_id)
    {
        DB::table('cprojects')
        ->where('cproject_id',$cproject_id)
        ->delete();
        Session::put('messege','Project deleted successfully !!');
        return Redirect::to('/all-card-project');
    }

    public function add_web_project()
    {
        return view('add_web_project');
    }
     
    public function save_web_project(Request $request)
    {
        $this->AdminAuthCheck();
        $data=array();
        $data['wproject_name']=$request->wproject_name;
        $data['wproject_category']=$request->wproject_category;
        $data['wcategory']=$request->wcategory;
        $data['wclient']=$request->wclient;
        $data['wproject_date']=$request->wproject_date;
        $data['wproject_url']=$request->wproject_url;
        $data['status']=$request->status;
        $image=$request->file('wproject_image');
        $image_name=str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='img/';
     $image_url=$upload_path.$image_full_name;
     $success=$image->move($upload_path,$image_full_name);
     
         $data['wproject_image']=$image_url;

         $image=$request->file('wproject_image1');
         $image_name=str::random(20);
         $ext=strtolower($image->getClientOriginalExtension());
         $image_full_name=$image_name.'.'.$ext;
         $upload_path='img/';
      $image_url=$upload_path.$image_full_name;
      $success=$image->move($upload_path,$image_full_name);
      
          $data['wproject_image1']=$image_url;

          $image=$request->file('wproject_image2');
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='img/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       
           $data['wproject_image2']=$image_url;

           $image=$request->file('wproject_image3');
           $image_name=str::random(20);
           $ext=strtolower($image->getClientOriginalExtension());
           $image_full_name=$image_name.'.'.$ext;
           $upload_path='img/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        
            $data['wproject_image3']=$image_url;
   
  
 

               DB::table('wprojects')->insert($data);
                Session::put('messege','Project added successfully!!');
                return Redirect::to('/add-web-project');
 

    }
    
    public function all_web_project()
    {
        $allwproject = Wproject::all();

        $manage_wproject=view('all_web_project')
        ->with('allwproject',$allwproject);

        return view('admin_layout')
        ->with('all_web_project',$manage_wproject);
    }

    public function edit_web_project($wproject_id)
    {

        $wproject_info=DB::table('wprojects')
        ->where('wproject_id',$wproject_id)
        ->first();

        $wproject_info=view('edit_web_project')
        ->with('wproject_info',$wproject_info);

        return view('admin_layout')
        ->with('edit_web_project',$wproject_info);
    }
    
    public function update_web_project(Request $request,$wproject_id)
    {
        $data=array();
         $data['wproject_name']=$request->wproject_name;
         $data['wproject_category']=$request->wproject_category;
         $data['wcategory']=$request->wcategory;
         $data['wclient']=$request->wclient;
         $data['wproject_date']=$request->wproject_date;
         $data['wproject_url']=$request->wproject_url;

         $image=$request->file('wproject_image');
         if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['wproject_image']=$image_url;
            unlink($request->old_photo);
            DB::table('wprojects')
            ->where('wproject_id',$wproject_id)
             ->update($data);
          }

        }
        $data['wproject_image']=$request->old_photo;
        DB::table('wprojects')
        ->where('wproject_id',$wproject_id)
        ->update($data);

            $image=$request->file('wproject_image1');
            if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['wproject_image1']=$image_url;
            unlink($request->old_photo1);
            DB::table('wprojects')
            ->where('wproject_id',$wproject_id)
             ->update($data);
          }

        }

        $data['wproject_image1']=$request->old_photo1;
        DB::table('wprojects')
        ->where('wproject_id',$wproject_id)
        ->update($data);

            $image=$request->file('wproject_image2');
            if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['wproject_image2']=$image_url;
            unlink($request->old_photo2);
            DB::table('wprojects')
            ->where('wproject_id',$wproject_id)
             ->update($data);

          }
        }
        $data['wproject_image2']=$request->old_photo2;
        DB::table('wprojects')
        ->where('wproject_id',$wproject_id)
        ->update($data);
        
            $image=$request->file('wproject_image3');
            if ($image) {
          $image_name=str::random(20);
          $ext=strtolower($image->getClientOriginalExtension());
          $image_full_name=$image_name.'.'.$ext;
          $upload_path='image/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          if ($success) {
            $data['wproject_image3']=$image_url;
            unlink($request->old_photo3);
 
               DB::table('wprojects')
               ->where('wproject_id',$wproject_id)
                ->update($data);

          }
        }
        $data['wproject_image3']=$request->old_photo3;
        DB::table('wprojects')
        ->where('wproject_id',$wproject_id)
        ->update($data);
        
                 Session::put('messege','Project Update successfully !!');
                 return Redirect::to('/all-web-project');
            
        

    }
    public function unactive_web_project($wproject_id)
    {
        DB::table('wprojects')
        ->where('wproject_id',$wproject_id)
        ->update(['status'=>0]);
        Session::put('messege','Project Unactive successfully !!');
    
        return Redirect::to('/all-web-project');
    }

  
    public function active_web_project($wproject_id)
    {
        DB::table('wprojects')
        ->where('wproject_id',$wproject_id)
        ->update(['status'=>1]);
        Session::put('messege','Project Active successfully !!');
    
        return Redirect::to('/all-web-project');
    }

    public function delete_web_project($wproject_id)
    {
        DB::table('wprojects')
        ->where('wproject_id',$wproject_id)
        ->delete();
        Session::put('messege','Project deleted successfully !!');
        return Redirect::to('/all-web-project');
    }
     



}
