<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Nieuwe Oefening Toevoegen</title>
</head>
<body class="bg-gray-100">
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">Nieuwe Oefening Toevoegen</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('oefeningen.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="titel" class="block text-gray-700">Titel:</label>
                <input type="text" name="titel" id="titel" class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="instructie" class="block text-gray-700">Instructie:</label>
                <textarea name="instructie" id="instructie"
                          class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
            </div>
            <div class="mb-4">
                <label for="engelse_instructie" class="block text-gray-700">Engelse Instructie:</label>
                <textarea name="engelse_instructie" id="engelse_instructie"
                          class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Opslaan
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
