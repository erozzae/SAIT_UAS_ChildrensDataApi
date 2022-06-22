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

Route::get('/', function(){
    return view('welcome');
});

// //index
// Route::get('/children', 'ChildrensDataController@index')->name('childrensData.index');

// //create
// Route::get('/children/create', 'ChildrensDataController@create')->name('childrensData.create');
// Route::post('/children','ChildrensDataController@store')->name('childrensData.store');

// //update
// Route::post('/children/edit/{id}', 'ChildrensDataController@edit')->name('childrensData.edit');
// Route::post('/children/update/{id}', 'ChildrensDataController@update')->name('childrensData.update');

// //delete
// Route::post('/children/delete/{id}','ChildrensDataController@destroy')->name('childrensData.destroy');