<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\TransactionsController;


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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })

Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');



Route::middleware('auth')->group(function () {

    
    //profile controller
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //product controller 
    Route::get('/products', [ProductController::class, 'products'])->name('pages.products');
    Route::get('/create', [ProductController::class, 'create'])->name('pages.create');
    Route::post('/store', [ProductController::class, 'store'])->name('pages.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('pages.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('pages.update');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('pages.delete');

    //salescontroller
    Route::get('/sale', [SalesController::class, 'index'])->name('pages.sale');
    Route::post('/sale', [SalesController::class, 'saleStore'])->name('pages.sale');

    //transeaction controller
    Route::get('/transections', [TransactionsController::class, 'showData'])->name('pages.transections');

});

require __DIR__.'/auth.php';
