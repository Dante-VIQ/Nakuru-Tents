<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Adventure Canvas Co.</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        :root {
            --primary: #2a6b4e;
            --secondary: #e6b325;
        }
        
        .btn-primary {
            @apply bg-[#2a6b4e] text-white px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:bg-[#3a8b6f];
        }
        
        .btn-secondary {
            @apply bg-gray-200 text-gray-800 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:bg-gray-300;
        }
        
        .btn-danger {
            @apply bg-red-600 text-white px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:bg-red-700;
        }
        
        .sidebar-link {
            @apply flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition;
        }
        
        .sidebar-link.active {
            @apply bg-[#2a6b4e] text-white hover:bg-[#3a8b6f];
        }
        
        .table-header {
            @apply px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider;
        }
        
        .table-cell {
            @apply px-6 py-4 whitespace-nowrap text-sm text-gray-900;
        }
        
        .form-input {
            @apply mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-[#2a6b4e] focus:ring focus:ring-[#2a6b4e] focus:ring-opacity-50;
        }
        
        .form-label {
            @apply block text-sm font-medium text-gray-700;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Admin Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-[#2a6b4e] rounded-lg flex items-center justify-center">
                        <i class="fas fa-mountain-sun text-white"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-800">Adventure Canvas Co.</h1>
                        <p class="text-sm text-gray-500">Admin Panel</p>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-[#2a6b4e]" target="_blank">
                        <i class="fas fa-external-link-alt mr-1"></i> View Site
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn-secondary">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg h-screen sticky top-0">
            <div class="p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-6">Navigation</h2>
                
                <div class="space-y-2">
                    <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                    
                    <a href="{{ route('products.index') }}" class="sidebar-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                        <i class="fas fa-campground"></i>
                        <span>Products</span>
                    </a>
                    
                    <a href="{{ route('admin.gallery') }}" class="sidebar-link">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Orders</span>
                    </a>
                    
                    <a href="{{ route('admin.bookings') }}" class="sidebar-link">
                        <i class="fas fa-users"></i>
                        <span>Bookings</span>
                    </a>
                    
                    {{-- <a href="{{ route('admin.inquiries.index') }}" class="sidebar-link">
                        <i class="fas fa-envelope"></i>
                        <span>Inquiries</span>
                    </a>
                    
                    <a href="{{ route('admin.settings') }}" class="sidebar-link">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a> --}}
                </div>
                
                <div class="mt-8 pt-8 border-t border-gray-200">
                    <h3 class="text-sm font-bold text-gray-500 uppercase mb-4">Quick Stats</h3>
                    <div class="space-y-3">
                        <div>
                            <p class="text-sm text-gray-600">Total Products</p>
                            <p class="text-lg font-bold text-[#2a6b4e]">{{ \App\Models\Product::count() }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Active Products</p>
                            <p class="text-lg font-bold text-[#2a6b4e]">{{ \App\Models\Product::where('is_active', true)->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 p-8">
            @if(session('success'))
                <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-3 text-green-600"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif
            
            @if(session('error'))
                <div class="mb-6 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-circle mr-3 text-red-600"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                </div>
            @endif
            
           {{ $slot }}
        </div>
    </div>
    
    @livewireScripts
    @stack('scripts')
</body>
</html>