<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
use \Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\Controller;
use \App\Http\Controllers\CommentController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/registration', [Controller::class, 'registration'])->name('registration');
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::get('/author', [Controller::class, 'authorPage'])->name('authorPage');

Route::post('/registration', [RegistrationController::class, 'register'])->name('register');
Route::post('/signIn', [LoginController::class, 'signIn'])->name('singIn');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('posts.comments.store');
    Route::get('/profile/', [Controller::class, 'profile'])->name('profile');
    Route::resource('comments', 'CommentController');
});
Route::resources([
    'posts' => PostController::class,
]);
Route::middleware(['auth','admin'] )->group(function () {
    Route::resource('posts', PostController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
    Route::get('/dashboard', [Controller::class, 'dashboard']);
});

Route::get('/categories/{id}', [PostController::class, 'CategoryShow'])->name('categories.show');
Route::get('/categories/{id}', [PostController::class, 'filter'])->name('categories.filter');
Route::post('/categories/filter', [PostController::class, 'filter'])->name('categories.filter');



