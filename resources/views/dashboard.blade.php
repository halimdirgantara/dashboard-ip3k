@extends('layouts.app')

@section('content')
    <header class="bg-blue-900 text-white rounded-xl p-4 mb-6 shadow-card">
        <h1 class="text-xl font-semibold">Dashboard Program IP3K Kabupaten Sekadau</h1>
        <p class="text-sm">Beranda</p>
    </header>

    <div class="grid grid-cols-4 gap-4 mb-6">
        <div class="bg-[#E3F2FD] p-4 rounded-xl shadow-card">
            <h2 class="text-2xl font-semibold">1.230 km</h2>
            <p class="text-sm text-textSecondary">Panjang Jalan Baru</p>
        </div>
        <div class="bg-[#E3F2FD] p-4 rounded-xl shadow-card">
            <h2 class="text-2xl font-semibold">78%</h2>
            <p class="text-sm text-textSecondary">Jembatan Baik</p>
        </div>
        <div class="bg-[#E3F2FD] p-4 rounded-xl shadow-card">
            <h2 class="text-2xl font-semibold">12.000 ha</h2>
            <p class="text-sm text-textSecondary">Luas Lahan Pertanian</p>
        </div>
        <div class="bg-[#E3F2FD] p-4 rounded-xl shadow-card">
            <h2 class="text-2xl font-semibold">540 unit</h2>
            <p class="text-sm text-textSecondary">Fasilitas Kesehatan</p>
        </div>
    </div>

    <!--SEARCH-->
   <!-- <div class="flex item-center">
        <input 
        type="text"
        placeholder="Cari fasilitas..."
        class="border border-[#BBDEFB] px-3 py-2 rounded-lg w-48 focus:outline-none focus:ring-2 focus:ring-blue-400"
        >
</div>
</div>-->

    <div class="grid grid-cols-3 gap-4">
        <div class="bg-[#E3F2FD] p-4 rounded-xl shadow-card h-64">📊 Tren Panjang Jalan</div>
        <div class="bg-[#E3F2FD] p-4 rounded-xl shadow-card h-64">🟢 Status Jembatan</div>
        <div class="bg-[#E3F2FD] p-4 rounded-xl shadow-card h-64">📈 Hasil Panen</div>
    </div>

    <div class="grid grid-cols-2 gap-4 mt-6">
        <div class="bg-[#E3F2FD] p-4 rounded-xl shadow-card h-64">📋 Daftar Proyek</div>
        <div class="bg-[#E3F2FD] p-4 rounded-xl shadow-card h-64">🗺️ Pemetaan SIG</div>
    </div>
@endsection
