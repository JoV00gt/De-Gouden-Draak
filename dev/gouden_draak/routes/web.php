<?php

use App\Http\Controllers\OrderingController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/menu', function() {
    return view('menu');
})->middleware(['auth', 'verified'])->name('menu');

Route::post('generate-bill', [PDFController::class, 'generatePDF'])->middleware(['auth', 'verified'])->name('generatePDF');
Route::get('/order', [OrderingController::class, 'index'])->middleware(['auth', 'verified'])->name('order');
Route::post('/order', [OrderingController::class, 'store'])->name('order.store');
Route::get('/sales/overview', [SalesController::class, 'overview'])->middleware(['auth', 'verified'])->name('sales.overview');
Route::get('/sales', [SalesController::class, 'index'])->middleware(['auth', 'verified'])->name('sales');

require __DIR__.'/auth.php';
