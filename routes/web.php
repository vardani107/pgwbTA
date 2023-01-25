<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\daftarController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\tabelmasterController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\futsalController;
use App\Http\Controllers\danceController;

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
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('logout', [loginController::class, 'logout']);

route::resource('/', welcomeController::class);

route::middleware('auth')->group(function ()  {
    route::resource('admin', adminController::class);
    route::resource('futsal', futsalController::class);
    route::resource('dance', danceController::class);
    Route::get('preview', [adminController::class, 'preview'])->name('admin.preview');
});

