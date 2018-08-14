<?php
Route::group([
    'middleware' => 'api',
    'prefix' => 'api',
    'namespace' => 'diiimonn\laravel\AuthService\Http\Controllers',
], function() {
    Route::post('login', 'UserController@login');
    Route::post('register', 'UserController@register');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('details', 'UserController@details');
    });
});