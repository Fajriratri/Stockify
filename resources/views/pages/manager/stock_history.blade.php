@extends('layouts.dashboard')
@section('title', 'Riwayat Stok')
@section('content')
<div class="p-4 sm:p-6">
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Riwayat Transaksi Stok</h1>
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
                    <td class="px-6 py-4">Apple MacBook Pro 17"</td>
                    <td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Masuk</span></td>
                    <td class="px-6 py-4">+10</td>
                    <td class="px-6 py-4">25</td>
                </tr>
                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">28-09-2025</td>
                    <td class="px-6 py-4">Logitech MX Master 3</td>
                    <td class="px-6 py-4"><span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Keluar</span></td>
                    <td class="px-6 py-4">-5</td>
                    <td class="px-6 py-4">150</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection