<?php

use App\Http\Controllers\pdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('pdf-download', [pdfController::class, 'generatePDF']);
Route::get('user-data', [pdfController::class, 'tableData'])->name('users.data');
Route::get('/users', [pdfController::class, 'index'])->name('users.index');
