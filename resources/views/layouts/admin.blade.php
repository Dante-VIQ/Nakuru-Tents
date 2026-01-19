<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Nakuru Tents</title>

    <!-- Tailwind CSS -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

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

        <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'hotel-gold': '#D4AF37',
                        'hotel-navy': '#1E3A5F',
                        'hotel-cream': '#F8F4E9',
                        'hotel-brown': '#8B7355',
                    },
                    fontFamily: {
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
        @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <!-- Admin Navigation -->
    <nav class="pl-4 sm:pl-12 bg-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-[#2a6b4e] rounded-lg flex items-center justify-center">
                        <i class="fas fa-mountain-sun text-white"></i>
                    </div>
                    <div>
                        <h1 class="text-xl  font-bold text-gray-800">Nakuru Tents & Canvas</h1>
                        <p class="text-sm text-gray-500">Admin Panel</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-[#2a6b4e]" target="_blank">
                        <i class="fas fa-external-link-alt mr-1"></i> View Site
                    </a>
                    {{-- <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn-secondary">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </button>
                    </form> --}}
                </div>
            </div>
        </div>
    </nav>

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <x-nav-layout />

        <!-- Main Content -->
        <div class="flex-1 p-6 md:p-8 pl-16 md:pl-0">
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
