<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'ViewController@indexHome')->name('Home');
Route::get('/about', 'ViewController@indexAbout')->name('About');
Route::get('/service', 'ViewController@indexService')->name('Service');
Route::get('/portfolio', 'ViewController@indexPortfolio')->name('Portfolio');
Route::get('/contact', 'ViewController@indexContact')->name('Contact');
Route::get('/get_started', 'ViewController@indexGetStarted')->name('Get_Started');
Route::get('/portfolio_details/{project_id}', 'ViewController@AppPortfoliodetails')->name('Portfolio_Details');


/*
Admin
*/
Route::get('/admin', 'AdminController@indexadmin')->name('Admin');
Route::post('/admin-dashboard', 'AdminController@indexDashboard')->name('Admin_Dashboard');
Route::get('/dashboard','AdminController@index')->name('Dashoboard');
Route::get('/logout','AdminController@admin_logout')->name('Logout');

Route::get('/add-logo','AddController@addView')->name('Add_Logo');
Route::post('/save-logo','AddController@addSave')->name('Save_logo');
Route::get('/all-logo','AddController@allView')->name('All_Logo');
Route::get('/unactive-logo/{logo_id}','AddController@unactive_logo')->name('Unactive_Logo');
Route::get('/active-logo/{logo_id}','AddController@active_logo')->name('Active_Logo');
Route::get('/edit-logo/{logo_id}','AddController@edit_logo')->name('Edit_Logo');
Route::post('/update-logo/{logo_id}','AddController@update_logo')->name('Update_logo');
Route::get('/delete-logo/{logo_id}','AddController@delete_logo')->name('Delete_Logo');



Route::post('/add-subscribe','AddController@addSubscribe')->name('Add_Subscribe');
Route::get('/all-subscribe','AddController@all_subscribe')->name('All-Subscribe');
Route::get('/delete-subscriber/{subscriber_id}','AddController@delete_subscriber')->name('Delete_Subscriber');


Route::get('/all-service','AddController@all_service')->name('All-Service');
Route::get('/edit-service/{service_id}','AddController@edit_service')->name('Edit_Service');
Route::post('/update-service/{service_id}','AddController@update_service')->name('Update_Service');


Route::post('/send-mail','MailController@send_mail')->name('Send_Mail');


Route::get('/add-app-project','ProjectController@add_app_project')->name('Add-Project');
Route::post('/save-app-project','ProjectController@save_app_project')->name('Save-Project');
Route::get('/all-app-project','ProjectController@all_app_project')->name('All-Project');
Route::get('/edit-app-project/{project_id}','ProjectController@edit_app_project')->name('Edit-Project');
Route::post('/update-app-project/{project_id}','ProjectController@update_app_project')->name('Update-Project');
Route::get('/unactive-app-project/{project_id}','ProjectController@unactive_app_project')->name('Unactive-Project');
Route::get('/active-app-project/{project_id}','ProjectController@active_app_project')->name('Active-Project');
Route::get('/delete-app-project/{project_id}','ProjectController@delete_app_project')->name('All-Project');


Route::get('/add-card-project','ProjectController@add_card_project')->name('Add-Project');
Route::post('/save-card-project','ProjectController@save_card_project')->name('Save-Project');
Route::get('/all-card-project','ProjectController@all_card_project')->name('All-Project');
Route::get('/edit-card-project/{cproject_id}','ProjectController@edit_card_project')->name('Edit-Project');
Route::post('/update-card-project/{cproject_id}','ProjectController@update_card_project')->name('Update-Project');
Route::get('/unactive-card-project/{cproject_id}','ProjectController@unactive_card_project')->name('Unactive-Project');
Route::get('/active-card-project/{cproject_id}','ProjectController@active_card_project')->name('Active-Project');
Route::get('/delete-card-project/{cproject_id}','ProjectController@delete_card_project')->name('All-Project');


Route::get('/add-web-project','ProjectController@add_web_project')->name('Add-Project');
Route::post('/save-web-project','ProjectController@save_web_project')->name('Save-Project');
Route::get('/all-web-project','ProjectController@all_web_project')->name('All-Project');
Route::get('/edit-web-project/{wproject_id}','ProjectController@edit_web_project')->name('Edit-Project');
Route::post('/update-web-project/{wproject_id}','ProjectController@update_web_project')->name('Update-Project');
Route::get('/unactive-web-project/{wproject_id}','ProjectController@unactive_web_project')->name('Unactive-Project');
Route::get('/active-web-project/{wproject_id}','ProjectController@active_web_project')->name('Active-Project');
Route::get('/delete-web-project/{wproject_id}','ProjectController@delete_web_project')->name('All-Project');
