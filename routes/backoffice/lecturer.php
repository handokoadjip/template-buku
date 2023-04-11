<?php

use App\Http\Controllers\Backoffice\LecturerController;
use Illuminate\Support\Facades\Route;

Route::prefix('/backoffice')
  ->middleware(['auth', 'prevent-back-history', 'permission'])
  ->group(function () {
    Route::resource('dosen', LecturerController::class)->except([
      'show'
    ])->parameters(['dosen' => 'lecturer']);
  });
