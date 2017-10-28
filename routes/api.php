<?php

use Illuminate\Http\Request;

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


Route::post('role', 'RoleController@store');
Route::get('roles', 'RoleController@index');

Route::post('/article', 'ArticleController@store');
Route::get('/article/{id}', 'ArticleController@show');
Route::put('/article/{id}', 'ArticleController@update');
Route::delete('/article/{id}', 'ArticleController@destroy');

Route::get('/articles', 'ArticleController@index');
