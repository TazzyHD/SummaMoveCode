<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Gebruikers Overzicht</title>
</head>
<body class="bg-gray-100">
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">Users Overview</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <a href="{{ route('users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mb-5 inline-block">Create new user</a>
        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 uppercase tracking-wider">ID</th>
                <th class="py-2 px-4 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 uppercase tracking-wider">Name</th>
                <th class="py-2 px-4 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 uppercase tracking-wider">Email</th>
                <th class="py-2 px-4 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 uppercase tracking-wider">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $user->id }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $user->name }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $user->email }}</td>
                    <td class="py-2 px-4 border-b border-gray-200 flex">
                        <a href="{{ route('users.show', ['user' => $user->id]) }}"
                           class="text-blue-500 hover:text-blue-700 mr-3">Show user</a>
                        <a href="{{ route('users.edit', $user) }}" class="text-green-500 hover:text-green-700 mr-3">Edit user</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Delete user</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
