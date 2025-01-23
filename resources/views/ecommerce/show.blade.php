<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $blog->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center py-10 px-4">
        <div class="max-w-4xl bg-white shadow-lg rounded-lg p-8">
            <!-- Blog Title -->
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">{{ $blog->title }}</h1>

            <!-- Author Info -->
            <div class="flex items-center justify-center mb-6">
                <div class="flex items-center space-x-3">
                    <div class="bg-gray-200 p-2 rounded-full">
                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m8-6a4 4 0 100-8 4 4 0 000 8z" />
                        </svg>
                    </div>
                    <p class="text-gray-600 font-medium text-lg">{{ $blog->author->name }}</p>
                </div>
            </div>

            <!-- Blog Image -->
            <div class="mb-6">
                <img src="{{ $blog->image_url }}" alt="Blog Image" class="w-full h-64 object-cover rounded-lg shadow-md">
            </div> 

            <!-- Blog Content -->
            <div class="prose max-w-none text-gray-700">
                <p class="leading-relaxed text-lg">{{ $blog->body }}</p>
            </div>

            <!-- Back Button -->
            <div class="mt-8 text-center">
                <a href="{{ route('ecommerce.index') }}"
                    class="inline-block px-6 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600">
                    Go Back.
                </a>
            </div>
        </div>
    </div>

</body>
</html>
