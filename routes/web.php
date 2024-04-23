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
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/registration', [Controller::class, 'registration'])->name('registration');
//Route::get('/dashboard', [Controller::class, 'dashboard'])->middleware('admin');
//Route::get('/profile/', [Controller::class, 'profile'])->name('profile')->middleware('auth');

Route::middleware('admin')->group(function (){
    Route::get('/dashboard', [Controller::class, 'dashboard']);
    Route::post('posts.create', [PostController::class]);
});
Route::middleware('auth')->group(function () {
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('posts.comments.store');
    Route::post('/posts/{postId}/like', [\App\Http\Controllers\LikeController::class, 'likePost'])->name('posts.like');
    Route::delete('/posts/{postId}/unlike', [\App\Http\Controllers\LikeController::class, 'unlikePost'])->name('posts.unlike');
    Route::get('/profile/', [Controller::class, 'profile'])->name('profile');
    Route::resource('comments', 'CommentController');
});
Route::post('/registration', [RegistrationController::class, 'register'])->name('register');
Route::post('/signIn', [LoginController::class, 'signIn'])->name('singIn');
Route::resources([
    'posts' => PostController::class,
    'projectPosts' => ProjectController::class,
]);
