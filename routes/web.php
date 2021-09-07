<?php

use App\Http\Controllers\Auth\SocialiteController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('/home', [HomeContro]);

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect'])->name('socialite.redirect');
Route::get('/auth/callback/{provider}', [SocialiteController::class, 'callback'])->name('socialite.callback');

require __DIR__ . '/auth.php';
