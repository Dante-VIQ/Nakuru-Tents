<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Nakuru Tents & Canvas</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <style>
        .gallery-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .category-btn.active {
            background-color: #2a6b4e;
            color: white;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    @include('layouts.navigation')

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#2a6b4e] via-[#3a8b6f] to-[#1e4f3a] text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Gallery</h1>
            <p class="text-xl text-gray-100 max-w-3xl mx-auto">
                Explore our work in tents, event setups, camping gear, and custom projects
            </p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <!-- Category Filter -->
            <div class="mb-8">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Browse Our Work</h2>
                        @php

                        $galleries = \App\Models\Gallery::count();
                        @endphp
                        <p class="text-gray-600">{{ $galleries }} galleries available</p>
                    </div>

                    <!-- Search -->
                    <div class="w-full md:w-64">
                        <form method="GET" action="{{ route('gallery.index') }}" class="flex">
                            <input type="text"
                                   name="search"
                                   value="{{ request('search') }}"
                                   placeholder="Search galleries..."
                                   class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent">
                            <button type="submit" class="bg-[#2a6b4e] text-white px-4 rounded-r-lg">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Category Buttons -->
                <div class="flex flex-wrap gap-2">
                    <a href="{{ route('gallery.index') }}"
                       class="category-btn px-4 py-2 rounded-full {{ !request('category') ? 'active bg-[#2a6b4e] text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                        All Galleries
                    </a>
                    @php
                        $categories = \App\Models\Gallery::select('category')->distinct()->pluck('category', 'category')->toArray();
                    @endphp
                    @foreach($categories as $key => $label)
                        <a href="{{ route('gallery.index', ['category' => $key]) }}"
                           class="category-btn px-4 py-2 rounded-full {{ request('category') == $key ? 'active bg-[#2a6b4e] text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Galleries Grid -->
<livewire:show-blog />
        </div>
    </section>

    <!-- Gallery Show Page (for individual gallery) -->
    <!-- We'll create a separate view for this -->

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-[#2a6b4e] rounded-lg flex items-center justify-center">
                            <i class="fas fa-mountain-sun"></i>
                        </div>
                        <span class="text-xl font-bold">Nakuru Tents & Canvas</span>
                    </div>
                    <p class="text-gray-400 mt-2">Premium outdoor solutions since 2010</p>
                </div>

                <div class="flex space-x-6">
                    <a href="{{ route('dashboard') }}" class="text-gray-400 hover:text-white">Home</a>
                    <a href="{{ route('gallery.index') }}" class="text-white">Gallery</a>
                    <a href="{{ route('products.index') }}" class="text-gray-400 hover:text-white">Products</a>
                    <a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact</a>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>© {{ date('Y') }} Nakuru Tents & Canvas. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <script>
        // Initialize lightbox
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'showImageNumberLabel': true,
            'albumLabel': 'Image %1 of %2'
        });

        // Category button active state
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const category = urlParams.get('category');

            document.querySelectorAll('.category-btn').forEach(btn => {
                if (btn.getAttribute('href').includes(`category=${category}`) && category) {
                    btn.classList.add('active', 'bg-[#2a6b4e]', 'text-white');
                    btn.classList.remove('bg-gray-100', 'text-gray-700');
                }
            });
        });
    </script>
</body>
</html>
