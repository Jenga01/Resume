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

use Vinkla\Hashids\Facades\Hashids;

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
//Route::get('/downloadPDF/{id}','pdfController@saveToPDF');
//Route::resource('/downloadPDF/{person}', 'pdfController@saveToPDF');

/*Route::get('downloadPDF/{id}', 'pdfController@saveToPDF', function (App\Person $person) {



});*/

Route::model('person', 'App\Person');

Route::get('downloadPDF/{person}', 'pdfController@saveToPDF')->name('person.pdf');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
