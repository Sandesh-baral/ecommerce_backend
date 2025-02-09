<div class="bg-white shadow px-4 py-4 flex items-center justify-between">
    <h1 class="text-lg font-semibold text-gray-800">@yield('header', 'Admin Panel')</h1>
    <div>
        <span class="text-gray-600">Welcome, Admin</span>
        
        <!-- Logout Form with Submit Button -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="ml-4 text-red-500 hover:underline bg-transparent border-0">
                Logout
            </button>
        </form>
    </div>
</div>
