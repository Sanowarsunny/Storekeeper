<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/products', [ProductController::class, 'products'])->name('pages.products');
    Route::get('/create', [ProductController::class, 'create'])->name('pages.create');
    Route::post('/store', [ProductController::class, 'store'])->name('pages.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('pages.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('pages.update');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('pages.delete');
    Route::get('/sale', [ProductController::class, 'sale'])->name('pages.sale');
    Route::post('/sale', [ProductController::class, 'saleStore'])->name('pages.sale');

    Route::get('/transections', [ProductController::class, 'transections'])->name('pages.transections');
    //Route::post('/transections', [ProductController::class, 'transections'])->name('pages.sale');

});

require __DIR__.'/auth.php';
