<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home');

Route::get('/product/{slug}', function ($slug) {
    return view('product', ['slug' => $slug]);
});

Route::get('/news/{slug}', function ($slug) {
    return view('news', ['slug' => $slug]);
});

Route::get('/program/{slug}', function ($slug) {
    return view('program', ['slug' => $slug]);
});

Route::view('/about-us', 'about-us');

Route::resource('/contact', ContactController::class);