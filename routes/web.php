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
    if(Auth::check()){
        return Redirect::to('home');
    }else
    return view('auth.login');
});





/*CREATE*/

Route::get('/create-cv', 'PersonController@index')->name('create-cv');

Route::post('/create-cv', 'PersonController@create')->name('create.person');
Route::get('/create-cv/experience/', 'ExperienceController@index')->name('person.id');
Route::post('/create-cv/experience', 'ExperienceController@create')->name('experience');
Route::get('/create-cv/education/', 'EducationController@index')->name('person.education');
Route::post('/create-cv/education', 'EducationController@create')->name('education');
Route::get('/create-cv/education/courses', 'CoursesController@index')->name('person.education.courses');
Route::post('/create-cv/education/courses/', 'CoursesController@create')->name('courses');
Route::get('/create-cv/skills', 'SkillsController@index')->name('person.skills');
Route::post('/create-cv/skills', 'SkillsController@create')->name('skills');
Route::get('/create-cv/languages', 'LanguagesController@index')->name('person.languages');
Route::get('/create-cv/languages', 'LanguagesController@languages');
Route::post('/create-cv/languages', 'LanguagesController@create')->name('languages');
Route::get('/create-cv/projects', 'ProjectsController@index');
Route::post('/create-cv/projects', 'ProjectsController@create')->name('projects');



/*EDIT*/
Route::get('person/{person}/edit', 'PersonController@edit')->name('person.edit');

Route::put('person/edit/{id}', 'PersonController@update')->name('person.update');
Route::get('person/delete/{id}', 'PersonController@delete')->name('person.delete');
//Route::put('experience/edit/{id}', 'ExperienceController@update')->name('person.experience.update');

/*AJAX UPDATE/DELETE*/

Route::patch('experience/edit/work', 'ExperienceController@update' )->name('edit.experience');
Route::post('experience/delete', 'ExperienceController@delete' )->name('delete.experience');

Route::patch('education/edit/edu', 'EducationController@update' )->name('edit.education');
Route::post('education/delete', 'EducationController@delete' )->name('delete.education');

Route::patch('education/edit/course', 'CoursesController@update' )->name('update.course');
Route::post('education/course/delete', 'CoursesController@delete' )->name('update.course');

Route::patch('skill/edit', 'SkillsController@update' )->name('update.skill');
Route::post('skill/delete', 'SkillsController@delete' )->name('delete.skill');

Route::post('language/delete', 'LanguagesController@delete' )->name('delete.language');

Route::patch('project/edit', 'ProjectsController@update' )->name('update.project');
Route::post('project/delete', 'ProjectsController@delete' )->name('delete.project');




/*Displaying*/

Route::get('/resume/{person}', 'showcvController@show')->name('show.cv');

/*notifications*/

Route::get('/notifications/{id?}', 'HomeController@notifications')->name('show.notifications');




/*PDF*/
Route::get('downloadPDF/{person}', 'pdfController@saveToPDF')->name('person.pdf');


Route::model('person', 'App\Person');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*social login*/

Route::get('/auth/redirect/{driver}', 'Auth\LoginController@redirect');
Route::get('/callback/{driver}', 'Auth\LoginController@callback');




/*TEST*/


//Route::get('/test/', 'PersonController@index2');

