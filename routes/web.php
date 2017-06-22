<?php

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

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/exclusive-listings', function () {
    return view('frontend.exclusive-listings');
});
Route::get('/our-recent-transactions', function () {
    return view('frontend.our-recent-transactions');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/selling', function () {
    return view('frontend.selling');
});

Route::get('/buying', function () {
    return view('frontend.buying');
});

Route::get('/market-stats', function () {
    return view('frontend.market-stats');
});

Route::get('/around-town', function () {
    return view('frontend.around-town');
});

Route::get('/testimonials', function () {
    return view('frontend.testimonials');
});

Route::get('/meet-the-team', function () {
    return view('frontend.meet-the-team');
});
