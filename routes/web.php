<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PermissionController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::middleware('auth')->group(function () {

    Route::resource('konfigurasi/roles', RoleController::class);
    Route::resource('konfigurasi/permissions', PermissionController::class);
});

Route::resource('riwayat/transaksi', TransaksiController::class);
// Route::controller(RoleController::class)->group(function () {
//     Route::get('/roles', 'index');
//     Route::get('/roles/create', 'create');
// });
