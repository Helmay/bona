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
    return view('index');
});
Route::get('about', 'HomeController@about')->name('about');
Route::get('layanan', 'HomeController@layanan')->name('layanan');
Route::get('klien', 'HomeController@klien')->name('klien');
Route::get('galery', 'HomeController@galery')->name('galery');
Route::get('testimonial', 'HomeController@testimonial')->name('testimonial');
Route::get('profil', 'HomeController@profil')->name('profil');

Route::get('contact', 'EmailController@getContact')->name('contact');
// Route::post('contact', 'EmailController@postContact')->name('contact');
ROute::post('contact', 'EmailController@postContact');
