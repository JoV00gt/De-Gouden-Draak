<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerMenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\OrderingController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PDFController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('index');
Route::get('/news', [NewsController::class, 'index'])->name('index');
Route::get('/customer/menu', [CustomerMenuController::class, 'index'])->name('customer.index');
Route::get('/menu/download', [PDFController::class, 'generateMenuPDF'])->name('menu.download');

Route::group(['middleware' => ['auth', 'role:employee']], function() {
    Route::get('menu', [MenuController::class, 'index'])->name('menu.index');
    Route::get('deals/index', [DealController::class, 'index'])->name('deals.index');
    Route::get('deals/create', [DealController::class, 'create'])->name('deals.create');
    Route::post('deals/create', [DealController::class, 'store'])->name('deals.store');
    Route::get('deals/{id}',  [DealController::class, 'edit'])->name('deals.edit');
    Route::put('deals/{id}',  [DealController::class, 'update'])->name('deals.update');
    Route::delete('deals/{id}',  [DealController::class, 'destroy'])->name('deals.destroy');
    Route::get('deals', [DealController::class, 'deals'])->name('deals.deals');
});

Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('menu', [MenuController::class, 'store'])->name('menu.store');
    Route::get('menu/{id}',  [MenuController::class, 'edit'])->name('menu.edit');
    Route::put('menu/{id}',  [MenuController::class, 'update'])->name('menu.update');
    Route::delete('menu/{id}',  [MenuController::class, 'destroy'])->name('menu.destroy');
});

Route::post('generate-bill', [PDFController::class, 'generatePDF'])->middleware(['auth', 'verified'])->name('generatePDF');
Route::post('/order', [OrderingController::class, 'store'])->name('order.store');
Route::get('/order', [OrderingController::class, 'index'])->middleware(['auth', 'role:employee'])->name('order');
Route::get('/sales/overview', [SalesController::class, 'overview'])->middleware(['auth', 'role:employee'])->name('sales.overview');
Route::get('/sales', [SalesController::class, 'index'])->middleware(['auth', 'role:employee'])->name('sales');

Route::get('set-locale/{locale}', function ($locale) {

    session()->put('locale', $locale);
    app()->setlocale($locale);

    return redirect()->back();
})->name('locale.setting');

require __DIR__ . '/auth.php';
