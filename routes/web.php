<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PageController;

// Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {

    Route::get('/{locale?}/{slug?}', [PageController::class, 'show'])
        ->where(['locale' => 'eu|es'])
        ->name('page.show');

    // Route::get('/{any}', function ($any) {
    //     return response()->file(public_path("build/{$any}"));
    // })->where('any', '.*');

// });

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');