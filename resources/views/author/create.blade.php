<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Category</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <h1>Create Author!!</h1>


        <div class="--tw-bg-opacity: 1;
background-color: rgba(55, 65, 81, var(--tw-bg-opacity))">

            <form action="{{route('author.store')}}" method="post">
                @csrf
                @method('PUT')

                <div>
                    <label for="designation">Designation:</label>
                    <input type="text" name="designation" placeholder="Designation" value="{{$author->designation}}">
                    @error('designation')
                        <small class ="text-danger">{{$message}} </small>
                        
                    @enderror
                </div>
                <div>
                    <label for="name">Authors Name:</label>
                    <input type="text" name="name" placeholder=" Name here..." value="{{$author->name}}" >
                    @error('name')
                        <small class ="text-danger">{{$message}} </small>
                        
                    @enderror
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" >Submit</button>
                


            </form>
        </div>
    </div>
    
</body>
</html>