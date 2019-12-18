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
    return view('main');
});




/*Creating CV*/

Route::get('/create-cv', 'PersonController@index')->name('create-cv');

Route::post('/create-cv', 'PersonController@create');
Route::get('/create-cv/experience/', 'ExperienceController@index')->name('person.id');
Route::post('/create-cv/experience', 'ExperienceController@create')->name('experience');

/*Displaying*/

Route::get('/cv/{id}', 'showcvController@show');
Route::get('/downloadPDF/{id}','pdfController@saveToPDF');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
