<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/article', function () {
    return Inertia::render('ArticlePage');
})->name('article');

Route::redirect('/home', '/');

Route::get('/blog', function () {
    return Inertia::render('Home');
})->name('blog');

Route::get('/contact', function () {
    return Inertia::render('Home');
})->name('contact');

Route::get('/newsletter', function () {
    return Inertia::render('Home');
})->name('newsletter');

Route::get('/privacy', function () {
    return Inertia::render('Home');
})->name('privacy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
