<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">
            Create New Post
        </h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-600 mb-1">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    placeholder="Enter Title"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                >
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-gray-600 mb-1">Description</label>
                <textarea 
                    name="description" 
                    rows="4"
                    placeholder="Enter Description"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                ></textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300"
            >
                Save Post
            </button>
        </form>

    </div>

</body>
</html>