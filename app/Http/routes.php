<?php
//
//
//
///*
//|--------------------------------------------------------------------------
//| Application Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register all of the routes for an application.
//| It's a breeze. Simply tell Laravel the URIs it should respond to
//| and give it the controller to call when that URI is requested.
//|
//*/
//
//
use App\Post;
use Illuminate\Support\Facades\DB;
use App\User;

Route::get('/', function () {

    return view('welcome');
});

Route::resource('projects', 'ProjectsController');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');


//Route::get('/projects/{id}/edit','ProjectsController@edit');
////Route::resource('/projects/{id}', 'ProjectsController');
//Route::get('/projects/{id}', 'ProjectsController@update');
//Route::get('/projects/{id}', 'ProjectsController@destroy');
//Route::get('/', 'pagesController@home');
//Route::get('/about', 'PagesController@about');
//Route::get('/contact', 'PagesController@contact');
//
//
//Route::post('/projects', 'ProjectsController@index');
//Route::post('/projects', 'ProjectsController@store');
//Route::get('/projects/create', 'ProjectsController@create');
//Route::patch('/projects/{project}', 'ProjectsController@update');
//Route::delete('/projects/{project}', 'ProjectsController@destroy');
//Route::post('/projects/{id}', 'ProjectsController@show');

//Route::get('/', function () {
//
//    return view('welcome')->with([
//        'tasks' => ['some task'],
//        'foo' => 'foobar'
//    ]);
//
//});

//    return view('welcome', [
//        'tasks' => $tasks,
//        'foo' => 'foobar'
//

//});
//
//Route::get('/contact', function () {
//
//   return view('contact');
//});
//
//
//Route::get('/about', function () {
//
//    return view('about');
//});

