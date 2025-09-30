@extends('layouts.dashboard')
@section('title', 'Edit Supplier')
@section('content')
<div class="p-4 sm:p-6">
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Edit Supplier</h1>
    
    <form action="#" method="POST">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="supplier_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Supplier</label>
                <input type="text" id="supplier_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" value="PT. Apple Indonesia" required>
            </div>
            <div>
                <label for="contact_person" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kontak Person</label>
                <input type="text" id="contact_person" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" value="John Doe" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" value="contact@apple.id">
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" value="081234567890">
            </div>
        </div>
        <div class="mb-6">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <textarea id="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">Jl. Jend. Sudirman Kav. 52-53, Jakarta Selatan</textarea>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Update Supplier</button>
        <a href="{{ route('admin.suppliers') }}" class="ml-2 text-sm font-medium text-gray-600 hover:underline dark:text-gray-400">
            Batal
        </a>
    </form>
</div>
@endsection