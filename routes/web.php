<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\EmailController;
use App\Livewire\ShowPage;

Route::get('/{locale?}/{slug?}', ShowPage::class)
    ->where(['locale' => 'eu|es'])
    ->name('page.show');