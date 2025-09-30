@extends('layouts.dashboard')
@section('title', 'Dashboard Staff Gudang')
@section('content')
<div class="p-4 sm:p-6">
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Tugas Hari Ini</h1>
    
    <ul class="space-y-4">
        <li class="p-4 bg-white border rounded-lg shadow-sm dark:bg-gray-800">
            <h3 class="font-semibold">Konfirmasi Penerimaan Barang dari PT. Apple Indonesia</h3>
            <p class="text-sm text-gray-500">Invoice: INV/2025/09/29/001</p>
            <button class="mt-2 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Proses</button>
        </li>
        <li class="p-4 bg-white border rounded-lg shadow-sm dark:bg-gray-800">
            <h3 class="font-semibold">Siapkan Pengeluaran Barang untuk Penjualan #SO-123</h3>
            <p class="text-sm text-gray-500">Tujuan: Toko Cabang Jakarta</p>
            <button class="mt-2 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Proses</button>
        </li>
    </ul>
</div>
@endsection