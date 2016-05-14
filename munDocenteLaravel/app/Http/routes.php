<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'IndexController@index');

Route::get('/teacher_call/call_form', 'TeacherCallController@create');
Route::resource('teacher_call', 'TeacherCallController');

Route::get('/academic_event/event_form','AcademicEventController@create');
Route::resource('academic_event', 'AcademicEventController');

Route::get('/scientific_magazine/magazine_form', 'ScientificMagazineController@create');
Route::resource('scientific_magazine', 'ScientificMagazineController');

Route::get('/user/create_docent', 'UserController@create_docent');
Route::get('/user/create_publisher', 'UserController@create_publisher');
Route::resource('user', 'UserController');

Route::resource('area', 'AreaController');
Route::get('/resetpass', 'IndexController@forget');
Route::get('/search_advanced', 'QueriesController@search_advanced');
Route::post('/result_search_basic', 'QueriesController@result_search_basic');
Route::post('/result_search_advanced', 'QueriesController@result_search_advanced');

Route::auth();

Route::get('/home', 'HomeController@index');
