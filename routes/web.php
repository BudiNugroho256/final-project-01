<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomoditasController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProvinsiController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MapController::class, 'index']);

Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');

Route::get('/forum/{id}', [ForumController::class, 'show'])->name('forum.show');

Route::get('/forum/category/{id}', [ForumController::class, 'category'])->name('forum.category');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/harga-beras-mengalami-kenaikan', function () {
    return view('articles.harga-beras-mengalami-kenaikan');
});

Route::get('/harga-cabai-stabil-pasokan-cukup', function () {
    return view('articles.harga-cabai-stabil-pasokan-cukup');
});

Route::get('/pemerintah-subsidi-minyak-goreng', function () {
    return view('articles.pemerintah-subsidi-minyak-goreng');
});

Route::get('/get-data-komoditas/{id}', [KomoditasController::class, 'getKomoditasData']);



require __DIR__.'/auth.php';