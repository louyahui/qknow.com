<?php

Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('videos', 'Qknow\Api\Controllers\Videos');
});
