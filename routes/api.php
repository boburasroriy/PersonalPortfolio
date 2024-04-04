<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
use \Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\ProjectController;



Route::post('/registration', [RegistrationController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);


Route::resource('posts',  PostController::class,);
Route::resource('projectPosts',  ProjectController::class,);

