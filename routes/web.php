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

Route::match(["POST","GET"],'/', [FrontController::class, 'home'])
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
Route::get('/login', [FrontController::class, 'login'])
    ->name('login');
Route::get('/login_', [FrontController::class, 'loginwithaddress'])
    ->name('loginwithaddress');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::match(["POST","GET"],'/dashboard', [AdminController::class, 'dashboard'])
        ->name('dashboard');
    Route::get('/partners', [AdminController::class, 'partners'])
        ->name('partners');
    Route::get('/links', [AdminController::class, 'links'])
        ->name('links');
    Route::get('/statitics', [AdminController::class, 'statitics'])
        ->name('statitics');
    Route::get('/create_user', [AdminController::class, 'create_user'])
        ->name('create_user');
    Route::get('/buy_machin', [AdminController::class, 'buy_machin'])
        ->name('buy_machin');
});
Route::get('/preview', [AdminController::class, 'preview'])
    ->name('preview');
Route::get('/d/d789745874458744', [AdminController::class, 'dashboardcss'])
    ->name('dashboardcss');
