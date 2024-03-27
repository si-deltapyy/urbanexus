<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rt\RtController;
use App\Http\Controllers\rw\RwController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\WebScrapingController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\AdminRTController;
use App\Http\Controllers\Admin\AdminRWController;
use App\Http\Controllers\rw\PendudukPJController;
use App\Http\Controllers\Admin\PendudukController;
use App\Http\Controllers\Admin\TampilanController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PertanyaanController;
use App\Http\Controllers\Admin\OpsiJawabanController;
use App\Http\Controllers\Admin\PDFDownloadController;
use App\Http\Controllers\rt\SebelumBencanaRtController;
use App\Http\Controllers\rt\SesudahBencanaRtController;
use App\Http\Controllers\rt\TerjadiBencanaRtController;
use App\Http\Controllers\rw\SebelumBencanaRWController;
use App\Http\Controllers\rw\SesudahBencanaRwController;
use App\Http\Controllers\rw\TerjadiBencanaRwController;
use App\Http\Controllers\super_admin\PertanyaanSAController;
use App\Http\Controllers\Admin\SebelumBencanaAdminController;
use App\Http\Controllers\Admin\SesudahBencanaAdminController;
use App\Http\Controllers\Admin\TerjadiBencanaAdminController;


Route::get('/', function () {
    return view('welcome-3');
});

// Route::get('/', [LandingController::class, 'index'])->name('welcome');
Route::get('/', [LandingController::class, 'baru'])->name('ds');

Route::get('/komoditasPasar', [WebScrapingController::class, 'show']);

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/send/message', function () {
    return view('send-api');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth',  'verified', 'role:super_admin'])->name('super_admin.')->prefix('super_admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

    Route::resource('/admin_rw', AdminRWController::class);
    Route::resource('/admin_rt', AdminRTController::class);
    Route::resource('/daftar_pertanyaan', PertanyaanSAController::class);
    Route::resource('/kuisioner_sb', SebelumBencanaAdminController::class);
    Route::resource('/kuisioner_tb', TerjadiBencanaAdminController::class);
    Route::resource('/kuisioner_sdb', SesudahBencanaAdminController::class);
});

Route::middleware(['auth',  'verified', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::resource('/admin_rw', AdminRWController::class);
    Route::resource('/pertanyaan', PertanyaanController::class);
    Route::resource('/opsi_jawaban', OpsiJawabanController::class);
    Route::resource('/kuisioner_sb', SebelumBencanaAdminController::class);
    Route::resource('/kuisioner_tb', TerjadiBencanaAdminController::class);
    Route::resource('/kuisioner_sdb', SesudahBencanaAdminController::class);
    Route::resource('/agenda', AgendaController::class);
    Route::get('/sebelum_bencana_pdf', [PDFDownloadController::class, 'sebelum_bencana'])->name('sebelum_bencana_pdf');
    Route::get('/sesudah_bencana_pdf', [PDFDownloadController::class, 'sesudah_bencana'])->name('sesudah_bencana_pdf');
    Route::get('/terjadi_bencana_pdf', [PDFDownloadController::class, 'terjadi_bencana'])->name('terjadi_bencana_pdf');
    Route::get('/report', [ReportController::class, 'index'])->name('report');
    Route::get('/data_table_pdf', [PDFDownloadController::class, 'data_table'])->name('data_table_pdf');
    Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
    Route::get('/penduduk/tambah', [PendudukController::class, 'create'])->name('penduduk.create');
    Route::post('/penduduk', [PendudukController::class, 'store'])->name('penduduk.store');
    Route::get('/penduduk/{id}/show', [PendudukController::class, 'show'])->name('penduduk.edit');
    Route::get('/penduduk/{id}/edit', [PendudukController::class, 'edit'])->name('penduduk.show');
    Route::put('/penduduk/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
    Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');

    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::get('/news/{id}/delete', [NewsController::class, 'confirmDelete'])->name('news.confirmDelete');
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

    Route::get('/slider', [TampilanController::class, 'index'])->name('slider');
    Route::get('/slider/tambah', [TampilanController::class, 'create'])->name('slider.create');
    Route::post('/slider', [TampilanController::class, 'store'])->name('slider.store');
    Route::delete('/slider/{id}', [TampilanController::class, 'delete'])->name('slider.delete');
});

Route::middleware(['auth',  'verified', 'role:RW'])->name('rw.')->prefix('rw')->group(function () {
    Route::resource('/daftar_rw', RwController::class);
    Route::resource('/kuisioner_sb', SebelumBencanaRWController::class);
    Route::resource('/kuisioner_tb', TerjadiBencanaRwController::class);
    Route::resource('/kuisioner_sdb', SesudahBencanaRwController::class);
    Route::get('/penduduk', [PendudukPJController::class, 'index'])->name('penduduk.index');
    Route::get('/penduduk/tambah', [PendudukPJController::class, 'create'])->name('penduduk.create');
    Route::post('/penduduk', [PendudukPJController::class, 'store'])->name('penduduk.store');
    Route::get('/penduduk/{id}/edit', [PendudukPJController::class, 'edit'])->name('penduduk.edit');
    Route::get('/penduduk/{id}/show', [PendudukPJController::class, 'show'])->name('penduduk.show');
    Route::put('/penduduk/{id}', [PendudukPJController::class, 'update'])->name('penduduk.update');
    Route::delete('/penduduk/{id}', [PendudukPJController::class, 'destroy'])->name('penduduk.destroy');
});

Route::middleware(['auth',  'verified', 'role:RT'])->name('rt.')->prefix('rt')->group(function () {
    Route::resource('/daftar_rt', RtController::class);
    Route::resource('/kuisioner_sb', SebelumBencanaRtController::class);
    Route::resource('/kuisioner_tb', TerjadiBencanaRtController::class);
    Route::resource('/kuisioner_sdb', SesudahBencanaRtController::class);
});

require __DIR__ . '/auth.php';


Route::get('/user', function () {
    return view('pages/user-page/dashboard-user');
})->name('user');

Route::get('/kuesioner', function () {
    return view('pages/user-page/user-kuesioner');
})->name('kuesioner');


Route::get('/welcome-2', function () {
    return view('welcome-2');
})->name('welcome-2');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/berita-single', function () {
    return view('berita-single');
})->name('berita-single');



Route::get('/scrape-data', 'WebScrapingController@scrapeData');

Route::get('/report', function () {
    return view('pages/report-pages');
})->name('report');