<?php

use App\Http\Controllers\Front\CustomerLoginController;
use App\Http\Controllers\Front\CustomerRegisterController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\TicketController;
use App\Http\Controllers\Front\TicketController as TicketControllerAlias;
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


        // Login And Register Customer In System

    Route::middleware('guest')->group(function () {
        Route::get('GuestRegister', [CustomerRegisterController::class, 'create'])
            ->name('GuestRegister');

        Route::post('GuestRegister', [CustomerRegisterController::class, 'store']);

        Route::get('GuestLogin', [CustomerLoginController::class, 'create'])
            ->name('GuestLogin');

        Route::post('GuestLogin', [CustomerLoginController::class, 'store']);

    });



    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/AboutUsFaroukGroup', [HomeController::class, 'aboutUs'])->name('home.aboutUs');
    Route::get('/Consulting', [HomeController::class, 'consulting'])->name('home.consulting');
    Route::get('/contactUs', [HomeController::class, 'contactUs'])->name('home.contactUs');
    Route::get('/services', [HomeController::class, 'services'])->name('home.services');
    Route::get('/servicesDetails/{id}', [HomeController::class, 'servicesDetails'])->name('home.servicesDetails');
    Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
    Route::get('/Agency', [HomeController::class, 'Agency'])->name('home.Agency');
    Route::get('/blogDetails/{id}', [HomeController::class, 'blogDetails'])->name('home.blogDetails');
    Route::get('/subscriptions/{id}/{package}', [HomeController::class, 'subscriptions'])->name('home.subscriptions');
    Route::post('subscriptions', [HomeController::class, 'subscriptionsPost'])->name('home.subscriptionsPost');


    Route::get('/jops', function (){
     return view('front.jops.index');
    })->name('home.jops');

    Route::get('/policy', function (){
     return view('front.policy.index');
    })->name('home.policy');

    Route::post('sendConsulting',[HomeController::class,'sendConsulting'])->name('sendConsulting');
    Route::post('sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');
    Route::post('sendcontect',[HomeController::class,'sendcontect'])->name('sendcontect');
    Route::post('sendContactUs',[HomeController::class,'sendContactUs'])->name('sendContactUs');
    Route::post('sendAgency',[HomeController::class,'sendAgency'])->name('sendAgency');
    Route::post('sendJop',[HomeController::class,'sendJop'])->name('sendJop');




});


Route::middleware(['auth:customer','customerCheck'])->group(function (){
    Route::get('/dashboard/customer', [CustomerLoginController::class, 'customer'])->name('/dashboard/customer');
    Route::post('GuestLogout', [CustomerLoginController::class, 'destroy'])
        ->name('GuestLogout');
    Route::resource('tickets', TicketController::class);
    Route::post('ticketsReply', [TicketController::class,'ticketsReply'])->name('ticketsReply');

});


