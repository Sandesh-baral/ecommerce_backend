<div class="bg-white shadow px-4 py-4 flex items-center justify-between">
    <h1 class="text-lg font-semibold text-gray-800">@yield('header', 'Admin Panel')</h1>
    <div>
        <span class="text-gray-600">Welcome, Admin</span>
        <a href="{{ route('logout') }}" class="ml-4 text-red-500 hover:underline">Logout</a>
    </div>
</div>
