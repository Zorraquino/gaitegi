<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PageController;

Route::middleware('cache.headers:public;max_age=2628000;etag')->prefix('build')->group(function () {
    Route::get('/{any}', function ($any) {
        return response()->file(public_path("build/{$any}"));
    })->where('any', '.*');
});

// Existing routes
Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {
    Route::get('/{locale?}/{slug?}', [PageController::class, 'show'])
        ->where(['locale' => 'eu|es'])
        ->name('page.show');
});

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');