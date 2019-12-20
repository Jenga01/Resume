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

Route::post('/create-cv', 'PersonController@create')->name('create.person');
Route::get('/create-cv/experience/', 'ExperienceController@index')->name('person.id');
Route::post('/create-cv/experience', 'ExperienceController@create')->name('experience');
Route::get('/create-cv/education/', 'EducationController@index')->name('person.education.id');
Route::post('/create-cv/education', 'EducationController@create')->name('education');

/*Displaying*/

Route::get('/cv/{id}', 'showcvController@show');


Route::model('person', 'App\Person');
Route::get('downloadPDF/{person}', 'pdfController@saveToPDF')->name('person.pdf');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
