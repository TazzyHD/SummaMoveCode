<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Oefening Details</title>
</head>
<body class="bg-gray-100">
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">Oefening Details</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Titel:</h2>
            <p class="text-gray-700">{{ $oefening->titel }}</p>
        </div>
        <div class="mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Instructie:</h2>
            <p class="text-gray-700">{{ $oefening->instructie }}</p>
        </div>
        <div class="mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Engelse Instructie:</h2>
            <p class="text-gray-700">{{ $oefening->engelse_instructie }}</p>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('oefeningen.index') }}"
               class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Terug naar overzicht</a>
        </div>
    </div>
</div>
</body>
</html>
