<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Oefeningen Overzicht</title>
</head>
<body class="bg-gray-100">
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">Oefeningen Overzicht</h1>
    <div class="flex justify-end mb-4">
        <a href="{{ route('oefeningen.create') }}"
           class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-700">Nieuwe Oefening Toevoegen</a>
    </div>
    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 uppercase tracking-wider">
                    ID
                </th>
                <th class="py-2 px-4 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 uppercase tracking-wider">
                    Titel
                </th>
                <th class="py-2 px-4 border-b border-gray-200 text-left text-sm leading-4 text-gray-600 uppercase tracking-wider">
                    Acties
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($oefeningen as $oefening)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $oefening->id }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">{{ $oefening->titel }}</td>
                    <td class="py-2 px-4 border-b border-gray-200">
                        <a href="{{ route('oefeningen.show', ['id' => $oefening->id]) }}"
                           class="text-blue-500 hover:text-blue-700">Bekijken</a>
                        <a href="{{ route('oefeningen.edit', ['id' => $oefening->id]) }}"
                           class="text-green-500 hover:text-green-700 ml-2">Bewerken</a>
                        <form action="{{ route('oefeningen.destroy', ['id' => $oefening->id]) }}" method="POST"
                              class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Verwijderen</button>
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
