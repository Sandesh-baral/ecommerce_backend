@extends('admin.admin')

@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Author Index</title>
</head>
<body>

    <a href="{{ route('author.create') }}" class="inline-block">
        <button class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Create Category
        </button>
    </a>
    <table class="min-w-full table-auto divide-y divide-gray-200">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Designation
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                {{-- <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Slug
                </th> --}}
                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Action
                </th>
                
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($author as $item)
                <tr>
                    

                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <h2>{{$item->designation}}</h2>
                            
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">
                            {{$item->name}}
                        </div>
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">
                            <a href="{{ route('author.edit', ['id' => $item->id]) }}"><button type="submit">Edit</button></a>

                            
                        </div>
                        <div class="text-sm text-red-500">
                            {{-- <form action="{{ route('author.destroy', ['id' => $item->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this author?')">Delete</button>
                            </form> --}}
                        </div>
                    </td>
                    
                    
                    
                </tr>
            @endforeach
        </tbody>
    </table>



    
</body>
</html>


@endsection