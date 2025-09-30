@extends('layouts.dashboard')

@section('title', 'Dashboard Admin')

@section('content')
<div class="p-4 sm:p-6">
    <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Dashboard Admin</h1>

    <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-4">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:bg-gray-800">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">75</span>
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Jumlah Produk</h3>
                </div>
            </div>
        </div>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:bg-gray-800">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">12</span>
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Jumlah Supplier</h3>
                </div>
            </div>
        </div>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:bg-gray-800">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">150</span>
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Transaksi Masuk (Bulan Ini)</h3>
                </div>
            </div>
        </div>
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:bg-gray-800">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">124</span>
                    <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Transaksi Keluar (Bulan Ini)</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6 mt-6 xl:grid-cols-2">
        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">Stok per Kategori</h3>
            <div id="stock-chart"></div>
        </div>

        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h3 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Aktivitas Pengguna Terbaru</h3>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <tbody>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">
                                <p class="font-semibold">manager@stockify.com</p>
                                <p class="text-xs text-gray-500">Mencatat barang masuk untuk produk 'Apple MacBook Pro 17"'</p>
                            </td>
                            <td class="px-4 py-3 text-right text-xs text-gray-500">10 menit lalu</td>
                        </tr>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">
                                <p class="font-semibold">admin@stockify.com</p>
                                <p class="text-xs text-gray-500">Menambahkan pengguna baru: staff@stockify.com</p>
                            </td>
                            <td class="px-4 py-3 text-right text-xs text-gray-500">1 jam lalu</td>
                        </tr>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">
                                <p class="font-semibold">staff@stockify.com</p>
                                <p class="text-xs text-gray-500">Mencatat barang keluar untuk penjualan #SO-124</p>
                            </td>
                            <td class="px-4 py-3 text-right text-xs text-gray-500">3 jam lalu</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Script untuk membuat Grafik Stok Barang
    const getChartOptions = () => {
        return {
            series: [15, 42, 18], // Data dummy: Jumlah stok per kategori
            colors: ["#1C64F2", "#16BDCA", "#9061F9"],
            chart: {
                height: 420,
                width: "100%",
                type: "pie",
            },
            stroke: {
                colors: ["white"],
                lineCap: "",
            },
            plotOptions: {
                pie: {
                    labels: {
                        show: true,
                    },
                    size: "100%",
                    dataLabels: {
                        offset: -25
                    }
                },
            },
            labels: ["Laptop", "Aksesoris", "ATK"], // Nama kategori
            dataLabels: {
                enabled: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                },
            },
            legend: {
                position: "bottom",
                fontFamily: "Inter, sans-serif",
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value + " pcs"
                    },
                },
            },
            xaxis: {
                labels: {
                    formatter: function (value) {
                        return value  + " pcs"
                    },
                },
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
            },
        }
    }

    if (document.getElementById("stock-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("stock-chart"), getChartOptions());
        chart.render();
    }
</script>
@endpush