<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/AboutUsFaroukGroup', [HomeController::class, 'aboutUs'])->name('home.aboutUs');
    Route::get('/Consulting', [HomeController::class, 'consulting'])->name('home.consulting');
    Route::get('/services', [HomeController::class, 'services'])->name('home.services');
    Route::get('/servicesDetails', [HomeController::class, 'servicesDetails'])->name('home.servicesDetails');
    Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

    Route::post('sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');




});


