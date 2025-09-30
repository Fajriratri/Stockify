@extends('layouts.dashboard')
@section('title', 'Manajemen Pengguna')
@section('content')
<div class="p-4 sm:p-6">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Manajemen Pengguna</h1>
        {{-- Tautan ke halaman tambah pengguna --}}
        <a href="{{ route('admin.users.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
            Tambah Pengguna
        </a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Pengguna</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Role</th>
                    <th scope="col" class="px-6 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Admin Stockify</th>
                    <td class="px-6 py-4">admin@stockify.com</td>
                    <td class="px-6 py-4"><span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Admin</span></td>
                    <td class="px-6 py-4 text-right">
                        {{-- Tautan ke halaman edit pengguna --}}
                        <a href="{{ route('admin.users.edit', ['id' => 1]) }}" class="font-medium text-blue-600 hover:underline mr-3">Edit</a>
                        <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Manajer Gudang</th>
                    <td class="px-6 py-4">manager@stockify.com</td>
                    <td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Manajer Gudang</span></td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.users.edit', ['id' => 2]) }}" class="font-medium text-blue-600 hover:underline mr-3">Edit</a>
                        <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                    </td>
                </tr>
                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Staff Gudang</th>
                    <td class="px-6 py-4">staff@stockify.com</td>
                    <td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">Staff Gudang</span></td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.users.edit', ['id' => 3]) }}" class="font-medium text-blue-600 hover:underline mr-3">Edit</a>
                        <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection