<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',
	['uses'=>'PostsController@index','as'=>'posts.index']
);
Route::get('/blog/{slug}',
	['uses'=>'PostsController@view','as'=>'posts.view']
);

Route::get('/posts/{id}',
	['uses'=>'PostsController@edit','as'=>'posts.edit']
);
Route::post('/posts/{id}',
	['uses'=>'PostsController@update','as'=>'posts.update']
);