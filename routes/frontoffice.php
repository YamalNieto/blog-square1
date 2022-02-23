<?php

use App\Http\Controllers\FrontOffice\PostController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::post('/post/{post}/like', [LikeController::class, 'store'])
        ->name('like.store');

    Route::delete('/post/{post}/like', [LikeController::class, 'destroy'])
        ->name('like.store');
});


require __DIR__ . '/auth.php';
