<?php

use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;


Route::prefix('faq')->name('faq.')->group(function () {
    Route::get('list', [FaqController::class, 'index'])->name('list');
    Route::get('create', [FaqController::class, 'create'])->name('create');
    Route::post('store', [FaqController::class, 'store'])->name('store');
    Route::get('show/{faq_id}', [FaqController::class, 'show'])->name('show');
});

