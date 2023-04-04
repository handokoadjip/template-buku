<?php

use App\Http\Controllers\Backoffice\BookController;
use Illuminate\Support\Facades\Route;

Route::prefix('/backoffice')
    ->middleware(['auth', 'prevent-back-history', 'permission'])
    ->group(function () {
        Route::resource('buku', BookController::class)->except([
            'show'
        ])->parameters(['buku' => 'book']);
    });
