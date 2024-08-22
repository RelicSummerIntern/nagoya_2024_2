<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\StoreController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get("/template/users", function (){
    return view('layouts.commons_users');
});

Route::get("/template/stores", function (){
    return view('layouts.commons_stores');
});


Route::get('/quest_board', [QuestController::class, 'index'])->name('Quest.index');

Route::get('/storesmypage', [StoreController::class, 'index'])->name('Store.index');

Route::get('/users-storespage', function () {
    return view('users-storespage');
})->name('users-storespage');

Route::get('/mypage', function () {
    return view('mypage');
})->name('mypage');

Route::get('/quest_board/quest_user1', function (){
    return view('quest_user1');
})->name('quest_user1');

Route::get('/quest_board/quest_user2', function (){
    return view('quest_user2');
})->name('quest_user2');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/post/index', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

    Route::get('/myposts', [PostController::class, 'myPosts'])->name('myposts');

    // 店用
    Route::get('/store-input', function () {
        return view('store-input');
    })->name('store-input');
});

require __DIR__.'/auth.php';

