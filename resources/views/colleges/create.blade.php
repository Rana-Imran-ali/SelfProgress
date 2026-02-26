<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add College</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white p-8 rounded shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Add College</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('colleges.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">College Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">City</label>
                <input type="text" name="city" value="{{ old('city') }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" class="w-full bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-200">Save College</button>
        </form>

        <a href="{{ route('colleges.index') }}" class="block mt-4 text-center text-blue-500 hover:underline">Back to College List</a>
    </div>
</body>
</html>