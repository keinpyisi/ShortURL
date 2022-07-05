<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortLinkController;

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



Route::get('/',[ShortLinkController::class,'index']);


Route::get('/shortener',[ShortLinkController::class,'show']);

Route::post('/shortener',[ShortLinkController::class,'store'])->name('shortener.post');

Route::get('{code}', [ShortLinkController::class,'shortenLink'])->name('shorten.link');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::view('admin/about', 'about')->name('about');

    Route::get('admin/users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('admin/links', [\App\Http\Controllers\UserController::class, 'shorturl'])->name('users.shorturl');

    Route::get('admin/profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('admin/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
