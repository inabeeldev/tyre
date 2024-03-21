<?php

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

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [App\Http\Controllers\TyreController::class, 'home'])->name('home-page');
Route::get('/tyre-service-dubai', [App\Http\Controllers\TyreController::class, 'service'])->name('service-page');
Route::get('/about-us', [App\Http\Controllers\TyreController::class, 'about'])->name('about-page');
Route::get('/team', [App\Http\Controllers\TyreController::class, 'team'])->name('team-page');
Route::get('/testimonial', [App\Http\Controllers\TyreController::class, 'testimonial'])->name('testimonial-page');
Route::get('/contact-us', [App\Http\Controllers\TyreController::class, 'contact'])->name('contact-page');
Route::get('/404', [App\Http\Controllers\TyreController::class, 'error'])->name('404-page');
Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index']);


Route::get('/about', [App\Http\Controllers\RedirectController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\RedirectController::class, 'contact']);
Route::get('/services', [App\Http\Controllers\RedirectController::class, 'service']);

