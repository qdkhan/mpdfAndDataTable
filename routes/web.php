<?php

use App\Http\Controllers\pdfController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isUserIsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('pdf-download', [pdfController::class, 'generatePDF'])->name('pdf-download')->middleware(isUserIsAdmin::class);
Route::get('user-data', [pdfController::class, 'tableData'])->name('users.data');
Route::get('/users', [pdfController::class, 'index'])->name('users.index')->middleware(isUserIsAdmin::class.':editor');
Route::get('userIndex', [UserController::class, 'index']);

// Route::middleware([isUserIsAdmin::class])->group(function () {
//     Route::get('pdf-download', [pdfController::class, 'generatePDF'])->name('pdf-download');
//     Route::get('user-data', [pdfController::class, 'tableData'])->name('users.data');
//     Route::get('/users', [pdfController::class, 'index'])->name('users.index');
// });