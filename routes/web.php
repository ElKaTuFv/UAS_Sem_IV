<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

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
    return view('index');
});

Route::get('/dashboard/delete/{id}',[AdminController::class,'destroy']);
Route::match(['get','post'],'/dashboard/update/{id}',[AdminController::class,'update']);

Route::match(['get','post'],'/',[AdminController::class,'store']);
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class,'index'])->name('login');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});

Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/',[AboutController::class,'show'])->name('/');
Route::get('/{id}/edit',[AboutController::class,'edit'])->name('edit');
Route::put('/{id}',[AboutController::class,'update'])->name('update');

Route::get('/tamu/cari',[AdminController::class,'cari']);