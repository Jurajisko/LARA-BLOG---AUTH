<?php

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

use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);
Route::get('/tag/{id}', [TagController::class, 'show']);
Route::get('/user/{id}', [UserController::class, 'show']);

Route::resource('post', PostController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
