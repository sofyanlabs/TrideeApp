<?php

Route::apiResource('/status', 'StatusController');

Route::apiResource('/category', 'CategoryController');

Route::apiResource('/status/{status}/reply','ReplyController');

Route::post('/like/{reply}', 'LikeController@LikeIt');
Route::delete('/like/{reply}', 'LikeController@unLikeIt');