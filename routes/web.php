<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/activity', function () {
    return view('activities');
});

Route::get('/activity','App\Http\Controllers\ActivitiesController@index')->name('activity_list');
Route::post('/add_act','App\Http\Controllers\ActivitiesController@store');
