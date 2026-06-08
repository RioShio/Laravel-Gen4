<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-sm mx-auto bg-white rounded-2xl shadow-md overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow">
        <div class="bg-indigo-500 h-32 flex items-center justify-center">
            <span class="text-5xl">💻</span>
        </div>
        <div class="p-6">
            <p class="text-sm text-indigo-500 font-bold uppercase tracking-wide">Produk Digital</p>
            <h1 class="text-xl font-bold text-gray-900 mt-1">{{ $nama_produk }}</h1>
            <p class="text-2xl font-extrabold text-gray-800 mt-4">Rp {{ number_format($harga, 0, ',', '.') }}</p>
            <button class="mt-6 w-full bg-indigo-600 text-white py-2 px-4 rounded-xl font-bold hover:bg-indigo-700 transition-colors">
                Beli Sekarang
            </button>
        </div>
    </div>
</body>
</html>