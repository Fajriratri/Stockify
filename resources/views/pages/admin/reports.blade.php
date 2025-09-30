@extends('layouts.dashboard')

@section('title', 'Laporan')

@section('content')
<div class="p-4 sm:p-6">
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Pusat Laporan</h1>

    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 mb-6">
        <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Laporan Stok Barang</h3>
        
        {{-- Filter yang sudah dirapikan --}}
        <form action="#" class="sm:flex sm:items-end sm:space-x-4 mb-4">
            <div class="flex-1">
                <label for="stock_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Filter per Kategori</label>
                <select id="stock_category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <option selected>Semua Kategori</option>
                    <option value="1">Laptop</option>
                    <option value="2">Aksesoris</option>
                </select>
            </div>
            <div class="mt-4 sm:mt-0">
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Tampilkan</button>
            </div>
        </form>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nama Produk</th>
                        <th scope="col" class="px-6 py-3">Kategori</th>
                        <th scope="col" class="px-6 py-3">Stok Saat Ini</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                        <th class="px-6 py-4 font-medium text-gray-900 dark:text-white">Apple MacBook Pro 17"</th>
                        <td class="px-6 py-4">Laptop</td>
                        <td class="px-6 py-4">25</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 mb-6">
        <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Laporan Transaksi Barang</h3>
        
        {{-- Filter yang sudah dirapikan --}}
        <form action="#" class="sm:flex sm:items-end sm:space-x-4 mb-4">
            <div>
                <label for="trans_start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dari Tanggal</label>
                <input type="date" id="trans_start_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
             <div>
                <label for="trans_end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sampai Tanggal</label>
                <input type="date" id="trans_end_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div class="mt-4 sm:mt-0">
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Tampilkan</button>
            </div>
        </form>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Tanggal</th>
                        <th scope="col" class="px-6 py-3">Produk</th>
                        <th scope="col" class="px-6 py-3">Tipe</th>
                        <th scope="col" class="px-6 py-3">Jumlah</th>
                        <th scope="col" class="px-6 py-3">Stok Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">29-09-2025</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-white">Apple MacBook Pro 17"</td>
                        <td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Masuk</span></td>
                        <td class="px-6 py-4">+10</td>
                        <td class="px-6 py-4">25</td>
                    </tr>
                     <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">28-09-2025</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-white">Logitech MX Master 3</td>
                        <td class="px-6 py-4"><span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Keluar</span></td>
                        <td class="px-6 py-4">-5</td>
                        <td class="px-6 py-4">150</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
        <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Laporan Aktivitas Pengguna</h3>
        
         <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Waktu</th>
                        <th scope="col" class="px-6 py-3">Pengguna</th>
                        <th scope="col" class="px-6 py-3">Aktivitas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">2025-09-30 10:05:12</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-white">manager@stockify.com</td>
                        <td class="px-6 py-4">Mencatat barang masuk untuk produk 'Apple MacBook Pro 17"' sejumlah 10 unit.</td>
                    </tr>
                     <tr class="bg-white border-b hover:bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">2025-09-30 09:30:00</td>
                        <td class="px-6 py-4 text-gray-900 dark:text-white">admin@stockify.com</td>
                        <td class="px-6 py-4">Menambahkan produk baru: 'Logitech MX Master 3'.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection