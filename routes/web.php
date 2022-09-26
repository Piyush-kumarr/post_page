<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;

 
/*user image*/
Route::get('students',[StudentController::class,'index']);
Route::get('add-student',[StudentController::class,'create']);
Route::post('add-student',[StudentController::class,'store']);


// Route::post('saveuser',[StudentController::class,'save']);



Route::get('/',[UserController::class,'loginForm']);
Route::post('loginData',[UserController::class,'loginData']);
Route::get('createAccount',[UserController::class,'createAccount']);// view createAccount page
Route::post('saveUser',[UserController::class,'saveUser']);
Route::get('userProfile',[UserController::class,'userProfile']);
Route::get('/logout',[UserController::class,'logout']);
Route::get('adminlogin',[UserController::class,'adminlogin']);
Route::post('adminsave',[UserController::class,'adminsave']);
Route::get('admin',[UserController::class,'admin']);
Route::view("userProfilePost","userProfilePost");

Route::view("fb",'FbHeader');