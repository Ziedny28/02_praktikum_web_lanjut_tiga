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

Route::view('/home', 'home')->name('home');

Route::prefix('product')->group(function () {
    Route::get('product-pertama', function () {
        return view('product', ['data' => 'product pertama']);
    });
    Route::get('product-kedua', function () {
        return view('product', ['data' => 'product kedua']);
    });
});

Route::get('/news/{slug}', function ($slug) {
    return view('news', ['slug' => $slug]);
})->name('news');;


Route::prefix('program')->group(function () {
    Route::get('program-pertama', function () {
        return view('program', ['data' => 'program pertama']);
    });
    Route::get('program-kedua', function () {
        return view('program', ['data' => 'program kedua']);
    });
});

Route::view('/about-us', 'about-us')->name('about-us');;

Route::resource('/contact', ContactController::class);
