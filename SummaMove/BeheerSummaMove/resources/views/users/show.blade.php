<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>User Details</title>
</head>
<body class="bg-gray-100">
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">User Details</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Name:</h2>
            <p class="text-gray-700">{{ $user->name }}</p>
        </div>
        <div class="mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Email:</h2>
            <p class="text-gray-700">{{ $user->email }}</p>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('users.index') }}"
               class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700">Return to Home</a>
        </div>
    </div>
</div>
</body>
</html>
