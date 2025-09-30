@extends('layouts.dashboard')

@section('title', 'Manajemen Supplier')

@section('content')
<div class="p-4 sm:p-6">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Manajemen Supplier</h1>
        {{-- Tombol untuk menuju halaman tambah supplier --}}
        <a href="{{ route('admin.suppliers.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
            Tambah Supplier
        </a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Supplier</th>
                    <th scope="col" class="px-6 py-3">Kontak Person</th>
                    <th scope="col" class="px-6 py-3">Nomor Telepon</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">PT. Apple Indonesia</th>
                    <td class="px-6 py-4">John Doe</td>
                    <td class="px-6 py-4">081234567890</td>
                    <td class="px-6 py-4">contact@apple.id</td>
                    <td class="px-6 py-4 text-right">
                        {{-- Tombol untuk menuju halaman edit supplier --}}
                        <a href="{{ route('admin.suppliers.edit', ['id' => 1]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-3">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                    </td>
                </tr>
                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">PT. Logitech Store</th>
                    <td class="px-6 py-4">Jane Smith</td>
                    <td class="px-6 py-4">089876543210</td>
                    <td class="px-6 py-4">sales@logitech.id</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.suppliers.edit', ['id' => 2]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-3">Edit</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection