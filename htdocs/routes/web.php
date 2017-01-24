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

Route::get('guarantees', function () {
    return view('pages.guarantees');
});
Route::get('electrical', function () {
    return view('pages.electrical');
});
Route::get('plumbing', function () {
    return view('pages.plumbing');
});
Route::get('heating', function () {
    return view('pages.heating');
});
Route::get('boilers', function () {
    return view('pages.boilers');
});
Route::get('areas-covered', function () {
    return view('pages.areas');
});
Route::get('contact-us', function () {
    return view('pages.contact');
});
Route::get('commercial', function () {
    return view('pages.commercial');
});
Route::get('about-us', function () {
    return view('pages.about');
});
Route::get('/', function () {
    return view('pages.home');
});
