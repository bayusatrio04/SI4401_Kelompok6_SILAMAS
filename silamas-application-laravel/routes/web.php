<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\ReportingController;

use App\Http\Controllers\SearchController;

use App\Http\Controllers\MyReportsController;



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
Route::get('/', [HomeController::class, 'home']);

// Route::resource('laporans', ReportsController::class);
Route::resource('laporans', ReportingController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'store']);


Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');

Route::post('/profile', [UserController::class, 'update'])->middleware('auth');

Route::get('/search', [SearchController::class, 'search']);

Route::get('/myreport', [MyReportsController::class, 'index']);
