<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('check',function(){
//     echo "Alright";
// });

Route::get('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');