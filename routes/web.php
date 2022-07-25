<?php
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
    return view('landing_page.index');
});

Auth::routes();

Route::middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/cc', [App\Http\Controllers\CCController::class, 'index']);
Route::get('/cod', [App\Http\Controllers\CODController::class, 'index']);
Route::get('/cip', [App\Http\Controllers\CIPController::class, 'index']);
Route::get('/semnas', [App\Http\Controllers\SemNasController::class, 'index']);
Route::get('/chempaign', [App\Http\Controllers\ChempaignController::class, 'index']);
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index']);
