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

Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth'])->name('posts.index');
Route::get('/dashboard/create', [PostController::class, 'create'])->name('posts.create');

require __DIR__.'/auth.php';
