<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Oficinas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-700 mb-4">Listado de Oficinas</h1>

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Nombre</th>
                    <th class="border border-gray-300 px-4 py-2">Dirección</th>
                </tr>
            </thead>
            <tbody>
                @foreach($oficinas as $oficina)
                <tr class="bg-white">
                    <td class="border border-gray-300 px-4 py-2">{{ $oficina->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $oficina->nombre }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $oficina->direccion }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if($oficinas->isEmpty())
            <p class="text-gray-500 mt-4">No hay oficinas registradas.</p>
        @endif
    </div>
</body>
</html>
