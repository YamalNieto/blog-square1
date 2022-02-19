<?php

use App\Http\Controllers\BackOffice\PostController;
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

Route::get('/dashboard', [PostController::class, 'index'])
    ->middleware(['auth'])
    ->name('backoffice.posts.index');

Route::get('/dashboard/posts/create', [PostController::class, 'create'])
    ->middleware(['auth'])
    ->name('backoffice.posts.create');

Route::post('/dashboard/posts', [PostController::class, 'store'])
    ->middleware(['auth'])
    ->name('backoffice.posts.store');

require __DIR__.'/auth.php';
