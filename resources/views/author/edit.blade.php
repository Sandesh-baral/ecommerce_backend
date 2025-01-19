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
        <h1>Update Author!!</h1>


        <div class="--tw-bg-opacity: 1;
background-color: rgba(55, 65, 81, var(--tw-bg-opacity))">

<form action="{{ route('author.update', $author->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Author's Name:</label>
        <input type="text" name="name" value="{{ $author->name }}">
    </div>

    <div>
        <label for="designation">Designation:</label>
        <input type="text" name="designation" value="{{ $author->designation }}">
    </div>

    <button type="submit">Update</button>
</form>
        </div>
    </div>
    
</body>
</html>