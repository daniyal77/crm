<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReportUnitController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\FileNumberController;
use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;


Route::prefix('faq')->name('faq.')->group(function () {
    Route::get('list', [FaqController::class, 'index'])->name('list');
    Route::get('create', [FaqController::class, 'create'])->name('create');
    Route::post('store', [FaqController::class, 'store'])->name('store');
    Route::get('search', [FaqController::class, 'search'])->name('search');
});


Route::prefix('setting')->name('setting.')->group(function () {
    Route::get('general', [SettingController::class, 'general'])->name('general');
    Route::get('pay', [SettingController::class, 'pay'])->name('pay');
    Route::get('pwa', [SettingController::class, 'pwa'])->name('pwa');
    Route::get('blog', [SettingController::class, 'blog'])->name('blog');
    Route::get('custom-asset', [SettingController::class, 'asset'])->name('asset');
    Route::get('seo', [SettingController::class, 'seo'])->name('seo');
    Route::get('sms', [SettingController::class, 'sms'])->name('sms');
    Route::get('social-link', [SettingController::class, 'social'])->name('social.link');
    Route::get('owner', [SettingController::class, 'owner'])->name('owner');

    Route::post('store', [SettingController::class, 'store'])->name('store');
    Route::post('owner-store', [SettingController::class, 'owner'])->name('owner.store');

    Route::post('permission-store', [PermissionController::class, 'permission'])->name('permission');
    Route::get('permission', [PermissionController::class, 'permission'])->name('permission');
});

Route::prefix('report')->name('report.')->group(function () {
    Route::get('unit', [ReportUnitController::class, 'index'])->name('index');
});

Route::prefix('employee')->name('employee.')->group(function () {
    Route::get('list', [EmployeeController::class, 'index'])->name('list');
    Route::get('create', [EmployeeController::class, 'create'])->name('create');
    Route::post('store', [EmployeeController::class, 'store'])->name('store');
});


//old
Route::get('filenumber/{filenumber}', [FileNumberController::class, 'show'])->name('show');

