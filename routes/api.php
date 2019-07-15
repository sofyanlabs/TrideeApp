<?php

Route::apiResource('/status', 'StatusController');

Route::apiResource('/category', 'CategoryController');

Route::apiResource('/status/{status}/reply','ReplyController');