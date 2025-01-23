@extends('admin.admin')
@section('content')


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Blog </title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100">

        <div class="min-h-screen flex items-center justify-center">
            <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
                <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">Update Post</h1>

                <form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf



                   <!-- Product Name Input -->
                <div class="mb-4">
                    <label for="productname" class="block text-gray-700 font-medium">Product Name:</label>
                    <input 
                        type="text" 
                        name="productname" 
                        id="productname" 
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                        placeholder="Enter product name" 
                        value="{{ $product->name }}">
                    @error('productname')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Product Description Input -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium">Product Description:</label>
                    <input 
                        type="text" 
                        name="description" 
                        id="description" 
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                        placeholder="Enter product description" 
                        value="{{ $product->description }}">
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Price Input -->
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 font-medium">Price:</label>
                    <input 
                        type="number" 
                        name="price" 
                        id="price" 
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                        placeholder="Enter product price" 
                        value="{{ $product->price }}" step="0.01">
                    @error('price')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image Upload -->
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-medium">Upload Image:</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="image" 
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div>
                    <button 
                        type="submit" 
                        class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        Submit
                    </button>
                </div>
                </form>
            </div>
        </div>

    </body>

    </html>

@endsection
