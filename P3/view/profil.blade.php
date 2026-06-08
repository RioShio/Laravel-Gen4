<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-96 text-center border border-gray-200">
        <div class="w-24 h-24 bg-blue-500 text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-4 shadow-md">
            {{ substr($nama, 0, 1) }}
        </div>
        <h1 class="text-2xl font-bold text-gray-800">{{ $nama }}</h1>
        <span class="inline-block bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-semibold mt-2">
            Kelas: {{ $kelas }}
        </span>
    </div>
</body>
</html>