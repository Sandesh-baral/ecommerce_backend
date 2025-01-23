<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Add transition effects for smooth collapsing */
        .transition-width {
            transition: width 0.3s ease-in-out;
        }
    </style>
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-gray-800 text-white transition-width w-64 h-screen">
            <div class="p-4 flex justify-between items-center">
                <h2 class="text-lg font-semibold">Admin Panel</h2>
                <button id="toggleButton" class="text-white focus:outline-none">
                    <svg id="toggleIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <nav class="mt-6">
                <a href="{{ route('blog.index') }}" class="block px-4 py-2 hover:bg-gray-500">Blog</a>                
                {{-- <a href="{{ route('blog.index') }}" class="block px-4 py-2 hover:bg-gray-700">Blog</a> --}}
                <a href="{{ route('product.index') }}" class="block px-4 py-2 hover:bg-gray-500">Product</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <div class="bg-white shadow px-4 py-4 flex items-center justify-between">
                <h1 class="text-lg font-semibold text-gray-800">@yield('header', 'Admin Panel')</h1>
                <div>
                    <span class="text-gray-600">Welcome, Sandesh</span>
                    <a href="{{ route('logout') }}" class="ml-4 text-red-500 hover:underline">Logout</a>
                </div>
            </div>

            <!-- Main Section -->
            <main class="flex-1 p-6 overflow-y-auto">
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="bg-white shadow mt-auto px-4 py-2 text-center text-gray-600">
                © {{ date('Y') }} eCommerce. All Rights Reserved.
            </footer>
        </div>
    </div>

    <script>
        // JavaScript for toggling the sidebar
        const toggleButton = document.getElementById('toggleButton');
        const sidebar = document.getElementById('sidebar');
        const toggleIcon = document.getElementById('toggleIcon');
    
        toggleButton.addEventListener('click', () => {
            if (sidebar.classList.contains('w-64')) {
                // Collapse the sidebar
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-16');
                toggleIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9m0 0l9 9m-9-9v18" />
                `;
            } else {
                // Restore (expand) the sidebar
                sidebar.classList.remove('w-16');
                sidebar.classList.add('w-64');
                toggleIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                `;
            }
        });
    </script>
</body>

</html>
