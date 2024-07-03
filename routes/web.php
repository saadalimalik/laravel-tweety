<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/tweets', function () {
//    return view('tweets.index');
//})->middleware(['auth', 'verified'])->name('tweets');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/tweets', [TweetController::class, 'index'])->name('tweets.index');
    Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');
    Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profiles.show');
});

require __DIR__.'/auth.php';
