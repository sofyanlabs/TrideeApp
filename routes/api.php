<?php

Route::apiResource('/status', 'StatusController');

Route::apiResource('/category', 'CategoryController');

Route::apiResource('/status/{status}/reply','ReplyController');

Route::post('/like/{reply}', 'LikeController@LikeIt');
Route::delete('/like/{reply}', 'LikeController@unLikeIt');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});