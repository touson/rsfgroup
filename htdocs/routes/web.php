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
    return view('pages.guarantees', ['page' => 'guarantees']);
});
Route::get('electrical', function () {
    return view('pages.electrical', ['page' => 'electrical']);
});
Route::get('plumbing', function () {
    return view('pages.plumbing', ['page' => 'plumbing']);
});
Route::get('heating', function () {
    return view('pages.heating', ['page' => 'heating']);
});
Route::get('boilers', function () {
    return view('pages.boilers', ['page' => 'boilers']);
});
Route::get('areas-covered', function () {
    return view('pages.areas', ['page' => 'areas-covered']);
});
Route::get('contact-us', function () {
    return view('pages.contact', ['page' => 'contact-us']);
});
Route::post('contact-us', 'MainController@contact');
Route::get('commercial', function () {
    return view('pages.commercial', ['page' => 'commercial']);
});
Route::get('about-us', function () {
    return view('pages.about', ['page' => 'about-us']);
});
Route::get('prices', function () {
    return view('pages.prices', ['page' => 'prices']);
});
Route::get('/', function () {
    return view('pages.home', ['page' => 'home']);
});
Route::get('thank-you', function(){
	return view('pages.contact-success', ['page' => 'contact-us']);
});
