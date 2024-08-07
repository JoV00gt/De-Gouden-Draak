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

Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('menu', [MenuController::class, 'store'])->name('menu.store');
    Route::get('menu/{id}',  [MenuController::class, 'edit'])->name('menu.edit');
    Route::put('menu/{id}',  [MenuController::class, 'update'])->name('menu.update');
    Route::delete('menu/{id}',  [MenuController::class, 'destroy'])->name('menu.destroy');
});

Route::post('/order', [OrderingController::class, 'store'])->name('order.store');
Route::get('/order', [OrderingController::class, 'index'])->middleware(['auth', 'role:employee'])->name('order');
Route::get('/sales/overview', [SalesController::class, 'overview'])->middleware(['auth', 'role:employee'])->name('sales.overview');
Route::get('/sales', [SalesController::class, 'index'])->middleware(['auth', 'role:employee'])->name('sales');

require __DIR__.'/auth.php';
