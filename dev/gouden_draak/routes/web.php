<?php

use App\Http\Controllers\OrderingController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\MenuController;
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

Route::group(['middleware' => ['auth', 'role:employee']], function() {
    Route::get('menu', [MenuController::class, 'index'])->name('menu.index');
});

Route::post('/order', [OrderingController::class, 'store'])->name('order.store');
Route::get('/order', [OrderingController::class, 'index'])->middleware(['auth', 'role:employee'])->name('order');
Route::get('/sales/overview', [SalesController::class, 'overview'])->middleware(['auth', 'role:employee'])->name('sales.overview');
Route::get('/sales', [SalesController::class, 'index'])->middleware(['auth', 'role:employee'])->name('sales');

require __DIR__.'/auth.php';
