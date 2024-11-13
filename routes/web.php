<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PageController;

Route::get('/{locale?}/{slug?}', [PageController::class, 'show'])
    ->where(['locale' => 'eu|es'])
    ->name('page.show');

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');