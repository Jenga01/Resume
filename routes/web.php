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




/*Uploading*/

Route::get('/create-cv', 'createController@upload')->name('create-cv');

Route::post('/create-cv', 'createController@personPost');
Route::get('/create-cv/experience/', 'createController@getPerson')->name('person.id');
Route::post('/create-cv/experience', 'createController@experience');

/*Displaying*/

Route::get('/cv/{id}', 'showcvController@show');
Route::get('/downloadPDF/{id}','pdfController@saveToPDF');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
