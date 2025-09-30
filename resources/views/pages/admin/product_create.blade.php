@extends('layouts.dashboard')
@section('title', 'Tambah Produk Baru')
@section('content')
<div class="p-4 sm:p-6">
    {{-- Tambahkan kelas 'dark:text-white' pada judul --}}
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Tambah Produk Baru</h1>
    
    <form action="#" method="POST">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                {{-- Tambahkan kelas 'dark:text-white' pada label --}}
                <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                {{-- Tambahkan kelas 'dark:*' pada input --}}
                <input type="text" id="product_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Contoh: MacBook Pro 17 inch" required>
            </div>
            <div>
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    <option selected>Pilih Kategori</option>
                </select>
            </div>
            <div>
                <label for="initial_stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok Awal</label>
                <input type="number" id="initial_stock" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="0" required>
            </div>
            <div>
                <label for="sell_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Jual (Rp)</label>
                <input type="number" id="sell_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="1500000" required>
            </div>
            
            {{-- Atribut Produk --}}
            <div>
                <label for="size" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran</label>
                <input type="text" id="size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Contoh: XL, 17 inch, 42">
            </div>
            <div>
                <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warna</label>
                <input type="text" id="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Contoh: Merah, Space Gray">
            </div>
        </div>

     <div class="flex items-center">
    {{-- Tombol untuk menyimpan produk baru --}}
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan Produk</button>
    
    {{-- Tombol Batal yang mengarah kembali ke daftar produk --}}
    <a href="{{ route('admin.products.list') }}" class="ml-3 text-sm font-medium text-gray-700 hover:underline dark:text-gray-400 ">
        Batal
    </a>
</div>
    </form>
</div>
@endsection