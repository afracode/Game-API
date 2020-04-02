<?php


Route::get('scores/{game:slug}', 'ScoreController@index');
Route::post('scores', 'ScoreController@store');
