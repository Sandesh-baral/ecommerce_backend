@extends('admin.admin')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog Index</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100">
        <a href="{{ route('product.create') }}" class="inline-block">
            <button class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Create New Product
            </button>
        </a>
        

        <div class="min-h-screen flex flex-col items-center py-10">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Product List</h1>

            <div class="w-full max-w-5xl bg-white shadow-lg rounded-lg p-6">
                <table class="w-full table-auto divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($product as $item)
                            <tr>
                                <!-- Name -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ $item->name }}</div>
                                </td>
                                <!-- Description -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ $item->description }}</div>
                                </td>

                                <!-- Price -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-700">{{ $item->body }}</div>
                                </td>

                                <!-- Image -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <img src="{{ $item->image_url }}" alt="Blog Image"
                                        class="w-16 h-16 rounded-md object-cover">
                                </td>

                                <!-- Actions -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center space-x-4">
                                        <!-- Edit Button -->
                                        <a href="{{ route('product.edit', ['id' => $item->id]) }}"
                                            class="text-indigo-600 hover:text-indigo-900 font-medium">
                                            Edit
                                        </a>
                                        <!-- Delete Button -->
                                        {{-- <form action="{{ route('blog.destroy', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 font-medium">
                                            Delete
                                        </button>
                                    </form> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </body>

    </html>

    
@endsection
