@extends('layouts.dashboard')
@section('title', 'Catat Barang Masuk')
@section('content')
<div class="p-4 sm:p-6">
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Formulir Barang Masuk</h1>
    <form action="#" method="POST" class="mt-6">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
             <div>
                <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Produk</label>
                <select id="product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Pilih Produk</option>
                    <option value="1">Apple MacBook Pro 17"</option>
                    <option value="2">Logitech MX Master 3</option>
                </select>
            </div>
             <div>
                <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Masuk</label>
                <input type="number" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="0" required>
            </div>
             <div>
                <label for="supplier" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier</label>
                <select id="supplier" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Pilih Supplier</option>
                    <option value="1">PT. Apple Indonesia</option>
                </select>
            </div>
             <div>
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Masuk</label>
                <input type="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan Transaksi</button>
    </form>
</div>
@endsection