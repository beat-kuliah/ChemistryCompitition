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
    // Dashboard Admin
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    // Page Lini masa
    Route::get('/admin/lini_masa', [App\Http\Controllers\LiniMasaController::class, 'index']);
    // Page Lini masa
    Route::get('/admin/lini_masa/show', [App\Http\Controllers\LiniMasaController::class, 'show']);
    // Page Lini masa
    Route::get('/admin/lini_masa/update', [App\Http\Controllers\LiniMasaController::class, 'update']);
});

Route::get('/cc', [App\Http\Controllers\CCController::class, 'index']);
Route::get('/cod', [App\Http\Controllers\CODController::class, 'index']);
Route::get('/cip', [App\Http\Controllers\CIPController::class, 'index']);
Route::get('/semnas', [App\Http\Controllers\SemNasController::class, 'index']);
Route::get('/chempaign', [App\Http\Controllers\ChempaignController::class, 'index']);
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index']);

Route::middleware(['auth'])->group(function() {
    // Page pendaftaran
    Route::get('/daftar/cc', [App\Http\Controllers\CCController::class, 'create']);
    Route::get('/daftar/cod', [App\Http\Controllers\CODController::class, 'create']);
    Route::get('/daftar/cip', [App\Http\Controllers\CIPController::class, 'create']);
    Route::get('/daftar/semnas', [App\Http\Controllers\SemNasController::class, 'create']);
    Route::get('/daftar/chempaign', [App\Http\Controllers\ChempaignController::class, 'create']);

    // Post data peserta pendataran
    Route::post('/cc', [App\Http\Controllers\CCController::class, 'store']);
    Route::post('/cod', [App\Http\Controllers\CODController::class, 'store']);
    Route::post('/cip', [App\Http\Controllers\CIPController::class, 'store']);
    Route::post('/semnas', [App\Http\Controllers\SemNasController::class, 'store']);
    Route::post('/chempaign', [App\Http\Controllers\ChempaignController::class, 'store']);

    // Page abstrak
    Route::get('/abstrak/cip/{id}', [App\Http\Controllers\CIPController::class, 'abstrak']);

    // Page payment
    Route::get('/payment/cc/{id}', [App\Http\Controllers\CCController::class, 'payment']);
    Route::get('/payment/cod/{id}', [App\Http\Controllers\CODController::class, 'payment']);
    Route::get('/payment/cip/{id}', [App\Http\Controllers\CIPController::class, 'payment']);
    Route::get('/payment/chempaign/{id}', [App\Http\Controllers\ChempaignController::class, 'payment']);

    // Get List Pendaftaran by user
    Route::get('/list_pendaftaran', [App\Http\Controllers\Controller::class, 'list_pendaftaran']);
    // Post upload bukti pembayaran
    Route::post('/payment/{id}', [App\Http\Controllers\Controller::class, 'store_payment']);
    // Post upload abstrak
    Route::post('/abstrak/{id}', [App\Http\Controllers\Controller::class, 'store_abstrak']);
});


Route::get('/file/download/panduan/{id}', [App\Http\Controllers\DownloadController::class, 'index'])->name('download');