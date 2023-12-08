<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'home'])
    ->name('home');
Route::get('/documentation', [FrontController::class, 'documentation'])
    ->name('documentation');
Route::get('/about_us', [FrontController::class, 'about_us'])
    ->name('about_us');
Route::get('/registration', [FrontController::class, 'register'])
    ->name('register');
Route::get('/contact_us', [FrontController::class, 'contact_us'])
    ->name('contact_us');
Route::get('/welcome', [FrontController::class, 'welcome'])
    ->name('welcome');
Route::get('/login', [AdminController::class, 'login'])
    ->name('login');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('dashboard');
    Route::get('/partners', [AdminController::class, 'partners'])
        ->name('partners');
    Route::get('/links', [AdminController::class, 'links'])
        ->name('links');
    Route::get('/statitics', [AdminController::class, 'statitics'])
        ->name('statitics');
});
Route::get('/preview', [AdminController::class, 'preview'])
    ->name('preview');
