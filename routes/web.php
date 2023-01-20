<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\daftarController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\tabelmasterController;
use App\Http\Controllers\welcomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('admin', function () {
    return view('admin');
});

Route::get('adminall', function () {
    return view('alip.adminall');
});

//guest
// Route::middleware('guest')->group(function () {
//    Route::get('register', [loginController::class,'signup'] ->name('signup');


// });


//siswa
// Route::middleware('siswa')->group(function () {
    Route::resource('siswa', siswaController::class);
// });

// Route::middleware('admin')->group(function () {
    Route::resource('admindance', adminController::class);
    Route::get('adminfutsal',[ adminController::class,'futsal']);
    Route::get('adminalip',[ adminController::class,'alip']);
// });
Route::resource('/', welcomeController::class);
Route::get('welcomeadmin',[ welcomeController::class,'index']);
Route::resource('register', daftarController::class);
Route::resource('tabelmaster', tabelmasterController::class);

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'authenticate']);