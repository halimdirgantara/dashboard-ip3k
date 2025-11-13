<aside class="bg-primary text-white w-64 min-h-screen flex flex-col p-4 space-y-6">
    {{-- Logo & Judul --}}
    <div class="flex flex-col items-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-20 mb-3">
        <h1 class="text-center text-lg font-semibold">Program IP3K</h1>
        <p class="text-xs text-gray-200">Kabupaten Sekadau</p>
    </div>

    {{-- Menu --}}
    <nav class="flex-1 space-y-2 mt-6">
        <a href="#" class="flex items-center gap-3 bg-secondary text-white rounded-lg px-4 py-2">
            <i class="fa fa-home"></i> <span>Beranda</span>
        </a>
        <a href="#" class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-database"></i> <span>Data Infrastruktur</span>
        </a>
        <a href="#" class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-leaf"></i> <span>Data Pertanian</span>
        </a>
        <a href="#" class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-hospital"></i> <span>Fasilitas Publik</span>
        </a>
        <a href="#" class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-map"></i> <span>Pemetaan SIG</span>
        </a>
        <a href="#" class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-tasks"></i> <span>Proyek Pembangunan</span>
        </a>
        <a href="#" class="flex items-center gap-3 hover:bg-secondary/80 rounded-lg px-4 py-2">
            <i class="fa fa-info-circle"></i> <span>Tentang Dashboard</span>
        </a>
    </nav>
</aside>
