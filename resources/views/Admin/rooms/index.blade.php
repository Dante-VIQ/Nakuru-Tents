<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Nakuru Tents & Canvas</title>
    <meta name="description" content="Premium tents, canvas products, and outdoor accessories">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #2a6b4e;
            --secondary: #e6b325;
            --accent: #3a8b6f;
        }

        .btn-primary {
            @apply bg-[#2a6b4e] text-white px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:bg-[#3a8b6f];
        }

        .btn-outline {
            @apply border border-[#2a6b4e] text-[#2a6b4e] px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:bg-[#2a6b4e] hover:text-white;
        }

        .product-card {
            @apply transition-all duration-300 hover:shadow-xl hover:-translate-y-1;
        }

        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @livewireStyles < !-- Scripts -->@vite(['resources/css/app.css', 'resources/js/app.js'])
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <!-- Header -->
    @include('layouts.navigation')

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#2a6b4e] via-[#3a8b6f] to-[#1e4f3a] text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Products</h1>
            <p class="text-xl text-gray-100 max-w-3xl mx-auto">
                Discover our collection of premium tents, canvas products, and outdoor accessories
            </p>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <!-- Categories Filter -->
            <div class="mb-8">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Browse Our Collection</h2>
                        {{-- <p class="text-gray-600">{{ $products->total() }} products available</p> --}}
                    </div>

                    <!-- Search and Sort -->
                    <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                        <div class="relative w-full md:w-64">
                            <form method="GET" action="{{ route('products.index') }}" class="flex">
                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Search products..."
                                    class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent">
                                <button type="submit" class="bg-[#2a6b4e] text-white px-4 rounded-r-lg">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>

                        <select onchange="window.location.href = this.value"
                            class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent">
                            <option value="{{ route('products.index') }}" {{ !request('sort') ? 'selected' : '' }}>Sort
                                by</option>
                            <option value="{{ route('products.index', ['sort' => 'price_low']) }}"
                                {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                            <option value="{{ route('products.index', ['sort' => 'price_high']) }}"
                                {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                            <option value="{{ route('products.index', ['sort' => 'newest']) }}"
                                {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest First</option>
                        </select>
                    </div>
                </div>

                <!-- Category Filters -->
                <div class="flex overflow-x-auto gap-2 pb-4">
                    <a href="{{ route('products.index') }}"
                        class="inline-flex items-center px-4 py-2 rounded-full {{ !request('type') ? 'bg-[#2a6b4e] text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                        All Products
                    </a>
                    @foreach (['tent' => 'Tents', 'canvas' => 'Canvas Products', 'accessory' => 'Accessories', 'service' => 'Services'] as $type => $label)
                        <a href="{{ route('products.index', ['type' => $type]) }}"
                            class="inline-flex items-center px-4 py-2 rounded-full {{ request('type') == $type ? 'bg-[#2a6b4e] text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Products Grid -->
            <livewire:room-card />
        </div>
    </section>

    <!-- Why Choose Us (Simple) -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Quality & Reliability</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Every product is built to withstand the elements</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Premium Materials</h3>
                    <p class="text-gray-600">Only the highest quality materials are used in our products.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">1-Year Warranty</h3>
                    <p class="text-gray-600">All products come with a comprehensive warranty.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shipping-fast text-white text-xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Free Shipping</h3>
                    <p class="text-gray-600">Free shipping on all orders over Ksh 50,000.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Footer --> --}}
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
                    <a href="{{ route('products.index') }}" class="text-white">Products</a>
                    <a href="{{ route('services') }}" class="text-gray-400 hover:text-white">Services</a>
                    <a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact</a>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>© {{ date('Y') }} Nakuru Tents & Canvas. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Toast Notification -->
    <div id="toast"
        class="fixed bottom-4 right-4 bg-[#2a6b4e] text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-full transition-transform duration-300 z-50 hidden">
        <div class="flex items-center">
            <i class="fas fa-check-circle mr-3"></i>
            <span id="toastMessage"></span>
        </div>
    </div>

    @livewireScripts
    <script>
        // Toast Notification Function
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toastMessage');

            toastMessage.textContent = message;
            toast.classList.remove('hidden', 'translate-y-full');
            toast.classList.add('flex');

            setTimeout(() => {
                toast.classList.add('translate-y-full');
                setTimeout(() => {
                    toast.classList.add('hidden');
                    toast.classList.remove('flex');
                }, 300);
            }, 3000);
        }

        // Add to Cart Animation
        document.addEventListener('DOMContentLoaded', function() {
            const addToCartButtons = document.querySelectorAll('form[action*="cart.add"] button[type="submit"]');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Add animation class
                    this.classList.add('opacity-50');
                    this.innerHTML = '<i class="fas fa-spinner fa-spin mr-1"></i> Adding...';

                    // Submit the form after a short delay to show animation
                    setTimeout(() => {
                        this.closest('form').submit();
                    }, 500);
                });
            });
        });

        // Image lazy loading
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('img');
            const config = {
                rootMargin: '50px 0px',
                threshold: 0.01
            };

            let observer = new IntersectionObserver((entries, self) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        preloadImage(entry.target);
                        self.unobserve(entry.target);
                    }
                });
            }, config);

            images.forEach(image => {
                observer.observe(image);
            });
        });

        function preloadImage(img) {
            const src = img.getAttribute('data-src');
            if (!src) return;
            img.src = src;
        }
    </script>
</body>

</html>
