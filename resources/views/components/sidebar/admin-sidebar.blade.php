<x-sidebar-dashboard>
    {{-- Menu untuk Aplikasi Stockify --}}
    
    <x-sidebar-menu-dashboard routeName="admin.dashboard" title="Dashboard"/>

    <x-sidebar-menu-dropdown-dashboard routeName="admin.products.*" title="Produk">
        <x-sidebar-menu-dropdown-item-dashboard routeName="admin.products.list" title="Manajemen Produk"/>
        <x-sidebar-menu-dropdown-item-dashboard routeName="admin.products.categories" title="Kategori Produk"/>
    </x-sidebar-menu-dropdown-dashboard>

    <x-sidebar-menu-dashboard routeName="admin.suppliers" title="Supplier"/>
    
    {{-- Pastikan routeName untuk Laporan adalah 'admin.reports' --}}
    <x-sidebar-menu-dashboard routeName="admin.reports" title="Laporan"/>

    <x-sidebar-menu-dashboard routeName="admin.users" title="Pengguna"/>

    {{-- Menu untuk Manajer Gudang --}}
    <x-sidebar-menu-dropdown-dashboard routeName="manager.stock.*" title="Stok (Manajer)">
        <x-sidebar-menu-dropdown-item-dashboard routeName="manager.stock.history" title="Riwayat Stok"/>
        <x-sidebar-menu-dropdown-item-dashboard routeName="manager.stock.in" title="Catat Barang Masuk"/>
    </x-sidebar-menu-dropdown-dashboard>

</x-sidebar-dashboard>