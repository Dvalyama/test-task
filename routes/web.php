<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\TokenController;



Route::view('/', 'home.index')->name('home');



    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.store');
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register.store');


Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');



Route::middleware('auth')->group(function () {
    Route::get('user/posts', [PostController::class, 'index'])->name('user.posts.index');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});


Route::get('/access-denied', function () {
    return view('errors.access_denied');
})->name('access.denied');



Route::prefix('user')->group(function () {
    Route::redirect('/', '/user/posts')->name('user');

    Route::group(['middleware' => ['permission:create posts']], function () {
        Route::get('posts', [PostController::class, 'create'])->name('user.posts.create');
        Route::get('posts/create', [PostController::class, 'index'])->name('user.posts');
    });

    Route::post('posts', [PostController::class, 'store'])->name('user.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('user.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('user.posts.update');

    Route::group(['middleware' => ['permission:delete any posts']], function () {
        Route::delete('posts/{post}', [PostController::class, 'delete'])->name('user.posts.delete');
    });


    Route::get('/generate-token', [TokenController::class, 'generateToken'])->middleware('auth');
    

});


