<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminRTController;
use App\Http\Controllers\Admin\AdminRWController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\OpsiJawabanController;
use App\Http\Controllers\Admin\PertanyaanController;
use App\Http\Controllers\Admin\SebelumBencanaAdminController;
use App\Http\Controllers\Admin\SesudahBencanaAdminController;
use App\Http\Controllers\Admin\TerjadiBencanaAdminController;
use App\Http\Controllers\rt\RtController;
use App\Http\Controllers\rw\RwController;
use App\Http\Controllers\rt\SebelumBencanaRtController;
use App\Http\Controllers\rt\SesudahBencanaRtController;
use App\Http\Controllers\rt\TerjadiBencanaRtController;
use App\Http\Controllers\rw\SebelumBencanaRWController;
use App\Http\Controllers\rw\SesudahBencanaRwController;
use App\Http\Controllers\rw\TerjadiBencanaRwController;
use App\Http\Controllers\super_admin\PertanyaanSAController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

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
});

Route::middleware(['auth',  'verified', 'role:RW'])->name('rw.')->prefix('rw')->group(function () {
    Route::resource('/daftar_rw', RwController::class);
    Route::resource('/kuisioner_sb', SebelumBencanaRWController::class);
    Route::resource('/kuisioner_tb', TerjadiBencanaRwController::class);
    Route::resource('/kuisioner_sdb', SesudahBencanaRwController::class);
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


Route::get('/report', function () {
    return view('pages/report-pages');
})->name('pages.report-pages');
