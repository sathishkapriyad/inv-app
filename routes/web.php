<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:admin','auth'],'prefix'=>'admin','as'=>'admin.'], function () {
    Route::resource('invoice', App\Http\Controllers\Admin\InvoiceController::class);
    Route::get('viewPDF/{invoice}',[App\Http\Controllers\Admin\InvoiceController::class,'viewPDF'])->name('viewPDF');
    Route::resource('profile', App\Http\Controllers\Admin\ProfileController::class);
    Route::resource('visiting', App\Http\Controllers\Admin\VisitingController::class);
    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
    Route::post('visitPrint',[App\Http\Controllers\Admin\VisitingController::class,'visitPrint']);
    Route::get('getCustomerFromContact',[App\Http\Controllers\Admin\ProfileController::class,'getCustomerFromContact']);
});

Route::group(['middleware' => ['role:user','auth'],'prefix'=>'user','as'=>'user.'], function () {
    Route::resource('invoice', App\Http\Controllers\User\InvoiceController::class);
    Route::get('viewPDF/{invoice}',[App\Http\Controllers\User\InvoiceController::class,'viewPDF'])->name('viewPDF');
    Route::resource('profile', App\Http\Controllers\User\ProfileController::class);
    Route::resource('visiting', App\Http\Controllers\User\VisitingController::class);
    Route::post('visitPrint',[App\Http\Controllers\User\VisitingController::class,'visitPrint']);
    Route::get('getCustomerFromContact',[App\Http\Controllers\User\ProfileController::class,'getCustomerFromContact']);
});