<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [AuthController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginPost', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route untuk pendataan
Route::post('/pendataan', [AuthController::class, 'pendataan'])->name('pendataan.store');

Route::group(['middleware' => ['authCheck:admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/data-alumni', [AdminController::class, 'dataAlumni'])->name('admin.data-alumni');
    Route::get('/admin/export-data-alumni', [AdminController::class, 'exportDataAlumni'])->name('admin.export-data-alumni');
    Route::get('/admin/delete-data-alumni/{id}', [AdminController::class, 'deleteDataAlumni'])->name('admin.delete-data-alumni');
});
