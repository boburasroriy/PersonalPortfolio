<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
use \Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\ProjectController;
use \App\Http\Controllers\Controller;
use \App\Http\Controllers\CommentController;
Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::get('/registration', [Controller::class, 'registration'])->name('registration');
Route::get('/dashboard', [Controller::class, 'dashboard'])->middleware('admin');
Route::get('/profile/{id}', [Controller::class, 'profile'])->name('profile')->middleware('auth');

Route::post('/registration', [RegistrationController::class, 'register'])->name('register');
Route::post('/signIn', [LoginController::class, 'signIn'])->name('singIn');
Route::resource('comments', CommentController::class)->middleware('auth');
Route::resources([
    'posts' => PostController::class,
    'projectPosts' => ProjectController::class
]);


