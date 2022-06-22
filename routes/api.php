<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//create
// Route::post('/children/add','ApiChildrensDataController@store');

//get all data
Route::get('/childrens','ApiChildrensDataController@getAllData');

//get data by id
Route::get('/children/{id}','ApiChildrensDataController@getDataById');

//add data
Route::post('/add','ApiChildrensDataController@addData');

//update data
Route::put('/updateData/{id}', 'ApiChildrensDataController@updateData');

//delete data
Route::get('/deleteData/{id}','ApiChildrensDataController@destroy');