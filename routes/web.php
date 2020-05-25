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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add_police_inspector', function () {
    return view('add_police_inspector');
})->name('add_police_inspector');

Route::get('/instructions', function () {
    return view('instructions');
})->name('instructions');

Route::get('/instructions_list', function () {
    return view('instructions_list');
})->name('instructions_list');

Route::get('/case_details', function () {
    return view('case_details');
})->name('case_details');

Route::post('add_new_case', 'PoliceCaseController@store');

Route::post('add_new_inspector', 'PoliceInspectorController@store');

Route::post('add_instructions', 'InspectorInstructionsController@store');

Route::get('edit_instruction/{id}', function ($id) {
    return view('update_instruction', compact('id'));
});

Route::post('/update_instructions', 'InspectorInstructionsController@update');

Route::post('/set_complete', 'InspectorInstructionsController@complete');