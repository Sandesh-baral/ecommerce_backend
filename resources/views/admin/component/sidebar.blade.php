<div class="w-64 bg-gray-800 text-white h-screen fixed">
    <div class="p-4">
        <h2 class="text-lg font-semibold">Admin Panel</h2>
    </div>
    <nav class="mt-6">
        <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>
        <a href="{{ route('users') }}" class="block px-4 py-2 hover:bg-gray-700">Users</a>
        <a href="{{ route('settings') }}" class="block px-4 py-2 hover:bg-gray-700">Settings</a>
    </nav>
</div>
