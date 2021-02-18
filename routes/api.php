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
//VIDEOJUEGOS
Route::get('videojocs','VideojocsController@getAll');

Route::get('videojocs/{id}','VideojocsController@get');

Route::post('videojocs','VideojocsController@add');

Route::put('videojocs/{id}','VideojocsController@update');

Route::delete('videojocs/{id}','VideojocsController@delete');

//COMENTARIOS
Route::get('comentaris','ComentarisController@getAll');

Route::get('comentaris/{id}','ComentarisController@get');

Route::post('comentaris','ComentarisController@add');

Route::put('comentaris/{id}','ComentarisController@update');

Route::delete('comentaris/{id}','ComentarisController@delete');


Route::get('commentAPI/videojoc/{videojoc_id}/comentaris','ComentarisController@videojocComents');

Route::get('commentAPI/comentari','ComentarisController@autorComents');
