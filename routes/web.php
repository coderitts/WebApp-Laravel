<?php

use Illuminate\Support\Facades\Route;

Route::get("/","UserController@index");


// Auth Routes
Route::get("/auth/login","AuthController@login")->name("login");
Route::post("/auth/postlogin","AuthController@postlogin");
Route::get("/auth/register","AuthController@register");
Route::post("/auth/postregister","AuthController@postregister");
Route::get("/auth/logout","AuthController@logout");

// Dashboard Routes
Route::get("/dashboard","DashboardController@index");
Route::get("/dashboard/article/edit/{id}","ArticleController@edit");
Route::post("/dashboard/article/store","ArticleController@store");
Route::post("/dashboard/article/update","ArticleController@update");
Route::get("/dashboard/article/delete/{id}","ArticleController@destroy");
