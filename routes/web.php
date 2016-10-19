<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::resource('admin/document', 'Admin\\DocumentsController');
Route::resource('admin/post', 'Admin\\PostController');
Route::resource('admin/post_meta', 'Admin\\Post_metaController');
Route::resource('admin/categories', 'Admin\\CategoriesController');
Route::resource('admin/document_meta', 'Admin\\Document_metaController');
Route::resource('admin/catpages', 'Admin\\CatpagesController');

Route::get('/home', 'HomeController@index');

Route::get('/hubungi-kami', function(){
   return View::make("pages.hubungi_kami");
});

Route::get('/dokumen/{a}', 'DocumentController@show');

Route::get('/generate/{a}', 'DocumentController@generate');

Route::get('/article/{a}', 'PostController@single');

Route::get('/{a}', 'DocumentController@category');