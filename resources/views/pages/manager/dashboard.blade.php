@extends('layouts.dashboard')

@section('title', 'Dashboard Manajer Gudang')

@section('content')
<div class="p-4 sm:p-6">
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Dashboard Manajer Gudang</h1>
    <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-4">
        <div class="p-4 bg-white border rounded-lg shadow-sm sm:p-6 dark:bg-gray-800">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Stok Menipis</h3>
            <span class="text-2xl font-bold leading-none text-red-500 sm:text-3xl">5 Produk</span>
        </div>
        <div class="p-4 bg-white border rounded-lg shadow-sm sm:p-6 dark:bg-gray-800">
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Barang Masuk Hari Ini</h3>
            <span class="text-2xl font-bold leading-none text-green-500 sm:text-3xl">2 Transaksi</span>
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ route('manager.stock.in') }}" class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Catat Barang Masuk</a>
        <a href="{{ route('manager.stock.out') }}" class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Catat Barang Keluar</a>
    </div>
</div>
@endsection