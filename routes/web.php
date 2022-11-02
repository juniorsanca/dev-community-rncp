<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserprofilController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;


use App\Http\Controllers\admin\AdminActuController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mentions', function () {
    return view('mentions');
});

//Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');
Route::get('/profil', function () { return view('profil'); })->middleware(['auth'])->name('profil');
Route::get('/community', [HomeController::class, 'dashboard' ])->name('dashboard')->middleware(['auth']);

Route::post('/posts',  [PostsController::class, 'store' ])->name('posts');

Route::get('/edit/{id}', [UserprofilController::class, 'edit' ])->name('editprofil')->middleware(['auth']);
Route::put('/edit/{id}', [UserprofilController::class, 'update' ])->name('update');

//Likes
Route::post('/posts/{post}/like', [PostsController::class, 'like'])->middleware(['auth'])->name('posts.like');

//Comments
Route::post('/posts/{post}/comment', [PostsController::class, 'comment'])->middleware(['auth'])->name('posts.comment');
//Likes Comments
Route::post('/comments/{comment}/like', [CommentsController::class, 'like'])->middleware(['auth'])->name('comments.like');


/*------[ADMIN]-----*/
//actus
//Conditions :  have to be connected as a administarato to acces this pages

    /*--[
        CRUD -> adminhome
    ]--*/
    // Route::get('/admin', function () { return view('admin.home'); })->middleware(['auth'])->name('admin');
    Route::get('/admin', [\App\Http\Controllers\Admin\AdminActuController::class, 'index' ])->name('index')->middleware(['auth']);
    Route::get('/actus/create', [\App\Http\Controllers\Admin\AdminActuController::class, 'create' ]) ->name('route.index');
    // Route::get('actus', [\App\Http\Controllers\Admin\ActuController::class, 'index' ]) ->name('route.index');
    // Route::get('actus/create', [\App\Http\Controllers\Admin\ActuController::class, 'create' ]) ->name('route.create');
    Route::post('actus/store', [\App\Http\Controllers\Admin\AdminActuController::class, 'store' ]) ->name('admin');
    Route::get('actus/edit/{id}', [\App\Http\Controllers\Admin\AdminActuController::class, 'edit' ]) ->name('actus.edit');
    Route::put('actus/edit/{id}', [\App\Http\Controllers\Admin\AdminActuController::class, 'update' ]) ->name('actus.update');
    Route::delete('actus/{id}', [\App\Http\Controllers\Admin\AdminActuController::class, 'destroy' ]) ->name('actus.destroy');

    /*--[
        CRUD -> actus
    ]--*/

//users
    /*--[
        CRUD -> Users
    ]--*/
//homepage
    /*--[
        Logo,
        Welcome title,
        Welcome text,
        Home image
    ]--*/
//login
    /*--[
        Left image
        left title
        Left message

        Rigth title
        Rigth message
    ]--*/
//register
    /*--[
        Left image
        left title
        Left message

        Rigth title
        Rigth message
    ]--*/

require __DIR__.'/auth.php';
