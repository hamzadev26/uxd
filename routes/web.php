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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/our-process', function () {
    return view('pages.our-process');
});

Route::get('/services', function () {
    return view('pages.services.services');
});

Route::get('/app-development', function () {
    return view('pages.services.app');
});

Route::get('/branding', function () {
    return view('pages.services.branding');
});

Route::get('/content-writing', function () {
    return view('pages.services.content-writing');
});

Route::get('/seo', function () {
    return view('pages.services.seo');
});

Route::get('/ui-ux-design', function () {
    return view('pages.services.ui-ux');
});

Route::get('/web-design', function () {
    return view('pages.services.web');
});

Route::get('/hosting', function () {
    return view('pages.services.hosting');
});

Route::get('/2d-3d-animation', function () {
    return view('pages.services.2d-3d-animation');
});

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
});

Route::get('/terms-conditions', function () {
    return view('pages.terms-conditions');
});
