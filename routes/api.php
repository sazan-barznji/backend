<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'App\Http\Controllers\API\RegisterController@register');
Route::post('login', 'App\Http\Controllers\API\RegisterController@login');
// Route::apiResources(['user' => 'API\UserController']);
// Route::apiResources(['user' , 'App\Http\Controllers\API\UserController']);
Route::apiResource('user',UserController::class);


// Route::middleware('auth:api')->group(function () {
    
// });
