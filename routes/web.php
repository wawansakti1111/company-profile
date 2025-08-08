<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;

// Halaman Umum
Route::get('/', function () {
    return view('home');
});

Route::get('/berita', [NewsController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('berita.show');

// Halaman Admin
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/posts', [AdminController::class, 'index'])->name('admin.posts.index');
    Route::get('/posts/create', [AdminController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [AdminController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/{id}/edit', [AdminController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/{id}', [AdminController::class, 'update'])->name('admin.posts.update');
    Route::delete('/posts/{id}', [AdminController::class, 'destroy'])->name('admin.posts.destroy');
});