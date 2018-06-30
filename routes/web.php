<?php

Route::get('/', 'PagesController@index');
Route::get('/catalogue', 'PagesController@catalogue');
Route::get('/finance', 'PagesController@finance');
Route::get('/product_guarantee', 'PagesController@product_guarantee');
Route::get('/returns', 'PagesController@returns');
Route::get('/help_center', 'PagesController@help_center');
Route::get('/cart', 'PagesController@checkout');

//BELOW ROUTES ARE FOR ACCOUNT
Route::get('/account', 'AccountController@index');


Auth::routes();

