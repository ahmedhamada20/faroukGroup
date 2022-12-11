<?php

use App\Http\Controllers\Front\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses/list', [HomeController::class, 'courses_list'])->name('courses_list');
Route::get('/courses/detail', [HomeController::class, 'courses_detail'])->name('courses_detail');
Route::get('/events', [HomeController::class, 'event'])->name('events');
Route::get('/event/detail', [HomeController::class, 'event_detail'])->name('event_detail');
Route::get('/abouts', [HomeController::class, 'abouts'])->name('abouts');
Route::get('/blogs', [HomeController::class, 'blog'])->name('blogs');
Route::get('/blog/detail', [HomeController::class, 'blog_detail'])->name('blog_detail');
Route::get('/contact_us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::get('/my_account', [HomeController::class, 'my_account'])->name('my_account');
Route::get('/members', [HomeController::class, 'members'])->name('members');
Route::get('/members/detail', [HomeController::class, 'members_detail'])->name('members_detail');
Route::get('/register-sign', [HomeController::class, 'register_sign'])->name('register_sign');


