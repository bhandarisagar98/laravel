<?php

use App\Http\Controllers\ParentController;
use App\Http\Controllers\PreAdmitFormsController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//homepage

Route::get('/', function(){
    return view('index');
});

//parent routes

/* parent dashboard*/
Route::get('/parent',[ParentController::class,'index']);

// staff dashboard
Route::get('/staff',[StaffController::class,'index']);

//patient preadmit form routes
Route::get('/parent/entry-form',[PreAdmitFormsController::class,'create'])->name('showpreadmitform');
Route::post('/parent/entry-form',[PreAdmitFormsController::class,'store'])->name('storepreadmitform');

//staff preadmit form routes
Route::get('/staff/entry-form',[PreAdmitFormsController::class,'index'])->name('staff-view-entry-form');
Route::get('staff/view-single-entry-form/{id}',[PreAdmitFormsController::class,'show'])->name('staff-view-single-admission-form');
Route::get('/staff/entry-formdelete/{id}',[PreAdmitFormsController::class,'destroy'])->name('staff-delete-entry-form');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
