<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Exercise</title>
</head>
<body class="bg-gray-100">
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">Edit Exercise</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('exercises.update', ['exercise' => $exercise->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title:</label>
                <input type="text" name="title" id="title" value="{{ $exercise->title }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="instruction" class="block text-gray-700">Instruction:</label>
                <textarea name="instruction" id="instruction"
                          class="w-full px-3 py-2 border border-gray-300 rounded-md">{{ $exercise->instruction }}</textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Save
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
