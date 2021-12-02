<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
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


// Route::get('app/destroy',"App\Http\Controllers\AppointmentController@destroy")->name('destroy');

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/dashboard', function () {
    return view('frontend.dashboard');
})->name("dash");

Route::get('/galary', [App\Http\Controllers\HomeController::class, 'galary'])->name('galary');
Route::get('/calendar', [App\Http\Controllers\HomeController::class, 'calendar'])->name('calendar');
Route::resource('/appointment',"App\Http\Controllers\AppointmentController");
//Route::get('/appointments', [App\Http\Controllers\HomeController::class, 'viewappointment'])->name('appointment');
