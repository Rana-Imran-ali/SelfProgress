<!DOCTYPE html>
<html>
<head>
    <title>Colleges List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6 min-h-screen">
<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow-lg">
    <h1 class="text-2xl font-bold mb-4 text-center">Colleges</h1>
    <a href="{{ route('colleges.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Add College</a>

    @if(session('success'))
        <p class="text-green-600 mt-2 text-center">{{ session('success') }}</p>
    @endif

    <table class="min-w-full mt-4 border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Email</th>
                <th class="px-4 py-2 border">Email</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colleges as $college)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2 border">{{ $college->id }}</td>
                <td class="px-4 py-2 border">{{ $college->name }}</td>
                <td class="px-4 py-2 border">{{ $college->city }}</td>
                <td class="px-4 py-2 border">{{ $college->email }}</td>
                <td class="px-4 py-2 border space-x-2">
                    <a href="{{ route('colleges.edit', $college->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Edit</a>
                    <form action="{{ route('colleges.destroy', $college->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>