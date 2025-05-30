<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;

Route::get('/', [BlogController::class, 'index']);
Route::get('/articles', [BlogController::class, 'index']);
Route::post('/edit', [BlogController::class, 'edit']);
Route::get('/new', fn () => view('guest.create'));
Route::post('/create', [BlogController::class, 'create']);
// 削除確認ページ（POSTでアクセス）
Route::post('/delete', [BlogController::class, 'delete']);
// ダイレクトアクセス防止用（GETアクセスされてもトップにリダイレクト）
Route::get('/delete', fn () => redirect('/'));

Route::get(
    '/dashboard', function () {
        return view('dashboard');
    }
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(
    function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    }
);

require __DIR__.'/auth.php';
