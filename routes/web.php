<?php

use Illuminate\Support\Facades\Route;

Route::get("/","UserController@index");

// article crud routes
Route::post("/article/store","ArticleController@store");
Route::get("/article/edit/{id}","ArticleController@edit");
Route::post("/article/update","ArticleController@update");
Route::get("/article/delete/{id}","ArticleController@destroy");