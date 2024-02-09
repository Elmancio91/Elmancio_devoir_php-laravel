<?php

use App\Http\Controllers\AddcontactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MajcontactController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('log');
Route::get('/addContact', [AddcontactController::class, 'addcontacts'])->name('get-newcontact');
Route::get('/majContact', [MajcontactController::class, 'majcontacts'])->name('get-modification');
Route::get('/register', [LoginController::class, 'getRegister'])->name('get.suscribe');
Route::post('/register', [LoginController::class, 'register'])->name('suscribe');
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
