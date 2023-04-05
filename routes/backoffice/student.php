<?php

use App\Http\Controllers\Backoffice\StudentController;
use Illuminate\Support\Facades\Route;

Route::prefix('/backoffice')
  ->middleware(['auth', 'prevent-back-history', 'permission'])
  ->group(function () {
    Route::resource('mahasiswa', StudentController::class)->except([
      'show'
    ])->parameters(['mahasiswa' => 'student']);
  });
