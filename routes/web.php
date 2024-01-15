<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\DashboardController;
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
Route::get('/lmodel1', [FrontController::class, 'lmodel1'])
    ->name('lmodel1');
Route::get('/lmodel2', [FrontController::class, 'lmodel2'])
    ->name('lmodel2');
Route::get('/nextregister', [FrontController::class, 'modelRegister'])
    ->name('nextregister');
Route::get('/nexthome', [FrontController::class, 'modelHome'])
    ->name('nexthome');
Route::get('/nextpreviuos', [FrontController::class, 'modelPreview'])
    ->name('nextpreviuos');
Route::get('/nextregister', [FrontController::class, 'modelRegister'])
    ->name('nextregister');
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
Route::get('dash/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('dash/my_tirage', [DashboardController::class, 'my_tirage'])->name('my_tirage');
Route::get('dash/participant', [DashboardController::class, 'particpant'])->name('particpant');
Route::match(['POST','GET'],'/sendLottory', [DashboardController::class, 'sendLottory'])->name('sendlottory');
Route::match(['POST','GET'],'/register_ajax', [DashboardController::class, 'register_ajax'])->name('register_ajax');
Route::match(['POST','GET'],'/activate_level', [DashboardController::class, 'activate_level'])->name('activate_level');
Route::match(['POST','GET'],'/login_ajax', [DashboardController::class, 'login_next'])->name('login_next');
Route::match(['POST','GET'],'/check_register', [DashboardController::class, 'check_register'])->name('check_register');
