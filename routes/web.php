<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SendEmailController;

use App\Models\Introduction;

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

Route::get('/declined', function () {
    return view('policy/declined');
});

Route::get('/policy/accepted', function () {
    return view('policy/accepted');
});

Route::resource('introduction', App\Http\Controllers\IntroductionController::class);

Route::get('/dashboard', function () {
    $data = Introduction::all();
    return view('dashboard')->with('introductions', $data);
})->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';

Route::get('auth/google', [App\Http\Controllers\Auth\GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [App\Http\Controllers\Auth\GoogleSocialiteController::class, 'handleCallback']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
