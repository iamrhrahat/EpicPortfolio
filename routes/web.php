<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserinfoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [BlogController::class, 'showLatestPosts'])->name('welcome');
Route::get('/{post:slug}', [BlogController::class, 'show'])->name('view');



    Route::post('/contact', [ContactController::class, 'myContact'])->name('contact.store');

    Route::post('/',[ContactController::class, 'myNewsLetter'])->name('newsletter.store');
// Route::get('/', [UserinfoController::class, 'index'])->name('welcome');
// Route::get('/', [AboutController::class, 'about'])->name('welcome');


require __DIR__.'/auth.php';
