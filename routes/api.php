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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::group(["prefix" => "client"], function () {
    Route::get("all", ["name" => "all", "uses" => "ClientController@all"]);
    Route::get("{client}", ["name" => "one", "uses" => "ClientController@one"]);
    Route::post("add", ["name" => "add", "uses" => "ClientController@add"]);
    Route::put("update", ["name" => "update", "uses" => "ClientController@update"]);
    Route::delete("delete/{client}", ["name" => "delete", "uses" => "ClientController@delete"]);
});*/
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  GET,PUT,POST,DELETE,OPTIONS');
header('Access-Control-Allow-Headers:  Content-Type');

Route::get('client/{offset}/{limit}','ClientController@index');
Route::resource("client","ClientController");
Route::resource("contact","ContactController");
Route::resource("vehicle","VehicleController");
Route::resource("service_order","ServiceOrderController");
Route::resource("user","UserController");


