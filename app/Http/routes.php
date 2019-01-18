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

Route::get('/tasks/{task}', 'ProjectTasksController@update');

