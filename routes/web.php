<?php

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
use App\student;
use App\admin;
Route::get('/', function () {
    return view('index');
});
Route::get('/home','login_controller@home');
Route::get('/admin',function(){
	return view('admin_login');
});
Route::post('/admin_auth','login_controller@admin_auth');

Route::post('/auth','login_controller@auth');

Route::get('/admin_home', 'login_controller@admin_home');
Route::get('/view_records', function(){
	$res = student::all();
	return view('all_records',compact('res'));
});
Route::get('/delete/{id}','login_controller@delete');
Route::get('/insert_records', function(){
	return view('insert');
});
Route::post('/insert','login_controller@insert');
Route::get('/update/{id}','login_controller@update');
Route::post('/edit','login_controller@edit');
Route::get('/attendance','login_controller@attendance');
Route::get('/logout','login_controller@logout');
Route::get('/logout_admin','login_controller@logout_admin');
Route::get('/security','login_controller@security');
Route::get('/security_admin','login_controller@security_admin');
Route::get('/change_password','login_controller@change_password');
Route::post('/c_pass','login_controller@c_pass');
Route::post('/c_pass_admin','login_controller@c_pass_admin');
Route::get('/change_password_admin','login_controller@change_password_admin');
Route::get('/choose_student',function(){
	$res = student::all();
	return view('choose_student',compact('res'));
});
Route::get('/insert_marks/{usn}','login_controller@insert_marks');
Route::post('/marks','login_controller@marks');
Route::get('/marks_details/{usn}','login_controller@marks_details');
Route::get('/update_marks/{id}','login_controller@update_marks');
Route::post('/mupdate','login_controller@mupdate');
?>

