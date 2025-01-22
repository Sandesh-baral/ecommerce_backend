<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('admin.components.sidebar')

        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            @include('admin.components.navbar')

            <!-- Main Content -->
            <main class="flex-1 p-6 overflow-y-auto">
                @yield('content')
            </main>

            <!-- Footer -->
            @include('admin.components.footer')
        </div>
    </div>

</body>

</html>
