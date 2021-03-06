<?php



Route::get('/','PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/pdf/{id}', 'PdfController@generatePdf');

Route::resource('clients', 'ClientsController');
Route::get('clients/calculate/{id}', 'ClientsController@calculate');
