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

Route::get('/upload', 'uploadController@upload')->name('upload');
Route::post('/upload', 'UploadController@personUploadPost');
Route::get('/upload/experience', 'uploadController@getPerson');
Route::post('/upload/experience', 'uploadController@experience');

/*Displaying*/

Route::get('/cv', 'showcvController@show');
Route::get('/downloadPDF/{id}','pdfController@saveToPDF');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
