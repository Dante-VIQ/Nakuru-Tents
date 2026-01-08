<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor Gear & Products - Adventure Canvas Co.</title>
    <meta name="description" content="Premium tents, hiking gear, backpacks, and outdoor equipment for sale and rental.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles -->
    <style>
        :root {
            --primary: #2a6b4e;
            --secondary: #e6b325;
            --accent: #3a8b6f;
        }
        
        .btn-primary {
            @apply bg-[#2a6b4e] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:bg-[#3a8b6f] hover:shadow-lg;
        }
        
        .btn-secondary {
            @apply bg-[#e6b325] text-gray-800 px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:bg-[#f0c040] hover:shadow-lg;
        }
        
        .btn-outline {
            @apply border-2 border-[#2a6b4e] text-[#2a6b4e] px-6 py-2 rounded-lg font-semibold transition-all duration-300 hover:bg-[#2a6b4e] hover:text-white;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }
        
        .slide-in {
            animation: slideIn 0.5s ease-out forwards;
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        .bounce-animation {
            animation: bounce 0.5s ease infinite;
        }
        
        /* Product Card Hover Effects */
        .product-card {
            @apply transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl;
        }
        
        .product-image {
            @apply transition-all duration-500 hover:scale-105;
        }
        
        /* Filter Transition */
        .filter-transition {
            @apply transition-all duration-300 ease-in-out;
        }
        
        /* Cart Animation */
        .cart-badge {
            @apply transition-all duration-300;
        }
        
        .cart-badge.pulse {
            animation: pulse 0.5s ease;
        }
        
        /* Loading Skeleton */
        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }
        
        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
        
        /* Custom Scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #2a6b4e;
            border-radius: 10px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #3a8b6f;
        }
        
        /* Hide scrollbar but keep functionality */
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        
        /* Smooth transitions */
        * {
            scroll-behavior: smooth;
        }
        
        /* Product Quick View Animation */
        .quick-view-enter {
            animation: slideIn 0.3s ease-out;
        }
        
        /* Price Tag Animation */
        .price-tag {
            @apply transition-all duration-300;
        }
        
        .price-tag:hover {
            transform: scale(1.1);
        }
        
        /* Wishlist Heart Animation */
        .wishlist-heart {
            @apply transition-all duration-300;
        }
        
        .wishlist-heart.active {
            animation: bounce 0.5s ease;
            color: #ef4444;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
@include('layouts.navigation')


    <!-- Hero Section -->
    <section class="relative py-20 md:py-28 overflow-hidden bg-gradient-to-br from-[#2a6b4e] via-[#3a8b6f] to-[#1e4f3a] text-white">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070'); background-size: cover; background-position: center;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Premium Outdoor Gear
                </h1>
                <p class="text-xl mb-8 text-gray-100 max-w-3xl mx-auto">
                    Discover our collection of high-quality tents, hiking equipment, and outdoor essentials. Available for purchase or rental.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#featured-products" class="btn-secondary pulse-animation">
                        <i class="fas fa-fire mr-2"></i> Shop Featured
                    </a>
                    <a href="#rental-gear" class="bg-white text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                        <i class="fas fa-sync-alt mr-2"></i> View Rentals
                    </a>
                    <button onclick="scrollToCategories()" class="btn-outline border-white text-white hover:bg-white hover:text-[#2a6b4e]">
                        <i class="fas fa-filter mr-2"></i> Browse Categories
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Animated Elements -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 bounce-animation">
            <i class="fas fa-chevron-down text-2xl text-white opacity-70"></i>
        </div>
    </section>

    <!-- Quick Stats -->
    <section class="py-8 bg-white shadow-sm">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center slide-in" style="animation-delay: 0.1s">
                    <div class="text-3xl font-bold text-[#2a6b4e] mb-2">200+</div>
                    <div class="text-gray-600 text-sm">Products Available</div>
                </div>
                <div class="text-center slide-in" style="animation-delay: 0.2s">
                    <div class="text-3xl font-bold text-[#2a6b4e] mb-2">24/7</div>
                    <div class="text-gray-600 text-sm">Customer Support</div>
                </div>
                <div class="text-center slide-in" style="animation-delay: 0.3s">
                    <div class="text-3xl font-bold text-[#2a6b4e] mb-2">✓ 100%</div>
                    <div class="text-gray-600 text-sm">Quality Guarantee</div>
                </div>
                <div class="text-center slide-in" style="animation-delay: 0.4s">
                    <div class="text-3xl font-bold text-[#2a6b4e] mb-2">Free</div>
                    <div class="text-gray-600 text-sm">Shipping Over $100</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Filter -->
    <section id="categories" class="py-8 bg-gray-50 sticky top-20 z-40 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Browse Categories</h2>
                <div class="flex items-center space-x-4">
                    <button id="filterToggle" class="md:hidden text-gray-600 hover:text-[#2a6b4e]">
                        <i class="fas fa-filter mr-2"></i> Filters
                    </button>
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Search products..." 
                               class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent w-full md:w-64">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                </div>
            </div>
            
            <!-- Categories -->
            <div id="categoriesContainer" class="flex overflow-x-auto space-x-4 pb-4 hide-scrollbar">
                <button class="category-btn flex-shrink-0 px-4 py-2 bg-[#2a6b4e] text-white rounded-lg font-medium filter-transition active" data-category="all">
                    <i class="fas fa-th-large mr-2"></i> All Products
                </button>
                <button class="category-btn flex-shrink-0 px-4 py-2 bg-white text-gray-700 rounded-lg font-medium border border-gray-200 hover:border-[#2a6b4e] hover:text-[#2a6b4e] filter-transition" data-category="tents">
                    <i class="fas fa-campground mr-2"></i> Tents
                </button>
                <button class="category-btn flex-shrink-0 px-4 py-2 bg-white text-gray-700 rounded-lg font-medium border border-gray-200 hover:border-[#2a6b4e] hover:text-[#2a6b4e] filter-transition" data-category="backpacks">
                    <i class="fas fa-hiking mr-2"></i> Backpacks
                </button>
                <button class="category-btn flex-shrink-0 px-4 py-2 bg-white text-gray-700 rounded-lg font-medium border border-gray-200 hover:border-[#2a6b4e] hover:text-[#2a6b4e] filter-transition" data-category="sleeping">
                    <i class="fas fa-bed mr-2"></i> Sleeping Gear
                </button>
                <button class="category-btn flex-shrink-0 px-4 py-2 bg-white text-gray-700 rounded-lg font-medium border border-gray-200 hover:border-[#2a6b4e] hover:text-[#2a6b4e] filter-transition" data-category="cooking">
                    <i class="fas fa-fire mr-2"></i> Cooking
                </button>
                <button class="category-btn flex-shrink-0 px-4 py-2 bg-white text-gray-700 rounded-lg font-medium border border-gray-200 hover:border-[#2a6b4e] hover:text-[#2a6b4e] filter-transition" data-category="accessories">
                    <i class="fas fa-compass mr-2"></i> Accessories
                </button>
                <button class="category-btn flex-shrink-0 px-4 py-2 bg-white text-gray-700 rounded-lg font-medium border border-gray-200 hover:border-[#2a6b4e] hover:text-[#2a6b4e] filter-transition" data-category="rental">
                    <i class="fas fa-sync-alt mr-2"></i> Rentals
                </button>
            </div>
            
            <!-- Advanced Filters (Mobile) -->
            <div id="mobileFilters" class="mt-4 p-4 bg-white rounded-lg shadow-md hidden">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 mb-2 text-sm">Price Range</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm">
                            <option>All Prices</option>
                            <option>Under $50</option>
                            <option>$50 - $150</option>
                            <option>$150 - $300</option>
                            <option>Over $300</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2 text-sm">Availability</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm">
                            <option>All Items</option>
                            <option>In Stock</option>
                            <option>For Rent</option>
                        </select>
                    </div>
                </div>
                <button class="w-full mt-4 btn-primary py-2">Apply Filters</button>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <!-- Featured Products -->
            <div id="featured-products" class="mb-16 fade-in">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Featured Products</h2>
                        <p class="text-gray-600">Our most popular outdoor gear</p>
                    </div>
                    <a href="#all-products" class="text-[#2a6b4e] font-semibold hover:underline hidden md:block">
                        View All <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6" id="featuredProductsGrid">
                    <!-- Product cards will be dynamically loaded here -->
                </div>
            </div>
            
            <!-- All Products -->
            <div id="all-products" class="fade-in" style="animation-delay: 0.2s">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">All Products</h2>
                        <p class="text-gray-600">Browse our complete collection</p>
                    </div>
                    <div class="hidden md:flex items-center space-x-4">
                        <span class="text-gray-600">Sort by:</span>
                        <select id="sortSelect" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent">
                            <option value="featured">Featured</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="name">Name A-Z</option>
                            <option value="newest">Newest First</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6" id="productsGrid">
                    <!-- Product cards will be dynamically loaded here -->
                </div>
                
                <!-- Loading Skeleton -->
                <div id="loadingSkeleton" class="hidden grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="skeleton h-96 rounded-xl"></div>
                    <div class="skeleton h-96 rounded-xl"></div>
                    <div class="skeleton h-96 rounded-xl"></div>
                    <div class="skeleton h-96 rounded-xl"></div>
                </div>
                
                <!-- Load More Button -->
                <div class="text-center mt-12">
                    <button id="loadMoreBtn" class="btn-outline px-8 py-3">
                        <span>Load More Products</span>
                        <i class="fas fa-spinner fa-spin ml-2 hidden"></i>
                    </button>
                    <p id="productCount" class="text-gray-600 mt-4"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Rental Gear Section -->
    <section id="rental-gear" class="py-16 bg-gradient-to-r from-gray-50 to-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#e6b325] text-gray-800 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-sync-alt mr-2"></i> Rental Options
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Gear Rental Packages</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Perfect for occasional adventurers or trying before buying</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Rental Package 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:border-[#2a6b4e] transition-all duration-300 product-card">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" alt="Weekend Camping Package" class="w-full h-48 object-cover product-image">
                        <span class="absolute top-4 left-4 bg-[#2a6b4e] text-white px-3 py-1 rounded-full text-sm font-bold">
                            Most Popular
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Weekend Warrior Package</h3>
                        <p class="text-gray-600 mb-4">Everything you need for a 3-day camping trip</p>
                        
                        <div class="flex items-center mb-4">
                            <div class="text-3xl font-bold text-[#2a6b4e]">$89</div>
                            <div class="ml-2 text-gray-500">/weekend</div>
                        </div>
                        
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>4-person tent</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>2 sleeping bags</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Camp stove & cookware</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>2 headlamps</span>
                            </li>
                        </ul>
                        
                        <div class="flex space-x-3">
                            <button onclick="addToCart('weekend-rental')" class="btn-primary flex-1">
                                <i class="fas fa-cart-plus mr-2"></i> Rent Now
                            </button>
                            <button onclick="quickView('weekend-rental')" class="btn-outline px-4">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Rental Package 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:border-[#2a6b4e] transition-all duration-300 product-card">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" alt="Hiking Essentials Package" class="w-full h-48 object-cover product-image">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Hiking Essentials Package</h3>
                        <p class="text-gray-600 mb-4">Day hike essentials for outdoor adventures</p>
                        
                        <div class="flex items-center mb-4">
                            <div class="text-3xl font-bold text-[#2a6b4e]">$45</div>
                            <div class="ml-2 text-gray-500">/day</div>
                        </div>
                        
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>35L hiking backpack</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Trekking poles (pair)</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Hydration bladder</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>First aid kit</span>
                            </li>
                        </ul>
                        
                        <div class="flex space-x-3">
                            <button onclick="addToCart('hiking-rental')" class="btn-primary flex-1">
                                <i class="fas fa-cart-plus mr-2"></i> Rent Now
                            </button>
                            <button onclick="quickView('hiking-rental')" class="btn-outline px-4">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Rental Package 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:border-[#2a6b4e] transition-all duration-300 product-card">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" alt="Family Camping Package" class="w-full h-48 object-cover product-image">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Family Camping Package</h3>
                        <p class="text-gray-600 mb-4">Complete setup for family outdoor trips</p>
                        
                        <div class="flex items-center mb-4">
                            <div class="text-3xl font-bold text-[#2a6b4e]">$149</div>
                            <div class="ml-2 text-gray-500">/weekend</div>
                        </div>
                        
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>6-person family tent</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>4 sleeping bags & pads</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Complete kitchen setup</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>4 camp chairs</span>
                            </li>
                        </ul>
                        
                        <div class="flex space-x-3">
                            <button onclick="addToCart('family-rental')" class="btn-primary flex-1">
                                <i class="fas fa-cart-plus mr-2"></i> Rent Now
                            </button>
                            <button onclick="quickView('family-rental')" class="btn-outline px-4">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="services.html#gear-rentals" class="btn-outline px-8">
                    <i class="fas fa-calendar-alt mr-2"></i> View All Rental Options
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Why Choose Our Gear?</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Quality, durability, and expert support</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center slide-in" style="animation-delay: 0.1s">
                    <div class="w-20 h-20 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-award text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Premium Quality</h3>
                    <p class="text-gray-600">All products are tested for durability and performance in real outdoor conditions.</p>
                </div>
                
                <div class="text-center slide-in" style="animation-delay: 0.2s">
                    <div class="w-20 h-20 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">1-Year Warranty</h3>
                    <p class="text-gray-600">All purchases come with a comprehensive warranty and satisfaction guarantee.</p>
                </div>
                
                <div class="text-center slide-in" style="animation-delay: 0.3s">
                    <div class="w-20 h-20 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-headset text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Expert Advice</h3>
                    <p class="text-gray-600">Our outdoor experts are available to help you choose the right gear for your needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick View Modal -->
    <div id="quickViewModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto quick-view-enter">
            <div class="p-6">
                <div class="flex justify-between items-start mb-6">
                    <h3 class="text-2xl font-bold text-gray-800" id="modalProductName">Product Name</h3>
                    <button onclick="closeQuickView()" class="text-gray-500 hover:text-gray-700 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <img id="modalProductImage" src="" alt="" class="w-full h-auto rounded-lg">
                        <div class="grid grid-cols-4 gap-2 mt-4">
                            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&auto=format&fit=crop&w=200" alt="Product image 1" class="cursor-pointer border-2 border-transparent hover:border-[#2a6b4e] rounded">
                            <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=200" alt="Product image 2" class="cursor-pointer border-2 border-transparent hover:border-[#2a6b4e] rounded">
                            <img src="https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-4.0.3&auto=format&fit=crop&w=200" alt="Product image 3" class="cursor-pointer border-2 border-transparent hover:border-[#2a6b4e] rounded">
                            <img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&auto=format&fit=crop&w=200" alt="Product image 4" class="cursor-pointer border-2 border-transparent hover:border-[#2a6b4e] rounded">
                        </div>
                    </div>
                    
                    <div>
                        <div class="mb-6">
                            <div class="flex items-center mb-4">
                                <div class="text-3xl font-bold text-[#2a6b4e]" id="modalProductPrice">$0.00</div>
                                <span class="ml-2 text-gray-500" id="modalProductType"></span>
                            </div>
                            
                            <div class="flex items-center mb-6">
                                <div class="flex text-yellow-400 mr-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-gray-600" id="modalProductReviews">(24 reviews)</span>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="font-bold text-gray-800 mb-2">Description</h4>
                            <p class="text-gray-600" id="modalProductDescription">Product description will appear here.</p>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="font-bold text-gray-800 mb-2">Features</h4>
                            <ul class="space-y-2" id="modalProductFeatures">
                                <!-- Features will be dynamically added -->
                            </ul>
                        </div>
                        
                        <div class="flex items-center mb-6">
                            <div class="mr-4">
                                <span class="text-gray-700 font-medium">Quantity:</span>
                            </div>
                            <div class="flex items-center border border-gray-300 rounded-lg">
                                <button onclick="decreaseQuantity()" class="px-3 py-2 text-gray-600 hover:text-[#2a6b4e]">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input type="number" id="quantityInput" value="1" min="1" max="10" class="w-16 text-center py-2 border-x border-gray-300">
                                <button onclick="increaseQuantity()" class="px-3 py-2 text-gray-600 hover:text-[#2a6b4e]">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="ml-4">
                                <span id="stockStatus" class="text-green-600 font-medium">
                                    <i class="fas fa-check-circle mr-1"></i> In Stock
                                </span>
                            </div>
                        </div>
                        
                        <div class="flex space-x-4">
                            <button onclick="addToCartFromModal()" class="btn-primary flex-1">
                                <i class="fas fa-cart-plus mr-2"></i> Add to Cart
                            </button>
                            <button id="wishlistBtn" class="btn-outline px-4">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        
                        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-shipping-fast text-[#2a6b4e] mr-2"></i>
                                <span>Free shipping on orders over $100</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-600 mt-2">
                                <i class="fas fa-undo text-[#2a6b4e] mr-2"></i>
                                <span>30-day return policy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shopping Cart Sidebar -->
    <div id="cartSidebar" class="fixed inset-y-0 right-0 w-full md:w-96 bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300">
        <div class="h-full flex flex-col">
            <div class="p-6 border-b">
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-bold text-gray-800">Your Cart</h3>
                    <button onclick="closeCart()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>
                <p id="cartSummary" class="text-gray-600 mt-2">3 items • $327.00</p>
            </div>
            
            <div class="flex-1 overflow-y-auto p-6 custom-scrollbar">
                <!-- Cart items will be dynamically added here -->
                <div class="space-y-4" id="cartItems">
                    <!-- Cart items go here -->
                </div>
                
                <div id="emptyCart" class="text-center py-12">
                    <i class="fas fa-shopping-cart text-4xl text-gray-300 mb-4"></i>
                    <p class="text-gray-500">Your cart is empty</p>
                    <a href="#featured-products" onclick="closeCart()" class="inline-block mt-4 btn-outline">
                        Start Shopping
                    </a>
                </div>
            </div>
            
            <div class="p-6 border-t bg-gray-50">
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-gray-700">
                        <span>Subtotal</span>
                        <span id="cartSubtotal">$327.00</span>
                    </div>
                    <div class="flex justify-between text-gray-700">
                        <span>Shipping</span>
                        <span id="cartShipping">$0.00</span>
                    </div>
                    <div class="flex justify-between text-gray-700">
                        <span>Tax</span>
                        <span id="cartTax">$26.16</span>
                    </div>
                    <div class="flex justify-between text-xl font-bold text-gray-800 pt-3 border-t">
                        <span>Total</span>
                        <span id="cartTotal">$353.16</span>
                    </div>
                </div>
                
                <button onclick="checkout()" class="btn-primary w-full mb-4">
                    <i class="fas fa-lock mr-2"></i> Proceed to Checkout
                </button>
                
                <button onclick="continueShopping()" class="btn-outline w-full">
                    Continue Shopping
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-[#2a6b4e] rounded-lg flex items-center justify-center">
                            <i class="fas fa-mountain-sun text-white"></i>
                        </div>
                        <span class="text-2xl font-bold">Nakuru Tents & Canvas</span>
                    </div>
                    <p class="text-gray-400 mb-6">Premium outdoor solutions for events and adventures since 2010.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-pinterest"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="index.html" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="services.html" class="text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="products.html" class="text-white">Products</a></li>
                        <li><a href="events.html" class="text-gray-400 hover:text-white">Events</a></li>
                        <li><a href="blog.html" class="text-gray-400 hover:text-white">Blog</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Customer Service</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white">Shipping Info</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Returns & Exchanges</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Size Guides</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Product Care</a></li>
                        <li><a href="contact.html" class="text-gray-400 hover:text-white">Contact Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Stay Updated</h4>
                    <p class="text-gray-400 mb-4">Get gear tips and exclusive offers</p>
                    <form class="flex mb-4">
                        <input type="email" placeholder="Your email" 
                               class="flex-grow px-4 py-2 rounded-l-lg text-gray-800">
                        <button type="submit" class="bg-[#2a6b4e] px-4 rounded-r-lg">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                    <p class="text-sm text-gray-500">We respect your privacy. Unsubscribe anytime.</p>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">© 2023 Nakuru Tents & Canvas. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Notification Toast -->
    <div id="toast" class="fixed bottom-4 right-4 bg-[#2a6b4e] text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-full transition-transform duration-300 z-50">
        <div class="flex items-center">
            <i class="fas fa-check-circle mr-3"></i>
            <span id="toastMessage">Item added to cart!</span>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Sample Product Data
        const products = [
            {
                id: 1,
                name: "Expedition 4-Person Tent",
                category: "tents",
                price: 249.99,
                rentalPrice: 45,
                image: "https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "Waterproof 4-person tent perfect for family camping trips. Features ventilation windows and easy setup.",
                features: ["Waterproof 3000mm", "Sets up in 10 minutes", "Ventilation windows", "Carry bag included"],
                rating: 4.5,
                reviews: 128,
                inStock: true,
                isRental: false,
                isFeatured: true
            },
            {
                id: 2,
                name: "Summit 65L Backpack",
                category: "backpacks",
                price: 179.99,
                rentalPrice: 25,
                image: "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "65L hiking backpack with adjustable suspension system and multiple compartments.",
                features: ["65L capacity", "Adjustable suspension", "Rain cover included", "Hydration compatible"],
                rating: 4.8,
                reviews: 89,
                inStock: true,
                isRental: true,
                isFeatured: true
            },
            {
                id: 3,
                name: "Arctic Sleeping Bag -10°C",
                category: "sleeping",
                price: 129.99,
                rentalPrice: 20,
                image: "https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "Cold weather sleeping bag rated for -10°C, perfect for winter camping.",
                features: ["Rated -10°C", "Water-resistant shell", "Compact packing", "Stuff sack included"],
                rating: 4.6,
                reviews: 67,
                inStock: true,
                isRental: true,
                isFeatured: true
            },
            {
                id: 4,
                name: "Trail Chef Camp Stove",
                category: "cooking",
                price: 89.99,
                rentalPrice: 15,
                image: "https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "Compact camping stove with wind protection and adjustable flame control.",
                features: ["Compact design", "Wind protection", "Adjustable flame", "Folds flat"],
                rating: 4.4,
                reviews: 45,
                inStock: true,
                isRental: true,
                isFeatured: false
            },
            {
                id: 5,
                name: "Explorer 2-Person Tent",
                category: "tents",
                price: 159.99,
                rentalPrice: 30,
                image: "https://images.unsplash.com/photo-1464207687429-7505649dae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "Lightweight 2-person tent for backpacking and hiking trips.",
                features: ["Lightweight 4.5 lbs", "Freestanding design", "Mesh roof for stargazing", "Compact carry size"],
                rating: 4.7,
                reviews: 92,
                inStock: true,
                isRental: true,
                isFeatured: false
            },
            {
                id: 6,
                name: "Day Hike 25L Backpack",
                category: "backpacks",
                price: 79.99,
                rentalPrice: 12,
                image: "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "25L daypack with hydration sleeve and multiple organizational pockets.",
                features: ["25L capacity", "Hydration sleeve", "Laptop sleeve", "Chest & waist straps"],
                rating: 4.3,
                reviews: 56,
                inStock: true,
                isRental: true,
                isFeatured: false
            },
            {
                id: 7,
                name: "Self-Inflating Sleeping Pad",
                category: "sleeping",
                price: 69.99,
                rentalPrice: 10,
                image: "https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "Comfortable self-inflating sleeping pad with thermal insulation.",
                features: ["Self-inflating", "R-value 4.5", "Compact size", "Repair kit included"],
                rating: 4.5,
                reviews: 78,
                inStock: true,
                isRental: true,
                isFeatured: false
            },
            {
                id: 8,
                name: "Camp Cookware Set",
                category: "cooking",
                price: 59.99,
                rentalPrice: 8,
                image: "https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "Complete cookware set for camping including pots, pans, and utensils.",
                features: ["4-piece set", "Non-stick coating", "Nesting design", "Carry bag included"],
                rating: 4.2,
                reviews: 34,
                inStock: true,
                isRental: true,
                isFeatured: false
            },
            {
                id: 9,
                name: "Compass & Map Set",
                category: "accessories",
                price: 29.99,
                rentalPrice: 5,
                image: "https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "Professional compass with topographic map reading guide.",
                features: ["Liquid-filled compass", "Map scale ruler", "Luminous points", "Carrying case"],
                rating: 4.6,
                reviews: 41,
                inStock: true,
                isRental: false,
                isFeatured: false
            },
            {
                id: 10,
                name: "Headlamp 500 Lumens",
                category: "accessories",
                price: 39.99,
                rentalPrice: 6,
                image: "https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "500 lumen headlamp with multiple lighting modes and red night vision.",
                features: ["500 lumens", "Red light mode", "USB rechargeable", "Waterproof IPX4"],
                rating: 4.7,
                reviews: 63,
                inStock: true,
                isRental: true,
                isFeatured: false
            },
            {
                id: 11,
                name: "Family Cabin Tent 8-Person",
                category: "tents",
                price: 399.99,
                rentalPrice: 75,
                image: "https://images.unsplash.com/photo-1464207687429-7505649dae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "Spacious 8-person cabin tent with room divider and screened porch.",
                features: ["8-person capacity", "Room divider", "Screened porch", "Easy setup system"],
                rating: 4.8,
                reviews: 112,
                inStock: true,
                isRental: true,
                isFeatured: false
            },
            {
                id: 12,
                name: "Trekking Poles Aluminum",
                category: "accessories",
                price: 49.99,
                rentalPrice: 8,
                image: "https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                description: "Lightweight aluminum trekking poles with adjustable length and shock absorption.",
                features: ["Adjustable length", "Shock absorption", "Cork handles", "Quick-lock system"],
                rating: 4.5,
                reviews: 87,
                inStock: true,
                isRental: true,
                isFeatured: false
            }
        ];

        // Cart Data
        let cart = [
            { id: 2, name: "Summit 65L Backpack", price: 179.99, quantity: 1, image: "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&auto=format&fit=crop&w=200" },
            { id: 3, name: "Arctic Sleeping Bag -10°C", price: 129.99, quantity: 1, image: "https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&auto=format&fit=crop&w=200" },
            { id: 9, name: "Compass & Map Set", price: 29.99, quantity: 1, image: "https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=200" }
        ];

        // State Variables
        let currentCategory = 'all';
        let currentSort = 'featured';
        let displayedProducts = 8;
        let wishlist = new Set();

        // DOM Elements
        const featuredProductsGrid = document.getElementById('featuredProductsGrid');
        const productsGrid = document.getElementById('productsGrid');
        const cartCount = document.getElementById('cartCount');
        const mobileCartCount = document.getElementById('mobileCartCount');
        const cartItems = document.getElementById('cartItems');
        const emptyCart = document.getElementById('emptyCart');
        const cartSubtotal = document.getElementById('cartSubtotal');
        const cartShipping = document.getElementById('cartShipping');
        const cartTax = document.getElementById('cartTax');
        const cartTotal = document.getElementById('cartTotal');
        const cartSummary = document.getElementById('cartSummary');
        const productCount = document.getElementById('productCount');
        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toastMessage');

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            renderFeaturedProducts();
            renderAllProducts();
            updateCartDisplay();
            setupEventListeners();
            
            // Animate elements on scroll
            setupScrollAnimations();
        });

        // Setup Event Listeners
        function setupEventListeners() {
            // Category buttons
            document.querySelectorAll('.category-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const category = this.dataset.category;
                    filterByCategory(category);
                    
                    // Update active state
                    document.querySelectorAll('.category-btn').forEach(b => {
                        b.classList.remove('active', 'bg-[#2a6b4e]', 'text-white');
                        b.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-200');
                    });
                    
                    this.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-200');
                    this.classList.add('active', 'bg-[#2a6b4e]', 'text-white');
                });
            });

            // Sort select
            document.getElementById('sortSelect').addEventListener('change', function() {
                currentSort = this.value;
                renderAllProducts();
            });

            // Search input
            document.getElementById('searchInput').addEventListener('input', function() {
                filterBySearch(this.value);
            });

            // Filter toggle (mobile)
            document.getElementById('filterToggle').addEventListener('click', function() {
                const filters = document.getElementById('mobileFilters');
                filters.classList.toggle('hidden');
            });

            // Load more button
            document.getElementById('loadMoreBtn').addEventListener('click', loadMoreProducts);

            // Cart button
            document.getElementById('cartButton').addEventListener('click', openCart);

            // Mobile menu
            document.getElementById('mobileMenuBtn').addEventListener('click', function() {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('hidden');
            });
        }

        // Render Featured Products
        function renderFeaturedProducts() {
            featuredProductsGrid.innerHTML = '';
            const featured = products.filter(p => p.isFeatured).slice(0, 4);
            
            featured.forEach(product => {
                const card = createProductCard(product, true);
                featuredProductsGrid.appendChild(card);
            });
        }

        // Render All Products
        function renderAllProducts() {
            productsGrid.innerHTML = '';
            
            // Filter and sort
            let filtered = filterProducts();
            filtered = sortProducts(filtered);
            
            // Limit displayed products
            const displayed = filtered.slice(0, displayedProducts);
            
            if (displayed.length === 0) {
                productsGrid.innerHTML = `
                    <div class="col-span-full text-center py-12">
                        <i class="fas fa-search text-4xl text-gray-300 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-700 mb-2">No products found</h3>
                        <p class="text-gray-600">Try adjusting your filters or search term</p>
                    </div>
                `;
            } else {
                displayed.forEach(product => {
                    const card = createProductCard(product, false);
                    productsGrid.appendChild(card);
                });
            }
            
            // Update product count
            productCount.textContent = `Showing ${displayed.length} of ${filtered.length} products`;
        }

        // Create Product Card HTML
        function createProductCard(product, isFeatured) {
            const card = document.createElement('div');
            card.className = `bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 hover:border-[#2a6b4e] transition-all duration-300 product-card fade-in`;
            card.dataset.category = product.category;
            card.dataset.id = product.id;
            
            const ratingStars = getStarRating(product.rating);
            const isInWishlist = wishlist.has(product.id);
            
            card.innerHTML = `
                <div class="relative">
                    <img src="${product.image}" alt="${product.name}" class="w-full h-48 object-cover product-image">
                    
                    ${product.isRental ? `
                        <span class="absolute top-4 left-4 bg-[#e6b325] text-gray-800 px-2 py-1 rounded text-xs font-bold">
                            <i class="fas fa-sync-alt mr-1"></i> Rent Available
                        </span>
                    ` : ''}
                    
                    ${!product.inStock ? `
                        <span class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">
                            Sold Out
                        </span>
                    ` : ''}
                    
                    ${isFeatured ? `
                        <span class="absolute top-4 ${product.isRental ? 'left-20' : 'left-4'} bg-[#2a6b4e] text-white px-2 py-1 rounded text-xs font-bold">
                            <i class="fas fa-fire mr-1"></i> Featured
                        </span>
                    ` : ''}
                    
                    <button class="wishlist-btn absolute top-4 right-4 bg-white rounded-full w-8 h-8 flex items-center justify-center shadow-md hover:shadow-lg transition-shadow"
                            onclick="toggleWishlist(${product.id})">
                        <i class="${isInWishlist ? 'fas' : 'far'} fa-heart ${isInWishlist ? 'text-red-500' : 'text-gray-400'}"></i>
                    </button>
                </div>
                
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-gray-800">${product.name}</h3>
                        <div class="text-right">
                            <div class="text-lg font-bold text-[#2a6b4e]">$${product.price.toFixed(2)}</div>
                            ${product.isRental ? `
                                <div class="text-sm text-gray-500">or $${product.rentalPrice}/day</div>
                            ` : ''}
                        </div>
                    </div>
                    
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 text-sm mr-2">
                            ${ratingStars}
                        </div>
                        <span class="text-gray-500 text-sm">(${product.reviews})</span>
                    </div>
                    
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">${product.description}</p>
                    
                    <div class="flex justify-between items-center">
                        <span class="text-sm ${product.inStock ? 'text-green-600' : 'text-red-600'}">
                            <i class="fas ${product.inStock ? 'fa-check-circle' : 'fa-times-circle'} mr-1"></i>
                            ${product.inStock ? 'In Stock' : 'Out of Stock'}
                        </span>
                        
                        <div class="flex space-x-2">
                            <button onclick="quickView(${product.id})" class="text-gray-600 hover:text-[#2a6b4e] text-sm font-medium">
                                Details
                            </button>
                            
                            ${product.inStock ? `
                                <button onclick="addToCart(${product.id})" class="btn-primary text-sm px-3 py-1">
                                    <i class="fas fa-cart-plus mr-1"></i> Add
                                </button>
                            ` : `
                                <button class="btn-outline text-sm px-3 py-1 opacity-50 cursor-not-allowed">
                                    <i class="fas fa-bell mr-1"></i> Notify
                                </button>
                            `}
                        </div>
                    </div>
                </div>
            `;
            
            return card;
        }

        // Filter Products
        function filterProducts() {
            let filtered = [...products];
            
            // Category filter
            if (currentCategory !== 'all') {
                filtered = filtered.filter(product => product.category === currentCategory);
            }
            
            return filtered;
        }

        // Sort Products
        function sortProducts(productsArray) {
            switch(currentSort) {
                case 'price-low':
                    return [...productsArray].sort((a, b) => a.price - b.price);
                case 'price-high':
                    return [...productsArray].sort((a, b) => b.price - a.price);
                case 'name':
                    return [...productsArray].sort((a, b) => a.name.localeCompare(b.name));
                case 'newest':
                    return [...productsArray].reverse();
                default: // featured
                    return [...productsArray].sort((a, b) => {
                        if (a.isFeatured && !b.isFeatured) return -1;
                        if (!a.isFeatured && b.isFeatured) return 1;
                        return 0;
                    });
            }
        }

        // Filter by Category
        function filterByCategory(category) {
            currentCategory = category;
            displayedProducts = 8;
            renderAllProducts();
            scrollToProducts();
        }

        // Filter by Search
        function filterBySearch(searchTerm) {
            const searchLower = searchTerm.toLowerCase();
            const cards = document.querySelectorAll('.product-card');
            
            cards.forEach(card => {
                const productName = card.querySelector('h3').textContent.toLowerCase();
                const productDesc = card.querySelector('p').textContent.toLowerCase();
                
                if (productName.includes(searchLower) || productDesc.includes(searchLower)) {
                    card.style.display = 'block';
                    card.classList.add('fade-in');
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Load More Products
        function loadMoreProducts() {
            const btn = document.getElementById('loadMoreBtn');
            const spinner = btn.querySelector('i');
            const text = btn.querySelector('span');
            
            // Show loading
            text.textContent = 'Loading...';
            spinner.classList.remove('hidden');
            btn.disabled = true;
            
            // Simulate loading delay
            setTimeout(() => {
                displayedProducts += 4;
                renderAllProducts();
                
                // Reset button
                text.textContent = 'Load More Products';
                spinner.classList.add('hidden');
                btn.disabled = false;
                
                // Scroll to new products
                const newCards = productsGrid.querySelectorAll('.product-card:nth-last-child(-n+4)');
                newCards.forEach(card => {
                    card.classList.add('fade-in');
                });
            }, 500);
        }

        // Add to Cart
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            if (!product) return;
            
            // Check if already in cart
            const existingItem = cart.find(item => item.id === productId);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    quantity: 1,
                    image: product.image
                });
            }
            
            // Update cart display
            updateCartDisplay();
            
            // Show toast
            showToast(`${product.name} added to cart!`);
            
            // Animate cart badge
            animateCartBadge();
        }

        // Remove from Cart
        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCartDisplay();
            showToast('Item removed from cart');
        }

        // Update Cart Quantity
        function updateCartQuantity(productId, quantity) {
            const item = cart.find(item => item.id === productId);
            if (item) {
                item.quantity = quantity;
                if (quantity < 1) {
                    removeFromCart(productId);
                } else {
                    updateCartDisplay();
                }
            }
        }

        // Update Cart Display
        function updateCartDisplay() {
            // Update counts
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            cartCount.textContent = totalItems;
            mobileCartCount.textContent = totalItems;
            
            // Calculate totals
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const shipping = subtotal > 100 ? 0 : 9.99;
            const tax = subtotal * 0.08;
            const total = subtotal + shipping + tax;
            
            // Update totals
            cartSubtotal.textContent = `$${subtotal.toFixed(2)}`;
            cartShipping.textContent = shipping === 0 ? 'FREE' : `$${shipping.toFixed(2)}`;
            cartTax.textContent = `$${tax.toFixed(2)}`;
            cartTotal.textContent = `$${total.toFixed(2)}`;
            cartSummary.textContent = `${totalItems} items • $${subtotal.toFixed(2)}`;
            
            // Update cart items
            cartItems.innerHTML = '';
            
            if (cart.length === 0) {
                emptyCart.classList.remove('hidden');
            } else {
                emptyCart.classList.add('hidden');
                
                cart.forEach(item => {
                    const cartItem = document.createElement('div');
                    cartItem.className = 'flex items-center space-x-4 pb-4 border-b';
                    cartItem.innerHTML = `
                        <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded-lg">
                        <div class="flex-1">
                            <h4 class="font-medium text-gray-800">${item.name}</h4>
                            <p class="text-[#2a6b4e] font-bold">$${item.price.toFixed(2)}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button onclick="updateCartQuantity(${item.id}, ${item.quantity - 1})" class="w-6 h-6 rounded-full border border-gray-300 flex items-center justify-center">
                                <i class="fas fa-minus text-xs text-gray-600"></i>
                            </button>
                            <span class="w-8 text-center">${item.quantity}</span>
                            <button onclick="updateCartQuantity(${item.id}, ${item.quantity + 1})" class="w-6 h-6 rounded-full border border-gray-300 flex items-center justify-center">
                                <i class="fas fa-plus text-xs text-gray-600"></i>
                            </button>
                            <button onclick="removeFromCart(${item.id})" class="text-red-500 hover:text-red-700 ml-2">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    `;
                    cartItems.appendChild(cartItem);
                });
            }
        }

        // Quick View Modal
        function quickView(productId) {
            const product = products.find(p => p.id === productId);
            if (!product) return;
            
            // Update modal content
            document.getElementById('modalProductName').textContent = product.name;
            document.getElementById('modalProductImage').src = product.image;
            document.getElementById('modalProductPrice').textContent = `$${product.price.toFixed(2)}`;
            document.getElementById('modalProductType').textContent = product.isRental ? `or $${product.rentalPrice}/day rental` : '';
            document.getElementById('modalProductDescription').textContent = product.description;
            document.getElementById('modalProductReviews').textContent = `(${product.reviews} reviews)`;
            document.getElementById('stockStatus').innerHTML = product.inStock ? 
                `<i class="fas fa-check-circle mr-1"></i> In Stock` :
                `<i class="fas fa-times-circle mr-1"></i> Out of Stock`;
            
            // Update features list
            const featuresList = document.getElementById('modalProductFeatures');
            featuresList.innerHTML = '';
            product.features.forEach(feature => {
                const li = document.createElement('li');
                li.className = 'flex items-center text-gray-600';
                li.innerHTML = `<i class="fas fa-check text-green-500 mr-3"></i><span>${feature}</span>`;
                featuresList.appendChild(li);
            });
            
            // Set wishlist button state
            const wishlistBtn = document.getElementById('wishlistBtn');
            const isInWishlist = wishlist.has(productId);
            wishlistBtn.innerHTML = `<i class="${isInWishlist ? 'fas' : 'far'} fa-heart"></i>`;
            wishlistBtn.onclick = () => toggleWishlist(productId);
            
            // Set add to cart function
            window.addToCartFromModal = function() {
                addToCart(productId);
                closeQuickView();
            };
            
            // Show modal
            document.getElementById('quickViewModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        // Toggle Wishlist
        function toggleWishlist(productId) {
            if (wishlist.has(productId)) {
                wishlist.delete(productId);
                showToast('Removed from wishlist');
            } else {
                wishlist.add(productId);
                showToast('Added to wishlist');
                
                // Animate heart
                const heartBtn = document.querySelector(`button[onclick="toggleWishlist(${productId})"] i`);
                heartBtn.classList.add('wishlist-heart', 'active');
                setTimeout(() => heartBtn.classList.remove('active'), 500);
            }
            
            // Update all wishlist buttons for this product
            updateWishlistButtons(productId);
        }

        // Update Wishlist Buttons
        function updateWishlistButtons(productId) {
            const isInWishlist = wishlist.has(productId);
            
            // Update product cards
            document.querySelectorAll(`.product-card[data-id="${productId}"] .wishlist-btn i`).forEach(icon => {
                icon.className = `${isInWishlist ? 'fas' : 'far'} fa-heart ${isInWishlist ? 'text-red-500' : 'text-gray-400'}`;
            });
            
            // Update modal if open
            const modalBtn = document.getElementById('wishlistBtn');
            if (modalBtn) {
                modalBtn.innerHTML = `<i class="${isInWishlist ? 'fas' : 'far'} fa-heart"></i>`;
            }
        }

        // Show Toast Notification
        function showToast(message) {
            toastMessage.textContent = message;
            toast.classList.remove('translate-y-full');
            
            setTimeout(() => {
                toast.classList.add('translate-y-full');
            }, 3000);
        }

        // Animate Cart Badge
        function animateCartBadge() {
            cartCount.classList.add('pulse');
            setTimeout(() => cartCount.classList.remove('pulse'), 500);
        }

        // Open Cart Sidebar
        function openCart() {
            document.getElementById('cartSidebar').classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
        }

        // Close Cart Sidebar
        function closeCart() {
            document.getElementById('cartSidebar').classList.add('translate-x-full');
            document.body.style.overflow = 'auto';
        }

        // Close Quick View
        function closeQuickView() {
            document.getElementById('quickViewModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Checkout
        function checkout() {
            if (cart.length === 0) {
                showToast('Your cart is empty');
                return;
            }
            
            showToast('Proceeding to checkout...');
            setTimeout(() => {
                alert('Checkout would proceed to payment gateway in a real application');
            }, 1000);
        }

        // Continue Shopping
        function continueShopping() {
            closeCart();
            scrollToCategories();
        }

        // Quantity Controls
        function increaseQuantity() {
            const input = document.getElementById('quantityInput');
            input.value = parseInt(input.value) + 1;
        }

        function decreaseQuantity() {
            const input = document.getElementById('quantityInput');
            if (input.value > 1) {
                input.value = parseInt(input.value) - 1;
            }
        }

        // Scroll Animations
        function setupScrollAnimations() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            }, { threshold: 0.1 });
            
            // Observe all product cards
            document.querySelectorAll('.product-card').forEach(card => {
                observer.observe(card);
            });
        }

        // Helper Functions
        function getStarRating(rating) {
            let stars = '';
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 >= 0.5;
            
            for (let i = 0; i < fullStars; i++) {
                stars += '<i class="fas fa-star"></i>';
            }
            
            if (hasHalfStar) {
                stars += '<i class="fas fa-star-half-alt"></i>';
            }
            
            const emptyStars = 5 - fullStars - (hasHalfStar ? 1 : 0);
            for (let i = 0; i < emptyStars; i++) {
                stars += '<i class="far fa-star"></i>';
            }
            
            return stars;
        }

        function scrollToProducts() {
            document.getElementById('all-products').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }

        function scrollToCategories() {
            document.getElementById('categories').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }

        // Close modals on ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeQuickView();
                closeCart();
            }
        });

        // Close cart when clicking outside
        document.addEventListener('click', (e) => {
            const cartSidebar = document.getElementById('cartSidebar');
            const cartButton = document.getElementById('cartButton');
            
            if (!cartSidebar.contains(e.target) && !cartButton.contains(e.target) && !cartSidebar.classList.contains('translate-x-full')) {
                closeCart();
            }
        });

        // Close quick view when clicking outside
        document.addEventListener('click', (e) => {
            const quickViewModal = document.getElementById('quickViewModal');
            
            if (e.target === quickViewModal) {
                closeQuickView();
            }
        });
    </script>
</body>
</html>