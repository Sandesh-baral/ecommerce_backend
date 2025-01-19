<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Category</title>
    @vite('resources/css/app.css') <!-- Ensure Vite is configured -->
</head>
<body>
    <div>
        <h1>Create Category</h1>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md text-white">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                @method('PUT')

                <!-- Category Name -->
                <div class="mb-4">
                    <label for="name" class="block mb-2">Category Name:</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="w-full p-2 rounded border border-gray-300" 
                        placeholder="Category Name here..." 
                        value="{{$category->name}}" 
                    >
                    @error('name')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label for="description" class="block mb-2">Description:</label>
                    <input 
                        type="text" 
                        id="description" 
                        name="description" 
                        class="w-full p-2 rounded border border-gray-300" 
                        placeholder="Description here..." 
                        value="{{$category->body}}" 
                    >
                    @error('description')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
                    Update
                </button>
            </form>
        </div>
    </div>
</body>
</html>
