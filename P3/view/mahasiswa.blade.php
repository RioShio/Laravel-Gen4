<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Mahasiswa</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-2xl shadow-lg border-l-8 border-emerald-500 p-6 w-96 flex items-center gap-4">
        <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center text-3xl">
            🎓
        </div>
        <div>
            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Kartu Mahasiswa</p>
            <h1 class="text-lg font-bold text-slate-800">{{ $nama }}</h1>
            <p class="text-sm font-medium text-slate-500">{{ $jurusan }}</p>
        </div>
    </div>
</body>
</html>