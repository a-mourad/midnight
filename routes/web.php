<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ServicesController;
use App\Models\User;

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

//Route::get('/',[midnightController::class,'landing']);

    //// Show Login Form
/*Route::get('/login',[UserController::class,'login']);
Route::post('/postLogin',[UserController::class,'postLogin']);
//register form
Route::get('/register',[UserController::class,'register']);
Route::post('/postRegister',[UserController::class,'postRegister']);
Route::get('/agencyListingPage',[UserController::class,'agencyListingPage']);
Route::get('/agencyListingPages',[UserController::class,'agencyListingPagee']);
*/


Route::get('testcompany', [UserController::class,'test']);


// form for register and login
Route::get('/login',[UserController::class,'login'])->name('login');

Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/postLogin',[UserController::class,'postLogin'])->name('postLogin');

Route::get('/logout',[UserController::class,'logoutUser'])->name('logout');

Route::post('/postRegister',[UserController::class,'postRegister'])->name('postRegister');

//test//
//Route::get('/logout',[UserController::class,'logoutUser']);



// midnghitController:
Route::resource('companies',CompaniesController::class);

//servicesController:
Route::resource('companies.services',ServicesController::class)->shallow();