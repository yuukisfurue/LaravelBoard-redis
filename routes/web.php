<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Livewire\Input;
use App\Http\Livewire\Confirm;
use App\Http\Livewire\Complete;

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

Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show')
    ->where('post', '[0-9]+');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');
Route::post('/posts/store', [PostController::class, 'store'])
    ->name('posts.store');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit')
    ->where('post', '[0-9]+');
Route::patch('/posts/{post}/update', [PostController::class, 'update'])
    ->name('posts.update')
    ->where('post', '[0-9]+');

Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])
    ->name('posts.destroy')
    ->where('post', '[0-9]+');

Route::get('/', Input::class)->name('home'); //入力画面
Route::get('/confirm', Confirm::class)->name('confirm'); //確認画面
Route::get('/complete', Complete::class)->name('complete'); //完了画面

    