<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery - Adventure Canvas Co.</title>
    <meta name="description" content="Explore our gallery of event setups, hiking adventures, custom products, and outdoor experiences.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
    
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
        
        @keyframes zoomIn {
            from { transform: scale(0.95); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        
        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        .fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }
        
        .zoom-in {
            animation: zoomIn 0.5s ease-out forwards;
        }
        
        .slide-in {
            animation: slideIn 0.4s ease-out forwards;
        }
        
        /* Gallery Item Hover Effects */
        .gallery-item {
            @apply transition-all duration-500 cursor-pointer;
        }
        
        .gallery-item:hover {
            transform: scale(1.02);
            z-index: 10;
        }
        
        .gallery-overlay {
            @apply absolute inset-0 bg-black bg-opacity-0 transition-all duration-500 flex items-end p-6;
        }
        
        .gallery-item:hover .gallery-overlay {
            background-color: rgba(0, 0, 0, 0.7);
        }
        
        .overlay-content {
            @apply transform translate-y-full opacity-0 transition-all duration-500 text-white;
        }
        
        .gallery-item:hover .overlay-content {
            transform: translateY(0);
            opacity: 1;
        }
        
        /* Masonry Grid */
        .masonry-grid {
            column-count: 3;
            column-gap: 1.5rem;
        }
        
        @media (max-width: 1024px) {
            .masonry-grid {
                column-count: 2;
            }
        }
        
        @media (max-width: 640px) {
            .masonry-grid {
                column-count: 1;
            }
        }
        
        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1.5rem;
        }
        
        /* Filter Button Styles */
        .filter-btn {
            @apply px-4 py-2 rounded-full transition-all duration-300;
        }
        
        .filter-btn.active {
            @apply bg-[#2a6b4e] text-white;
        }
        
        .filter-btn:not(.active) {
            @apply bg-gray-100 text-gray-700 hover:bg-gray-200;
        }
        
        /* Image Zoom Effect */
        .image-zoom-container {
            @apply overflow-hidden rounded-lg;
        }
        
        .image-zoom {
            @apply transition-transform duration-700;
        }
        
        .image-zoom-container:hover .image-zoom {
            transform: scale(1.1);
        }
        
        /* Loading Animation */
        .loading-dots {
            display: inline-block;
        }
        
        .loading-dots span {
            animation: blink 1.4s infinite both;
            background-color: #2a6b4e;
            border-radius: 50%;
            display: inline-block;
            height: 8px;
            margin: 0 2px;
            width: 8px;
        }
        
        .loading-dots span:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .loading-dots span:nth-child(3) {
            animation-delay: 0.4s;
        }
        
        @keyframes blink {
            0%, 80%, 100% { opacity: 0; }
            40% { opacity: 1; }
        }
        
        /* Hide scrollbar but keep functionality */
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Grid Animation */
        .grid-item {
            animation: gridAppear 0.5s ease-out forwards;
            opacity: 0;
        }
        
        @keyframes gridAppear {
            to {
                opacity: 1;
            }
        }
        
        /* Shine Effect */
        .shine-effect {
            position: relative;
            overflow: hidden;
        }
        
        .shine-effect::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 20%;
            height: 200%;
            background: rgba(255, 255, 255, 0.13);
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0.13) 0%,
                rgba(255, 255, 255, 0.13) 77%,
                rgba(255, 255, 255, 0.5) 92%,
                rgba(255, 255, 255, 0.0) 100%
            );
            transform: rotate(30deg);
            transition: all 0.3s;
        }
        
        .shine-effect:hover::after {
            left: 130%;
            transition: left 0.7s;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
@include('layouts.navigation')


    <!-- Hero Section -->
    <section class="relative py-20 md:py-28 overflow-hidden bg-gradient-to-br from-[#2a6b4e] via-[#3a8b6f] to-[#1e4f3a] text-white">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="
                background-image: url('data:image/svg+xml,%3Csvg width=\"100\" height=\"100\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\" fill=\"%23ffffff\" fill-opacity=\"0.4\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');
                background-size: 200px;
            "></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Our Visual Journey
                </h1>
                <p class="text-xl mb-8 text-gray-100 max-w-3xl mx-auto">
                    Explore stunning visuals of our events, products, and adventures in the great outdoors.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#event-gallery" class="btn-secondary">
                        <i class="fas fa-tents mr-2"></i> Event Gallery
                    </a>
                    <a href="#product-showcase" class="bg-white text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                        <i class="fas fa-camera mr-2"></i> Product Photos
                    </a>
                    <a href="#adventure-gallery" class="btn-primary">
                        <i class="fas fa-hiking mr-2"></i> Adventure Gallery
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#gallery-filters" class="flex flex-col items-center text-white/70 hover:text-white transition">
                <span class="text-sm mb-2">Explore Gallery</span>
                <i class="fas fa-chevron-down text-xl"></i>
            </a>
        </div>
    </section>

    <!-- Gallery Filters -->
    <section id="gallery-filters" class="py-8 bg-white shadow-sm relative top-20 z-40">
        <div class="container mx-auto px-4">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Browse Categories</h2>
            </div>
            
            <div class="flex flex-wrap justify-center gap-3">
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-th-large mr-2"></i> All Photos
                </button>
                <button class="filter-btn" data-filter="events">
                    <i class="fas fa-tents mr-2"></i> Events
                </button>
                <button class="filter-btn" data-filter="products">
                    <i class="fas fa-campground mr-2"></i> Products
                </button>
                <button class="filter-btn" data-filter="adventures">
                    <i class="fas fa-hiking mr-2"></i> Adventures
                </button>
                <button class="filter-btn" data-filter="custom">
                    <i class="fas fa-edit mr-2"></i> Custom Work
                </button>
                <button class="filter-btn" data-filter="behind-scenes">
                    <i class="fas fa-cogs mr-2"></i> Behind Scenes
                </button>
            </div>
            
            <!-- Search and Sort -->
            <div class="mt-6 flex flex-col md:flex-row justify-center items-center gap-4">
                <div class="relative w-full md:w-64">
                    <input type="text" id="searchGallery" placeholder="Search photos..." 
                           class="w-full px-4 py-2 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
                <select id="sortGallery" class="w-full md:w-auto px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent">
                    <option value="newest">Newest First</option>
                    <option value="oldest">Oldest First</option>
                    <option value="popular">Most Popular</option>
                </select>
            </div>
        </div>
    </section>

    <!-- Event Gallery -->
    <section id="event-gallery" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#2a6b4e] text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-tents mr-2"></i> Events
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Event Gallery</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Stunning setups from weddings, corporate events, festivals, and more</p>
            </div>
            
            <!-- Masonry Grid -->
            <div class="masonry-grid">
                <!-- Item 1 -->
                <div class="masonry-item gallery-item group" data-category="events" data-tags="wedding tent marquee">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Wedding tent setup" 
                             class="w-full h-auto image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Elegant Wedding Marquee</h3>
                                <p class="text-sm text-gray-200 mb-3">Custom marquee tent for a romantic outdoor wedding ceremony</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#2a6b4e] px-2 py-1 rounded">Wedding</span>
                                    <span class="ml-2">2023</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="events" 
                           data-title="Elegant Wedding Marquee - Custom marquee tent for a romantic outdoor wedding ceremony"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div class="masonry-item gallery-item group" data-category="events" data-tags="corporate tent business">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w-800" 
                             alt="Corporate event tent" 
                             class="w-full h-auto image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Corporate Conference Setup</h3>
                                <p class="text-sm text-gray-200 mb-3">Clear-span tent for a 500-person corporate conference</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#2a6b4e] px-2 py-1 rounded">Corporate</span>
                                    <span class="ml-2">2023</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="events" 
                           data-title="Corporate Conference Setup - Clear-span tent for a 500-person corporate conference"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Item 3 -->
                <div class="masonry-item gallery-item group" data-category="events" data-tags="festival party outdoor">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Music festival setup" 
                             class="w-full h-auto image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Music Festival Village</h3>
                                <p class="text-sm text-gray-200 mb-3">Multiple tent structures for a 3-day outdoor music festival</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#e6b325] text-gray-800 px-2 py-1 rounded">Festival</span>
                                    <span class="ml-2">2022</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="events" 
                           data-title="Music Festival Village - Multiple tent structures for a 3-day outdoor music festival"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Item 4 -->
                <div class="masonry-item gallery-item group" data-category="events" data-tags="wedding reception party">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Wedding reception" 
                             class="w-full h-auto image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Evening Wedding Reception</h3>
                                <p class="text-sm text-gray-200 mb-3">Beautifully lit marquee for an evening wedding celebration</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#2a6b4e] px-2 py-1 rounded">Wedding</span>
                                    <span class="ml-2">2023</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="events" 
                           data-title="Evening Wedding Reception - Beautifully lit marquee for an evening wedding celebration"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Item 5 -->
                <div class="masonry-item gallery-item group" data-category="events" data-tags="corporate networking business">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Corporate networking event" 
                             class="w-full h-auto image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Corporate Networking Event</h3>
                                <p class="text-sm text-gray-200 mb-3">Modern tent setup for corporate networking and product launches</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#2a6b4e] px-2 py-1 rounded">Corporate</span>
                                    <span class="ml-2">2022</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="events" 
                           data-title="Corporate Networking Event - Modern tent setup for corporate networking and product launches"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Item 6 -->
                <div class="masonry-item gallery-item group" data-category="events" data-tags="festival food outdoor">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Food festival setup" 
                             class="w-full h-auto image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Food Festival Market</h3>
                                <p class="text-sm text-gray-200 mb-3">Multiple vendor tents for a weekend food and craft festival</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#e6b325] text-gray-800 px-2 py-1 rounded">Festival</span>
                                    <span class="ml-2">2022</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="events" 
                           data-title="Food Festival Market - Multiple vendor tents for a weekend food and craft festival"
                           class="absolute inset-0"></a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button id="loadMoreEvents" class="btn-outline px-8">
                    <span>Load More Event Photos</span>
                    <i class="fas fa-spinner fa-spin ml-2 hidden"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Product Showcase -->
    <section id="product-showcase" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#e6b325] text-gray-800 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-campground mr-2"></i> Products
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Product Showcase</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Our premium tents, hiking gear, and outdoor equipment in action</p>
            </div>
            
            <!-- Grid Layout -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Product 1 -->
                <div class="gallery-item group" data-category="products" data-tags="tent camping outdoor">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Family camping tent" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Expedition Family Tent</h3>
                                <p class="text-sm text-gray-200 mb-3">6-person waterproof tent perfect for family camping trips</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#3a8b6f] text-white px-2 py-1 rounded">Camping Tent</span>
                                    <span class="ml-2">4.8 ★</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="products" 
                           data-title="Expedition Family Tent - 6-person waterproof tent perfect for family camping trips"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="gallery-item group" data-category="products" data-tags="backpack hiking gear">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Hiking backpack" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Summit 65L Backpack</h3>
                                <p class="text-sm text-gray-200 mb-3">Professional hiking backpack with adjustable suspension system</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#3a8b6f] text-white px-2 py-1 rounded">Hiking Gear</span>
                                    <span class="ml-2">4.9 ★</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="products" 
                           data-title="Summit 65L Backpack - Professional hiking backpack with adjustable suspension system"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="gallery-item group" data-category="products" data-tags="sleeping bag camping">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Sleeping bag" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Arctic Sleeping Bag</h3>
                                <p class="text-sm text-gray-200 mb-3">Cold weather sleeping bag rated for -10°C conditions</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#3a8b6f] text-white px-2 py-1 rounded">Sleeping Gear</span>
                                    <span class="ml-2">4.7 ★</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="products" 
                           data-title="Arctic Sleeping Bag - Cold weather sleeping bag rated for -10°C conditions"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="gallery-item group" data-category="products" data-tags="cookware camping kitchen">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Camping cookware" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Camp Chef Cookware Set</h3>
                                <p class="text-sm text-gray-200 mb-3">Complete camping kitchen set with nesting design</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#3a8b6f] text-white px-2 py-1 rounded">Cooking Gear</span>
                                    <span class="ml-2">4.6 ★</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="products" 
                           data-title="Camp Chef Cookware Set - Complete camping kitchen set with nesting design"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Product 5 -->
                <div class="gallery-item group" data-category="products" data-tags="tent hiking lightweight">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Backpacking tent" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Trailblazer 2-Person Tent</h3>
                                <p class="text-sm text-gray-200 mb-3">Ultralight tent for backpacking and hiking adventures</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#3a8b6f] text-white px-2 py-1 rounded">Hiking Tent</span>
                                    <span class="ml-2">4.8 ★</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1464207687429-7505649dae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="products" 
                           data-title="Trailblazer 2-Person Tent - Ultralight tent for backpacking and hiking adventures"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Product 6 -->
                <div class="gallery-item group" data-category="products" data-tags="accessories gear outdoor">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Outdoor accessories" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Outdoor Essentials Kit</h3>
                                <p class="text-sm text-gray-200 mb-3">Complete set of essential outdoor accessories and tools</p>
                                <div class="flex items-center text-sm">
                                    <span class="bg-[#3a8b6f] text-white px-2 py-1 rounded">Accessories</span>
                                    <span class="ml-2">4.5 ★</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="products" 
                           data-title="Outdoor Essentials Kit - Complete set of essential outdoor accessories and tools"
                           class="absolute inset-0"></a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="products.html" class="btn-primary">
                    <i class="fas fa-shopping-cart mr-2"></i> Shop All Products
                </a>
            </div>
        </div>
    </section>

    <!-- Adventure Gallery -->
    <section id="adventure-gallery" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#3a8b6f] text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-hiking mr-2"></i> Adventures
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Adventure Gallery</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Our gear in action across mountains, forests, lakes, and trails</p>
            </div>
            
            <!-- Full Width Gallery -->
            <div class="space-y-6">
                <!-- Row 1 -->
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="gallery-item group" data-category="adventures" data-tags="mountain hiking">
                        <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect h-64">
                            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                                 alt="Mountain hiking" 
                                 class="w-full h-full object-cover image-zoom">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <h3 class="font-bold text-lg mb-2">Mountain Expedition</h3>
                                    <p class="text-sm text-gray-200">Our gear tested in high-altitude conditions</p>
                                </div>
                            </div>
                            <a href="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                               data-lightbox="adventures" 
                               data-title="Mountain Expedition - Our gear tested in high-altitude conditions"
                               class="absolute inset-0"></a>
                        </div>
                    </div>
                    
                    <div class="gallery-item group" data-category="adventures" data-tags="forest camping">
                        <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect h-64">
                            <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                                 alt="Forest camping" 
                                 class="w-full h-full object-cover image-zoom">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <h3 class="font-bold text-lg mb-2">Forest Camping</h3>
                                    <p class="text-sm text-gray-200">Family camping trip in dense pine forest</p>
                                </div>
                            </div>
                            <a href="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                               data-lightbox="adventures" 
                               data-title="Forest Camping - Family camping trip in dense pine forest"
                               class="absolute inset-0"></a>
                        </div>
                    </div>
                    
                    <div class="gallery-item group" data-category="adventures" data-tags="lake watersports">
                        <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect h-64">
                            <img src="https://images.unsplash.com/photo-1471922694854-ff1b63b20054?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                                 alt="Lake adventure" 
                                 class="w-full h-full object-cover image-zoom">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <h3 class="font-bold text-lg mb-2">Lakeside Adventure</h3>
                                    <p class="text-sm text-gray-200">Waterproof gear tested by the lake</p>
                                </div>
                            </div>
                            <a href="https://images.unsplash.com/photo-1471922694854-ff1b63b20054?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                               data-lightbox="adventures" 
                               data-title="Lakeside Adventure - Waterproof gear tested by the lake"
                               class="absolute inset-0"></a>
                        </div>
                    </div>
                </div>
                
                <!-- Row 2 -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="gallery-item group" data-category="adventures" data-tags="desert camping">
                        <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect h-80">
                            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                                 alt="Desert camping" 
                                 class="w-full h-full object-cover image-zoom">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <h3 class="font-bold text-lg mb-2">Desert Expedition</h3>
                                    <p class="text-sm text-gray-200">UV-resistant tents in harsh desert conditions</p>
                                </div>
                            </div>
                            <a href="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                               data-lightbox="adventures" 
                               data-title="Desert Expedition - UV-resistant tents in harsh desert conditions"
                               class="absolute inset-0"></a>
                        </div>
                    </div>
                    
                    <div class="gallery-item group" data-category="adventures" data-tags="winter snow camping">
                        <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect h-80">
                            <img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                                 alt="Winter camping" 
                                 class="w-full h-full object-cover image-zoom">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <h3 class="font-bold text-lg mb-2">Winter Wilderness</h3>
                                    <p class="text-sm text-gray-200">Cold-weather gear tested in snowy conditions</p>
                                </div>
                            </div>
                            <a href="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                               data-lightbox="adventures" 
                               data-title="Winter Wilderness - Cold-weather gear tested in snowy conditions"
                               class="absolute inset-0"></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button id="loadMoreAdventures" class="btn-outline px-8">
                    <span>View More Adventures</span>
                    <i class="fas fa-spinner fa-spin ml-2 hidden"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Custom Work Gallery -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#2a6b4e] text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-edit mr-2"></i> Custom Work
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Custom Projects</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Bespoke canvas products and unique solutions for our clients</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Custom 1 -->
                <div class="gallery-item group" data-category="custom" data-tags="canvas bag custom">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Custom canvas bag" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Branded Canvas Totes</h3>
                                <p class="text-sm text-gray-200">Custom printed tote bags for corporate clients</p>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="custom" 
                           data-title="Branded Canvas Totes - Custom printed tote bags for corporate clients"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Custom 2 -->
                <div class="gallery-item group" data-category="custom" data-tags="tarp shelter custom">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Custom canvas tarp" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Custom Shelter Tarps</h3>
                                <p class="text-sm text-gray-200">Heavy-duty tarps for specialized outdoor applications</p>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="custom" 
                           data-title="Custom Shelter Tarps - Heavy-duty tarps for specialized outdoor applications"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Custom 3 -->
                <div class="gallery-item group" data-category="custom" data-tags="event branding custom">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Branded event tent" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Branded Event Tents</h3>
                                <p class="text-sm text-gray-200">Custom branded tents for corporate events and festivals</p>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="custom" 
                           data-title="Branded Event Tents - Custom branded tents for corporate events and festivals"
                           class="absolute inset-0"></a>
                    </div>
                </div>
                
                <!-- Custom 4 -->
                <div class="gallery-item group" data-category="custom" data-tags="unique specialty custom">
                    <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect">
                        <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                             alt="Specialty canvas product" 
                             class="w-full h-64 object-cover image-zoom">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h3 class="font-bold text-lg mb-2">Specialty Canvas Products</h3>
                                <p class="text-sm text-gray-200">Unique canvas solutions for specific client needs</p>
                            </div>
                        </div>
                        <a href="https://images.unsplash.com/photo-1464207687429-7505649dae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                           data-lightbox="custom" 
                           data-title="Specialty Canvas Products - Unique canvas solutions for specific client needs"
                           class="absolute inset-0"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Behind the Scenes -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-gray-800 text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-cogs mr-2"></i> Behind the Scenes
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Process</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">A look at how we craft quality products and create amazing events</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center fade-in" style="animation-delay: 0.1s">
                    <div class="relative rounded-xl overflow-hidden shadow-lg mb-6">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Craftsmanship" 
                             class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-6">
                            <h3 class="text-white font-bold text-lg">Craftsmanship</h3>
                        </div>
                    </div>
                    <p class="text-gray-600">Skilled artisans creating durable canvas products</p>
                </div>
                
                <div class="text-center fade-in" style="animation-delay: 0.2s">
                    <div class="relative rounded-xl overflow-hidden shadow-lg mb-6">
                        <img src="https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Quality Control" 
                             class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-6">
                            <h3 class="text-white font-bold text-lg">Quality Control</h3>
                        </div>
                    </div>
                    <p class="text-gray-600">Rigorous testing and inspection processes</p>
                </div>
                
                <div class="text-center fade-in" style="animation-delay: 0.3s">
                    <div class="relative rounded-xl overflow-hidden shadow-lg mb-6">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Team Work" 
                             class="w-full h-64 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent flex items-end p-6">
                            <h3 class="text-white font-bold text-lg">Team Collaboration</h3>
                        </div>
                    </div>
                    <p class="text-gray-600">Our team working together on event setups</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-[#2a6b4e] to-[#3a8b6f] text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Inspired by Our Work?</h2>
                <p class="text-xl mb-8 text-gray-100 max-w-3xl mx-auto">
                    Let's create something amazing together. Contact us to discuss your project or event.
                </p>
                
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="contact.html" class="btn-secondary">
                        <i class="fas fa-envelope mr-2"></i> Contact Us
                    </a>
                    <a href="services.html" class="bg-white text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                        <i class="fas fa-calendar-alt mr-2"></i> View Services
                    </a>
                    <a href="tel:5551234567" class="btn-outline border-white text-white hover:bg-white hover:text-[#2a6b4e]">
                        <i class="fas fa-phone mr-2"></i> Call Now
                    </a>
                </div>
                
                <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">500+</div>
                        <p class="text-sm text-gray-200">Events Completed</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">2000+</div>
                        <p class="text-sm text-gray-200">Products Made</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">98%</div>
                        <p class="text-sm text-gray-200">Client Satisfaction</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">13+</div>
                        <p class="text-sm text-gray-200">Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-[#2a6b4e] rounded-lg flex items-center justify-center">
                            <i class="fas fa-mountain-sun text-white"></i>
                        </div>
                        <span class="text-2xl font-bold">Adventure Canvas Co.</span>
                    </div>
                    <p class="text-gray-400 mb-6">Premium outdoor solutions through stunning visuals and quality craftsmanship.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-pinterest"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="index.html" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="services.html" class="text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="products.html" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="about.html" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="gallery.html" class="text-white">Gallery</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Gallery Categories</h4>
                    <ul class="space-y-3">
                        <li><a href="#event-gallery" class="text-gray-400 hover:text-white">Event Gallery</a></li>
                        <li><a href="#product-showcase" class="text-gray-400 hover:text-white">Product Showcase</a></li>
                        <li><a href="#adventure-gallery" class="text-gray-400 hover:text-white">Adventure Gallery</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Custom Work</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Behind the Scenes</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Stay Updated</h4>
                    <p class="text-gray-400 mb-4">Subscribe for new gallery updates and inspiration</p>
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
                <p class="text-gray-400 text-sm">© 2023 Adventure Canvas Co. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    
    <!-- JavaScript -->
    <script>
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            setupEventListeners();
            setupLightbox();
            setupFiltering();
            setupAnimations();
        });

        // Setup Event Listeners
        function setupEventListeners() {
            // Mobile menu toggle
            document.getElementById('mobileMenuBtn').addEventListener('click', function() {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('hidden');
            });

            // Load more buttons
            document.getElementById('loadMoreEvents').addEventListener('click', loadMoreEvents);
            document.getElementById('loadMoreAdventures').addEventListener('click', loadMoreAdventures);

            // Search functionality
            document.getElementById('searchGallery').addEventListener('input', function() {
                filterGalleryBySearch(this.value);
            });

            // Sort functionality
            document.getElementById('sortGallery').addEventListener('change', function() {
                sortGallery(this.value);
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                const menu = document.getElementById('mobileMenu');
                const button = document.getElementById('mobileMenuBtn');
                if (!menu.contains(event.target) && !button.contains(event.target) && !menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                }
            });
        }

        // Setup Lightbox
        function setupLightbox() {
            lightbox.option({
                'resizeDuration': 200,
                'wrapAround': true,
                'albumLabel': 'Image %1 of %2',
                'fadeDuration': 300,
                'imageFadeDuration': 300,
                'positionFromTop': 100,
                'showImageNumberLabel': true
            });
        }

        // Setup Filtering
        function setupFiltering() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active state
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter gallery items
                    const filter = this.getAttribute('data-filter');
                    filterGalleryByCategory(filter);
                });
            });
        }

        // Filter Gallery by Category
        function filterGalleryByCategory(category) {
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            galleryItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                    // Add animation
                    item.classList.add('fade-in');
                    setTimeout(() => {
                        item.classList.remove('fade-in');
                    }, 600);
                } else {
                    item.style.display = 'none';
                }
            });
            
            // Scroll to gallery section
            setTimeout(() => {
                document.getElementById('event-gallery').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }, 100);
        }

        // Filter Gallery by Search
        function filterGalleryBySearch(searchTerm) {
            const searchLower = searchTerm.toLowerCase();
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            galleryItems.forEach(item => {
                const tags = item.getAttribute('data-tags').toLowerCase();
                const category = item.getAttribute('data-category').toLowerCase();
                
                if (tags.includes(searchLower) || category.includes(searchLower) || searchTerm === '') {
                    item.style.display = 'block';
                    // Add highlight effect
                    item.classList.add('fade-in');
                    setTimeout(() => {
                        item.classList.remove('fade-in');
                    }, 600);
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Sort Gallery
        function sortGallery(sortBy) {
            // In a real application, this would sort the gallery items
            // For this demo, we'll just show a loading effect
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            // Add sorting animation
            galleryItems.forEach(item => {
                item.style.opacity = '0.5';
                item.style.transform = 'scale(0.95)';
            });
            
            setTimeout(() => {
                galleryItems.forEach(item => {
                    item.style.opacity = '1';
                    item.style.transform = 'scale(1)';
                    item.classList.add('fade-in');
                });
                
                // Remove animation class after completion
                setTimeout(() => {
                    galleryItems.forEach(item => {
                        item.classList.remove('fade-in');
                    });
                }, 600);
            }, 300);
        }

        // Load More Events
        function loadMoreEvents() {
            const btn = document.getElementById('loadMoreEvents');
            const spinner = btn.querySelector('i');
            const text = btn.querySelector('span');
            
            // Show loading state
            text.textContent = 'Loading...';
            spinner.classList.remove('hidden');
            btn.disabled = true;
            
            // Simulate loading delay
            setTimeout(() => {
                // In a real application, this would load more event images
                // For this demo, we'll just show a success message
                text.textContent = 'Loaded Successfully';
                spinner.classList.add('hidden');
                
                // Show notification
                showNotification('More event photos loaded successfully!');
                
                // Reset button after delay
                setTimeout(() => {
                    text.textContent = 'Load More Event Photos';
                    btn.disabled = false;
                }, 2000);
            }, 1500);
        }

        // Load More Adventures
        function loadMoreAdventures() {
            const btn = document.getElementById('loadMoreAdventures');
            const spinner = btn.querySelector('i');
            const text = btn.querySelector('span');
            
            // Show loading state
            text.textContent = 'Loading...';
            spinner.classList.remove('hidden');
            btn.disabled = true;
            
            // Simulate loading delay
            setTimeout(() => {
                // In a real application, this would load more adventure images
                // For this demo, we'll add some new images
                const adventureGallery = document.getElementById('adventure-gallery').querySelector('.space-y-6');
                
                // Create new adventure row
                const newRow = document.createElement('div');
                newRow.className = 'grid md:grid-cols-3 gap-6 fade-in';
                newRow.innerHTML = `
                    <div class="gallery-item group" data-category="adventures" data-tags="beach coastal">
                        <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect h-64">
                            <img src="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                 alt="Beach camping" 
                                 class="w-full h-full object-cover image-zoom">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <h3 class="font-bold text-lg mb-2">Coastal Adventure</h3>
                                    <p class="text-sm text-gray-200">Beachside camping with ocean views</p>
                                </div>
                            </div>
                            <a href="https://images.unsplash.com/photo-1506929562872-bb421503ef21?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                               data-lightbox="adventures" 
                               data-title="Coastal Adventure - Beachside camping with ocean views"
                               class="absolute inset-0"></a>
                        </div>
                    </div>
                    
                    <div class="gallery-item group" data-category="adventures" data-tags="river fishing">
                        <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect h-64">
                            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                 alt="River fishing" 
                                 class="w-full h-full object-cover image-zoom">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <h3 class="font-bold text-lg mb-2">River Expedition</h3>
                                    <p class="text-sm text-gray-200">Fishing and camping by the river</p>
                                </div>
                            </div>
                            <a href="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                               data-lightbox="adventures" 
                               data-title="River Expedition - Fishing and camping by the river"
                               class="absolute inset-0"></a>
                        </div>
                    </div>
                    
                    <div class="gallery-item group" data-category="adventures" data-tags="autumn foliage">
                        <div class="relative rounded-xl overflow-hidden shadow-lg shine-effect h-64">
                            <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                 alt="Autumn camping" 
                                 class="w-full h-full object-cover image-zoom">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <h3 class="font-bold text-lg mb-2">Autumn Colors</h3>
                                    <p class="text-sm text-gray-200">Camping in beautiful fall foliage</p>
                                </div>
                            </div>
                            <a href="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200" 
                               data-lightbox="adventures" 
                               data-title="Autumn Colors - Camping in beautiful fall foliage"
                               class="absolute inset-0"></a>
                        </div>
                    </div>
                `;
                
                // Add to gallery
                adventureGallery.appendChild(newRow);
                
                // Reset button
                text.textContent = 'View More Adventures';
                spinner.classList.add('hidden');
                btn.disabled = false;
                
                // Show notification
                showNotification('More adventure photos added!');
                
                // Scroll to new content
                setTimeout(() => {
                    newRow.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }, 100);
            }, 1500);
        }

        // Setup Animations
        function setupAnimations() {
            // Add staggered animation to gallery items
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            galleryItems.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.05}s`;
            });
            
            // Intersection Observer for scroll animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            // Observe all animated elements
            document.querySelectorAll('.fade-in, .zoom-in, .slide-in').forEach(el => {
                observer.observe(el);
            });
        }

        // Show Notification
        function showNotification(message) {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = 'fixed bottom-4 right-4 bg-[#2a6b4e] text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-full transition-transform duration-300 z-50';
            notification.innerHTML = `
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-3"></i>
                    <span>${message}</span>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.classList.remove('translate-y-full');
            }, 100);
            
            // Remove after delay
            setTimeout(() => {
                notification.classList.add('translate-y-full');
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    document.getElementById('mobileMenu').classList.add('hidden');
                }
            });
        });

        // Add shine effect on hover
        document.querySelectorAll('.shine-effect').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.02)';
            });
            
            element.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });

        // Image zoom enhancement
        document.querySelectorAll('.image-zoom-container').forEach(container => {
            const img = container.querySelector('.image-zoom');
            
            container.addEventListener('mouseenter', function() {
                img.style.transform = 'scale(1.1)';
            });
            
            container.addEventListener('mouseleave', function() {
                img.style.transform = 'scale(1)';
            });
        });
    </script>
</body>
</html>