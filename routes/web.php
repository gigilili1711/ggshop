<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
//     // Các route dành cho admin khác
// });


route::get('/admin', [AdminController::class,'index'])->middleware(['auth','role:admin'])->name('admin.home');
// product
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('admin')->group(function (){
        Route::get('products', [productController::class, 'index'])->name('product.all');
        Route::get('them-sp', [productController::class, 'addproduct'])->name('product.add');
        Route::post('them-sp', [productController::class, 'store'])->name('product.store');
        Route::get('edit-sp/{id}', [productController::class, 'edit'])->name('product.edit');
        Route::post('update-sp/{id}', [productController::class, 'update'])->name('product.update');
        // Route::get('delete-sp/{id}', [productController::class, 'delete'])->name('product.delete');
        Route::delete('delete-sp/{id}', [productController::class, 'delete'])->name('product.delete');
    });

});



// trang chủ
Route::get('/', [HomeController::class ,'index'])->name('home');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
