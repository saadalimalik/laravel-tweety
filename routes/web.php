<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\TweetLikeController;

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

    Route::post('/tweets/{tweet}/like', [TweetLikeController::class, 'store'])->name('likes.store');
    Route::delete('/tweets/{tweet}/like', [TweetLikeController::class, 'destroy'])->name('likes.destroy');

    Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profiles.show');
    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])
        ->name('profiles.edit')
        ->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', [ProfilesController::class, 'store'])
        ->middleware('can:edit,user');
    Route::post('/profiles/{user:username}/follow', [FollowsController::class, 'store']);

    Route::get('/explore', ExploreController::class)
        ->name('explore.index');
});

require __DIR__.'/auth.php';
