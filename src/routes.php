<?php
Route::post('login', 'Http\Controllers\UserController@login');
Route::post('register', 'Http\Controllers\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'Http\Controllers\UserController@details');
});