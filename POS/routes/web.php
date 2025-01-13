<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('auth.login');
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

// Auth
    // Login
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login-user', [AuthController::class, 'loginUser'])->name('loginUser');
    // Register
    Route::get('/registration', [AuthController::class, 'registration'])->name('auth.registration');
    Route::post('/register-user', [AuthController::class, 'registerUser'])->name('registerUser');

    // User
    Route::get('/user-profile', [AuthController::class, 'profile'])->name('users.profile');
    // Edit
    Route::put('/user-profile/update', [AuthController::class, 'update'])->name('users.update');

    // Add this route for logging out the user
    Route::post('/logout', function () {
        Auth::logout(); // Log out the user
        return redirect()->route('auth.login'); // Redirect to the login page
    })->name('logout');


// Categories
    // Add
    Route::get('/category', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/category', [CategoryController::class, 'store'])->name('categories.store');
    // Edit
    Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('categories.update');
    // Delete
    Route::delete('/category/{category}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');

// Suppliers
// Add
    Route::get('/supplier', [SupplierController::class, 'index'])->name('suppliers.index');
    Route::post('/supplier', [SupplierController::class, 'store'])->name('suppliers.store');
    // Edit
    Route::put('/supplier/{supplier}/update', [SupplierController::class, 'update'])->name('suppliers.update');
    //Delete
    Route::delete('/supplier/{supplier}/destroy', [SupplierController::class, 'destroy'])->name('suppliers.destroy');

// Products
// View
    Route::get('products/{product_id}/view', [ProductController::class, 'show'])->name('products.view');
    // Add 
    Route::get('/product', [ProductController::class, 'index'])->name('products.index');
    Route::post('/product', [ProductController::class, 'store'])->name('products.store');
    // Edit 
    Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('products.update');
    // Delete
    Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');

// POS
    Route::get('/pos', [POSController::class, 'index'])->name('pos.index');



