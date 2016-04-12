<?php
Route::get('/index', 'SearchController@index');
Route::post('/search', 'SearchController@search');
Route::get('/arsip', 'SearchController@arsip');
Route::get('/admin', 'InputController@input');
Route::post('/storebuku', 'InputController@storebuku');
Route::post('/storekategori', 'InputController@storekategori');
Route::post('/deletebuku', 'InputController@deletebuku');
Route::post('/deletekategori', 'InputController@deletekategori');
