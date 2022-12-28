<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Controllers\IndexController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\SearchController;

use App\Http\Controllers\ReportingController;

use App\Http\Controllers\DashboardUserController;



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
Route::get('/', [IndexController::class, 'index'])->middleware('guest');

// Route::get('/', function () {

//     return view('welcome');
// });
// Route::get('/', [HomeController::class, 'welcome']);

// // Route::resource('laporans', ReportsController::class);
// Route::resource('laporans', ReportingController::class)->middleware('auth');

// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [UserController::class, 'index']);
// Route::post('/register', [UserController::class, 'store']);


// Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');

// Route::post('/profile', [UserController::class, 'update'])->middleware('auth');

// Route::get('/search', [SearchController::class, 'search']);


// Route::get('/myreport', [MyReportsController::class, 'index'])->middleware('auth');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('admin', function () { return view('auth.admin.dashboard'); })->middleware('CheckRoleUsers:admin');
// Route::get('petugas', function () { return view('auth.petugas.petugas'); })->middleware(['CheckRoleUsers:petugas,admin']);
// Route::get('/', function () { return view('index'); })->middleware(['CheckRoleUsers:user']);
Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('login')->middleware('guest');


// Admin/Petugas
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::post('logout', 'DashboardController@logout')->name('logout');
        Route::get('user', 'DashboardAdminController@index')->name('index');
        Route::get('user/{id}','DashboardAdminController@show')->name('detail.user');
        Route::get('laporan', 'DashboardAdminController@laporan')->name('laporan');
        Route::get('laporan/{id}','DashboardAdminController@detail_laporan')->name('detail.laporan');
        Route::post('laporan','DashboardAdminController@store')->name('detail.store');
});


// Masyarakat
Route::prefix('user')
    ->middleware(['auth', 'MasyarakatMiddleware'])
    ->group(function() {
				Route::get('/', 'HomeController@index')->name('user-dashboard');
                Route::resource('laporans', 'ReportingController')->middleware('auth');
                Route::get('search', [SearchController::class, 'search'])->name('search');
                Route::get('dashboard', [DashboardUserController::class, 'index'])->middleware('auth')->name('dashboard');
                Route::get('profile', [DashboardUserController::class, 'profile'])->middleware('auth')->name('profile');
                Route::post('profile', [DashboardUserController::class, 'update'])->middleware('auth')->name('profile');
                Route::get('detail/{id}','DashboardUserController@show')->name('detail')->middleware('check.report.access');
                Route::get('error','DashboardUserController@error')->name('error');
                Route::get('/verifikasi', 'VerifikasiController@index')->name('verifikasi.index');
                Route::post('/verifikasi', 'VerifikasiController@store')->name('verifikasi.store');
});





require __DIR__.'/auth.php';
