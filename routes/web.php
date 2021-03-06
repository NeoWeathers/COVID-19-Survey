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

Route::get('/survey', function () {
    return view('survey');
});

Route::get('/', function () {
    return view('login');
});

Auth::routes();
Route::get('/biodata','BiodataController@index')->name('biodata');
Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('survey','SurveyController');