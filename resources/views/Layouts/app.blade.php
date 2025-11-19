<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard IP3K</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex">
        {{-- Sidebar --}}
        <aside class="w-64 bg-blue-900 text-white min-h-screen p-4">
            <h2 class="text-lg font-bold mb-6">IP3K Dashboard</h2>
            <nav class="space-y-2">
                <a href="/" class="block py-2 px-3 rounded hover:bg-blue-700">🏠 Beranda</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">📊 Data Infrastruktur</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">🌾 Data Pertanian</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">🏥 Fasilitas Publik</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">🗺️ Pemetaan SIG</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">🏗️ Proyek Pembangunan</a>
                <a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">ℹ️ Tentang Dashboard</a>
            </nav>
        </aside>

        {{-- Konten utama --}}
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
</body>
</html>
