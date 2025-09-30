<?php

use Illuminate\Support\Facades\Route;

// Halaman utama sekarang adalah halaman login
Route::get('/', function () {
    return view('pages.auth.login');
})->name('login');


// --- GRUP RUTE ADMIN ---
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () { return view('pages.admin.dashboard'); })->name('dashboard');
    
    // Produk & Kategori
    Route::get('/products', function () { return view('pages.admin.product_list'); })->name('products.list');
    Route::get('/products/create', function () { return view('pages.admin.product_create'); })->name('products.create');
    Route::get('/products/{id}/edit', function ($id) { return view('pages.admin.product_edit'); })->name('products.edit');
    Route::get('/products/categories', function () { return view('pages.admin.category_list'); })->name('products.categories');
    
    // Supplier & Pengguna
    Route::get('/suppliers', function () { return view('pages.admin.supplier_list'); })->name('suppliers');
    Route::get('/suppliers/create', function () { return view('pages.admin.supplier_create'); })->name('suppliers.create');
    Route::get('/suppliers/{id}/edit', function ($id) { return view('pages.admin.supplier_edit'); })->name('suppliers.edit');
    Route::get('/users', function () { return view('pages.admin.user_list'); })->name('users');
    Route::get('/users/create', function () { return view('pages.admin.user_create'); })->name('users.create');
    Route::get('/users/{id}/edit', function ($id) { return view('pages.admin.user_edit'); })->name('users.edit');

    // INI BAGIAN PENTING: Rute Laporan
    Route::get('/reports', function () { 
        return view('pages.admin.reports'); 
    })->name('reports');
});

// --- GRUP RUTE MANAJER GUDANG ---
Route::prefix('manager')->name('manager.')->group(function () {
    Route::get('/dashboard', function () { return view('pages.manager.dashboard'); })->name('dashboard');

    // INI BAGIAN PENTING: Rute Riwayat Stok
    Route::get('/stock/history', function() { 
        return view('pages.manager.stock_history'); 
    })->name('stock.history');
    
    Route::get('/stock/in', function() { return view('pages.manager.stock_in_form'); })->name('stock.in');
});

// --- GRUP RUTE STAFF GUDANG ---
Route::prefix('staff')->name('staff.')->group(function () {
    Route::get('/dashboard', function () { return view('pages.staff.dashboard'); })->name('dashboard');
});