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

Route::get('/', 'PagesController@home');
Route::get('/contact','PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::get('/hello', 'pagesController@hello');

Route::resource('/projects', 'ProjectsController');
//Route::get('/projects', 'ProjectsController@index');
//Route::post('/projects', 'ProjectsController@store');
//Route::get('/projects/{project}', 'ProjectsController@show');
//Route::get('/projects/create', 'ProjectsController@create');
//Route::get('/projects/{projects}/edit', 'ProjectsController@edit');
//Route::patch('/projects/{projects}','ProjectsController@update');
//Route::delete('/projects/{projects}','ProjectsController@destroy');

