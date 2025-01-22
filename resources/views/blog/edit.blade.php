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
                <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">Create a New Post</h1>

                <form action="{{ route('blog.update', ['id' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf



                    <!-- Title Input -->
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-medium">Title:</label>
                        <input type="text" name="title" id="title"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Title here" value="{{ $blog->title }}">
                        @error('title')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Author Selection -->
                    <div class="mb-4">
                        <label for="author_id" class="block text-gray-700 font-medium">Author:</label>
                        <select name="author_id" id="author_id"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            {{-- <option value="" disabled selected>Select Author</option> --}}
                            @foreach ($author as $item)
                                <option value="{{ $item->id }}" {{ old('author_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->designation . ' ' . $item->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('author_id')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Body Input -->
                    <div class="mb-4">
                        <label for="body" class="block text-gray-700 font-medium">Body:</label>
                        <textarea name="body" id="body" rows="5"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Your full story here...">{{ $blog->body }}</textarea>
                        @error('body')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 font-medium">Upload Image:</label>
                        <input type="file" name="image" id="image"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        @error('image')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            Post
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </body>

    </html>

@endsection
