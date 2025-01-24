<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slider Creator</title>
    <!-- Add Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <form action="{{ route('slider.store') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-lg">
        <h1 class="text-2xl font-bold mb-4 text-center">Create a Slider</h1>
        
        {{-- <!-- Slider Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Slider Name:</label>
            <input 
                type="text" 
                name="name" 
                placeholder="Slider name" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            >
        </div> --}}

        <!-- Select Items -->
        <fieldset class="mb-4">
            <legend class="text-gray-700 text-sm font-bold mb-2">Select items to add to Slider:</legend>
            <div class="space-y-2">
                @foreach ($products as $item)
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            name="list[]" 
                            id="{{ $item->id }}" 
                            value="{{ $item->id }}" 
                            class="mr-2 leading-tight"
                        >
                        <label for="{{ $item->id }}" class="text-gray-700">{{ $item->name }}</label>
                    </div>
                @endforeach
            </div>
        </fieldset>

        <!-- Submit Button -->
        <div class="flex items-center justify-center">
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            >
                Create Slider
            </button>
        </div>
    </form>
</body>
</html>
