<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Adventure Canvas Co.</title>
    <meta name="description" content="Complete event tent solutions, hiking gear rentals, custom canvas products, and professional event organization services.">
    
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
            --accent: #3a8b6f;
        }
        
        .btn-primary {
            @apply bg-[#2a6b4e] text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:bg-[#3a8b6f] hover:shadow-lg;
        }
        
        .btn-secondary {
            @apply bg-[#e6b325] text-gray-800 px-6 py-3 rounded-lg font-semibold transition-all duration-300 hover:bg-[#f0c040] hover:shadow-lg;
        }
        
        .card-hover {
            @apply transition-all duration-300 hover:-translate-y-1 hover:shadow-xl;
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Hide scrollbar but keep functionality */
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
@include('layouts.navigation')


    <!-- Hero Section -->
    <section class="relative py-20 md:py-32 overflow-hidden bg-gradient-to-br from-[#2a6b4e] via-[#3a8b6f] to-[#1e4f3a] text-white">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070'); background-size: cover; background-position: center;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Comprehensive Outdoor Solutions
                </h1>
                <p class="text-xl mb-8 text-gray-100 max-w-3xl mx-auto">
                    From corporate events to mountain expeditions, we provide end-to-end solutions with premium equipment and expert service.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#event-services" class="btn-secondary">
                        <i class="fas fa-tents mr-2"></i> Event Services
                    </a>
                    <a href="#gear-rentals" class="bg-white text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                        <i class="fas fa-hiking mr-2"></i> Gear Rentals
                    </a>
                    <a href="#contact-form" class="btn-primary">
                        <i class="fas fa-calendar-check mr-2"></i> Book Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Navigation -->
    <section class="sticky z-40 bg-white shadow-md py-4">
        <div class="container mx-auto px-4">
            <div class="flex overflow-x-auto space-x-6 py-2 hide-scrollbar">
                <a href="#event-services" class="flex-shrink-0 text-gray-600 hover:text-[#2a6b4e] font-medium px-3 py-2 rounded-lg hover:bg-gray-50 transition">
                    <i class="fas fa-tents mr-2"></i> Event Services
                </a>
                <a href="#gear-rentals" class="flex-shrink-0 text-gray-600 hover:text-[#2a6b4e] font-medium px-3 py-2 rounded-lg hover:bg-gray-50 transition">
                    <i class="fas fa-hiking mr-2"></i> Gear Rentals
                </a>
                <a href="#custom-products" class="flex-shrink-0 text-gray-600 hover:text-[#2a6b4e] font-medium px-3 py-2 rounded-lg hover:bg-gray-50 transition">
                    <i class="fas fa-edit mr-2"></i> Custom Products
                </a>
                <a href="#event-organization" class="flex-shrink-0 text-gray-600 hover:text-[#2a6b4e] font-medium px-3 py-2 rounded-lg hover:bg-gray-50 transition">
                    <i class="fas fa-calendar-alt mr-2"></i> Event Planning
                </a>
                {{-- <a href="#pricing" class="flex-shrink-0 text-gray-600 hover:text-[#2a6b4e] font-medium px-3 py-2 rounded-lg hover:bg-gray-50 transition">
                    <i class="fas fa-tags mr-2"></i> Pricing
                </a> --}}
                <a href="#faq" class="flex-shrink-0 text-gray-600 hover:text-[#2a6b4e] font-medium px-3 py-2 rounded-lg hover:bg-gray-50 transition">
                    <i class="fas fa-question-circle mr-2"></i> FAQ
                </a>
            </div>
        </div>
    </section>

    <!-- Event Services Section -->
    <section id="event-services" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-[#2a6b4e] text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-tents mr-2"></i> Event Solutions
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Premium Event Tents & Structures</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Transform any space into a memorable venue with our high-quality tent solutions</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Service Card 1 -->
                <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 hover:border-[#2a6b4e] transition-all duration-300 card-hover">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" alt="Marquee Tent" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#2a6b4e] rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-tent text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Marquee Tents</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Elegant marquee tents for weddings, corporate events, and festivals with complete setup services.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>30x40 ft size options</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Weather resistant materials</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Lighting included</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Flooring options available</span>
                            </li>
                        </ul>
                        {{-- <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#2a6b4e]">$800-$2,500</span>
                            <a href="contact.html?service=marquee" class="btn-primary">
                                Inquire Now
                            </a>
                        </div> --}}
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 hover:border-[#2a6b4e] transition-all duration-300 card-hover">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" alt="Clear Span Tent" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#2a6b4e] rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-building text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Clear Span Tents</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Column-free structures perfect for large events, exhibitions, and trade shows.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>No interior poles</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Various sizes available</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Heating/cooling options</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Custom branding available</span>
                            </li>
                        </ul>
                        {{-- <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#2a6b4e]">Free</span>
                            <a href="contact.html?service=clear-span" class="btn-primary">
                                Inquire Now
                            </a>
                        </div> --}}
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 hover:border-[#2a6b4e] transition-all duration-300 card-hover">
                    <div class="h-48 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" alt="Camping Tents" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-[#2a6b4e] rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-campground text-white text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Camping Tents</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Durable camping tents for outdoor events, festivals, and group camping expeditions.</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>2-8 person sizes</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Waterproof & UV resistant</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Easy setup design</span>
                            </li>
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span>Rental & purchase options</span>
                            </li>
                        </ul>
                        {{-- <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-[#2a6b4e]">$25-$100/day</span>
                            <a href="contact.html?service=camping" class="btn-primary">
                                Inquire Now
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>

            <!-- Additional Services -->
            <div class="bg-gradient-to-r from-[#f8f9fa] to-[#e9ecef] rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Additional Event Services</h3>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                            <i class="fas fa-chair text-[#2a6b4e] text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Seating & Tables</h4>
                        <p class="text-gray-600 text-sm">Complete seating arrangements for any event size</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                            <i class="fas fa-lightbulb text-[#2a6b4e] text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Lighting Solutions</h4>
                        <p class="text-gray-600 text-sm">Ambient and functional lighting setups</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                            <i class="fas fa-thermometer-half text-[#2a6b4e] text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Climate Control</h4>
                        <p class="text-gray-600 text-sm">Heating and cooling systems for tents</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                            <i class="fas fa-tools text-[#2a6b4e] text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Setup & Teardown</h4>
                        <p class="text-gray-600 text-sm">Professional installation and removal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gear Rentals Section -->
    <section id="gear-rentals" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-[#e6b325] text-gray-800 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-hiking mr-2"></i> Outdoor Gear
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Premium Hiking & Camping Equipment</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Top-quality gear for every adventure, available for rental or purchase</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- Category 1 -->
                <div class="bg-white rounded-xl p-6 hover:shadow-xl transition-shadow duration-300 card-hover">
                    <div class="w-12 h-12 bg-[#2a6b4e] rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-campground text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Camping Tents</h3>
                    <p class="text-gray-600 text-sm mb-4">Various sizes for solo to group camping with premium features</p>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">2-person tent</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 2500/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">4-person tent</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 4000/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Family tent (6-person)</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 5000/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Dome tent (2-person)</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 3000/day</span>
                        </div>
                    </div>
                    <a href="rent?category=tents" class="inline-block mt-4 text-[#2a6b4e] font-semibold text-sm hover:underline">
                        View All Tents <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <!-- Category 2 -->
                <div class="bg-white rounded-xl p-6 hover:shadow-xl transition-shadow duration-300 card-hover">
                    <div class="w-12 h-12 bg-[#2a6b4e] rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-hiking text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Hiking Gear</h3>
                    <p class="text-gray-600 text-sm mb-4">Essential equipment for day hikes and multi-day treks</p>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Day backpack</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 1500/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Trekking poles</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 1000/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Hydration pack</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 1200/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Headlamp</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 500/day</span>
                        </div>
                    </div>
                    <a href="rent?category=hiking" class="inline-block mt-4 text-[#2a6b4e] font-semibold text-sm hover:underline">
                        View All Gear <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <!-- Category 3 -->
                <div class="bg-white rounded-xl p-6 hover:shadow-xl transition-shadow duration-300 card-hover">
                    <div class="w-12 h-12 bg-[#2a6b4e] rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-snowboarding text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Sleeping Systems</h3>
                    <p class="text-gray-600 text-sm mb-4">Comfortable sleeping solutions for outdoor adventures</p>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Sleeping bag</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 1000/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Sleeping pad</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 1200/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Camp pillow</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh 200/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Cot</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 2500/day</span>
                        </div>
                    </div>
                    <a href="products.html?category=sleeping" class="inline-block mt-4 text-[#2a6b4e] font-semibold text-sm hover:underline">
                        View Sleep Systems <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <!-- Category 4 -->
                <div class="bg-white rounded-xl p-6 hover:shadow-xl transition-shadow duration-300 card-hover">
                    <div class="w-12 h-12 bg-[#2a6b4e] rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-fire text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Cooking & Food</h3>
                    <p class="text-gray-600 text-sm mb-4">Complete cooking setups for outdoor meals</p>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Camp stove</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh 180/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Cookware set</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 400/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Cooler</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 800/day</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-700">Water filter</span>
                            <span class="font-semibold text-[#2a6b4e]">Ksh. 700/day</span>
                        </div>
                    </div>
                    <a href="rent?category=cooking" class="inline-block mt-4 text-[#2a6b4e] font-semibold text-sm hover:underline">
                        View Cooking Gear <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Rental Packages -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Popular Rental Packages</h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Package 1 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:border-[#2a6b4e] transition-all duration-300 card-hover">
                        <div class="p-6">
                            <div class="text-center mb-6">
                                <div class="inline-block px-4 py-1 bg-gray-100 rounded-full text-sm font-semibold text-gray-700 mb-2">
                                    3-Day Weekend
                                </div>
                                <h4 class="text-xl font-bold text-gray-800">Weekend Warrior</h4>
                                <div class="text-3xl font-bold text-[#2a6b4e] mt-2">Ksh. 20, 000</div>
                                <p class="text-gray-500 text-sm">per person</p>
                            </div>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">4-person tent</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">2 sleeping bags</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">Camp stove & cookware</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">2 headlamps</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">First aid kit</span>
                                </li>
                            </ul>
                            <button onclick="openBookingModal('weekend-warrior')" class="btn-primary w-full">
                                Book This Package
                            </button>
                        </div>
                    </div>

                    <!-- Package 2 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-[#2a6b4e] card-hover">
                        <div class="p-6">
                            <div class="text-center mb-6">
                                <div class="inline-block px-4 py-1 bg-[#2a6b4e] text-white rounded-full text-sm font-semibold mb-2">
                                    MOST POPULAR
                                </div>
                                <div class="inline-block px-4 py-1 bg-gray-100 rounded-full text-sm font-semibold text-gray-700 mb-2">
                                    7-Day Adventure
                                </div>
                                <h4 class="text-xl font-bold text-gray-800">Ultimate Adventure</h4>
                                <div class="text-3xl font-bold text-[#2a6b4e] mt-2">Ksh. 25000</div>
                                <p class="text-gray-500 text-sm">per person</p>
                            </div>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">6-person family tent</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">4 sleeping bags & pads</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">Complete kitchen setup</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">Trekking poles (2 pairs)</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">Camp chairs (4)</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">Water filtration system</span>
                                </li>
                            </ul>
                            <button onclick="openBookingModal('ultimate-adventure')" class="btn-primary w-full">
                                Book This Package
                            </button>
                        </div>
                    </div>

                    <!-- Package 3 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:border-[#2a6b4e] transition-all duration-300 card-hover">
                        <div class="p-6">
                            <div class="text-center mb-6">
                                <div class="inline-block px-4 py-1 bg-gray-100 rounded-full text-sm font-semibold text-gray-700 mb-2">
                                    1-Day Trip
                                </div>
                                <h4 class="text-xl font-bold text-gray-800">Day Hiker</h4>
                                <div class="text-3xl font-bold text-[#2a6b4e] mt-2">Ksh. 4500</div>
                                <p class="text-gray-500 text-sm">per person</p>
                            </div>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">Day backpack (35L)</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">Trekking poles</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">Hydration bladder</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">Compact first aid kit</span>
                                </li>
                                <li class="flex items-center">
                                    <i class="fas fa-check text-green-500 mr-3"></i>
                                    <span class="text-gray-700">Emergency shelter</span>
                                </li>
                            </ul>
                            <button onclick="openBookingModal('day-hiker')" class="btn-primary w-full">
                                Book This Package
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Products Section -->
    <section id="custom-products" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-[#3a8b6f] text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-edit mr-2"></i> Custom Work
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Bespoke Canvas Products</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Custom-designed canvas solutions for businesses, events, and personal use</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Tailored to Your Needs</h3>
                    <p class="text-gray-600 mb-6">
                        Our expert craftsmen create durable, high-quality canvas products customized to your specifications. 
                        From branded merchandise to specialized outdoor gear, we bring your vision to life with attention to detail and premium materials.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-[#2a6b4e] rounded-lg flex items-center justify-center">
                                    <i class="fas fa-paint-brush text-white"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-800 mb-1">Custom Design & Branding</h4>
                                <p class="text-gray-600">We work with your logos, colors, and designs to create branded products that represent your business.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-[#2a6b4e] rounded-lg flex items-center justify-center">
                                    <i class="fas fa-ruler-combined text-white"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-800 mb-1">Made-to-Measure</h4>
                                <p class="text-gray-600">Custom dimensions and specifications to meet your exact requirements and use cases.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-[#2a6b4e] rounded-lg flex items-center justify-center">
                                    <i class="fas fa-tools text-white"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-800 mb-1">Premium Materials</h4>
                                <p class="text-gray-600">We use only the highest quality canvas, waterproofing treatments, and hardware for durability.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gray-50 rounded-xl p-4 text-center card-hover">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
                            <i class="fas fa-shopping-bag text-[#2a6b4e] text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800">Canvas Tote Bags</h4>
                        <p class="text-gray-600 text-sm mt-1">Starting at Ksh. 3500</p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-4 text-center card-hover">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
                            <i class="fas fa-briefcase text-[#2a6b4e] text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800">Laptop Cases</h4>
                        <p class="text-gray-600 text-sm mt-1">Starting at Ksh. 2500</p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-4 text-center card-hover">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
                            <i class="fas fa-tshirt text-[#2a6b4e] text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800">Aprons & Smocks</h4>
                        <p class="text-gray-600 text-sm mt-1">Starting at Ksh. 1500</p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-4 text-center card-hover">
                        <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-3 shadow-md">
                            <i class="fas fa-tarp text-[#2a6b4e] text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800">Custom Tarps</h4>
                        <p class="text-gray-600 text-sm mt-1">Starting at Ksh. 12000</p>
                    </div>
                </div>
            </div>

            <!-- Process Steps -->
            <div class="bg-gray-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">Our Customization Process</h3>
                <div class="grid md:grid-cols-4 gap-8 relative">
                    <!-- Connecting Line -->
                    <div class="hidden md:block absolute top-8 left-0 right-0 h-0.5 bg-[#2a6b4e] opacity-20"></div>
                    
                    <div class="relative text-center">
                        <div class="w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-4 relative z-10">
                            <span class="text-white font-bold text-xl">1</span>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Consultation</h4>
                        <p class="text-gray-600 text-sm">We discuss your needs, design ideas, and requirements</p>
                    </div>
                    
                    <div class="relative text-center">
                        <div class="w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-4 relative z-10">
                            <span class="text-white font-bold text-xl">2</span>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Design & Quote</h4>
                        <p class="text-gray-600 text-sm">We create designs and provide a detailed quote</p>
                    </div>
                    
                    <div class="relative text-center">
                        <div class="w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-4 relative z-10">
                            <span class="text-white font-bold text-xl">3</span>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Production</h4>
                        <p class="text-gray-600 text-sm">Our craftsmen create your custom product</p>
                    </div>
                    
                    <div class="relative text-center">
                        <div class="w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-4 relative z-10">
                            <span class="text-white font-bold text-xl">4</span>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Delivery</h4>
                        <p class="text-gray-600 text-sm">Your custom product is delivered ready to use</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Organization Section -->
    <section id="event-organization" class="py-16 bg-gradient-to-r from-[#2a6b4e] to-[#3a8b6f] text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-white bg-opacity-20 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-calendar-alt mr-2"></i> Full-Service Planning
                </span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Complete Event Organization</h2>
                <p class="text-xl text-gray-100 max-w-3xl mx-auto">Stress-free event planning from concept to execution</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-6">End-to-End Event Management</h3>
                    <p class="text-gray-100 mb-6">
                        Our experienced event planners handle every detail, ensuring your event runs smoothly from start to finish. 
                        We coordinate with vendors, manage logistics, and provide on-site support so you can focus on enjoying your event.
                    </p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-clipboard-list"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold mb-1">Comprehensive Planning</h4>
                                <p class="text-gray-100 text-sm">Detailed timelines, budget management, and vendor coordination</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-truck-moving"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold mb-1">Logistics Management</h4>
                                <p class="text-gray-100 text-sm">Equipment delivery, setup, teardown, and transportation</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold mb-1">On-Site Coordination</h4>
                                <p class="text-gray-100 text-sm">Dedicated event manager present throughout your event</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-4">
                        <a href="#contact-form" class="btn-secondary">
                            <i class="fas fa-calendar-check mr-2"></i> Book Planning Session
                        </a>
                        <a href="#" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-6 py-3 rounded-lg font-semibold transition">
                            <i class="fas fa-download mr-2"></i> Download Planning Guide
                        </a>
                    </div>
                </div>
                
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-8">
                    <h4 class="text-xl font-bold mb-6">Event Types We Specialize In</h4>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center hover:bg-opacity-10 transition cursor-pointer">
                            <i class="fas fa-glass-cheers text-2xl mb-2"></i>
                            <h5 class="font-bold">Weddings</h5>
                        </div>
                        <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center hover:bg-opacity-10 transition cursor-pointer">
                            <i class="fas fa-briefcase text-2xl mb-2"></i>
                            <h5 class="font-bold">Corporate Events</h5>
                        </div>
                        <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center hover:bg-opacity-10 transition cursor-pointer">
                            <i class="fas fa-music text-2xl mb-2"></i>
                            <h5 class="font-bold">Festivals</h5>
                        </div>
                        <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center hover:bg-opacity-10 transition cursor-pointer">
                            <i class="fas fa-graduation-cap text-2xl mb-2"></i>
                            <h5 class="font-bold">Graduations</h5>
                        </div>
                        <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center hover:bg-opacity-10 transition cursor-pointer">
                            <i class="fas fa-utensils text-2xl mb-2"></i>
                            <h5 class="font-bold">Food Festivals</h5>
                        </div>
                        <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center hover:bg-opacity-10 transition cursor-pointer">
                            <i class="fas fa-handshake text-2xl mb-2"></i>
                            <h5 class="font-bold">Fundraisers</h5>
                        </div>
                        <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center hover:bg-opacity-10 transition cursor-pointer">
                            <i class="fas fa-birthday-cake text-2xl mb-2"></i>
                            <h5 class="font-bold">Birthday Parties</h5>
                        </div>
                        <div class="bg-white bg-opacity-5 rounded-xl p-4 text-center hover:bg-opacity-10 transition cursor-pointer">
                            <i class="fas fa-calendar-day text-2xl mb-2"></i>
                            <h5 class="font-bold">Seasonal Events</h5>
                        </div>
                    </div>
                    
                    <div class="mt-8 p-4 bg-white bg-opacity-5 rounded-xl">
                        <h5 class="font-bold mb-2">Typical Planning Timeline</h5>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-sm">Initial consultation & concept</span>
                                <span class="text-sm font-semibold">1-2 weeks</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm">Vendor selection & booking</span>
                                <span class="text-sm font-semibold">2-4 weeks</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm">Equipment procurement</span>
                                <span class="text-sm font-semibold">3-6 weeks</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm">Final preparations</span>
                                <span class="text-sm font-semibold">1-2 weeks</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-gray-100 text-gray-800 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-tags mr-2"></i> Transparent Pricing
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Simple, Clear Pricing</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">No hidden fees. Choose the package that fits your needs.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto mb-12">
                <!-- Basic Plan -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden bg-white card-hover">
                    <div class="p-8">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Basic Rental</h3>
                            <div class="flex items-baseline justify-center">
                                <span class="text-4xl font-bold text-[#2a6b4e]">Ksh. 50000</span>
                                <span class="text-gray-500 ml-2">/event</span>
                            </div>
                            <p class="text-gray-600 mt-2">Perfect for small gatherings and simple setups</p>
                        </div>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Standard tent (20x30 ft)</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Basic setup & teardown</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-times text-gray-300 mr-3"></i>
                                <span class="text-gray-400">No lighting included</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-times text-gray-300 mr-3"></i>
                                <span class="text-gray-400">No flooring</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-times text-gray-300 mr-3"></i>
                                <span class="text-gray-400">No climate control</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-times text-gray-300 mr-3"></i>
                                <span class="text-gray-400">No event coordination</span>
                            </li>
                        </ul>
                        
                        <a href="contact.html?plan=basic" class="btn-secondary w-full text-center">
                            Get Basic Quote
                        </a>
                    </div>
                </div>
                
                <!-- Professional Plan -->
                <div class="border-2 border-[#2a6b4e] rounded-2xl overflow-hidden bg-white shadow-xl card-hover">
                    <div class="bg-[#2a6b4e] text-white text-center py-3">
                        <span class="font-bold">MOST POPULAR</span>
                    </div>
                    
                    <div class="p-8">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Professional Package</h3>
                            <div class="flex items-baseline justify-center">
                                <span class="text-4xl font-bold text-[#2a6b4e]">Ksh. 120,000</span>
                                <span class="text-gray-500 ml-2">/event</span>
                            </div>
                            <p class="text-gray-600 mt-2">Complete solution for most events</p>
                        </div>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Premium tent (30x40 ft)</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Full setup & teardown</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Ambient lighting package</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Basic flooring included</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Climate control options</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Basic event coordination</span>
                            </li>
                        </ul>
                        
                        <a href="contact.html?plan=professional" class="btn-primary w-full text-center">
                            Get Professional Quote
                        </a>
                    </div>
                </div>
                
                <!-- Premium Plan -->
                <div class="border border-gray-200 rounded-2xl overflow-hidden bg-white card-hover">
                    <div class="p-8">
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Premium Service</h3>
                            <div class="flex items-baseline justify-center">
                                <span class="text-4xl font-bold text-[#2a6b4e]">Custom</span>
                            </div>
                            <p class="text-gray-600 mt-2">Full-service planning for large/complex events</p>
                        </div>
                        
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Custom tent sizing & design</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Professional setup crew</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Premium lighting design</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Premium flooring options</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Full climate control system</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                <span class="text-gray-800">Complete event coordination</span>
                            </li>
                        </ul>
                        
                        <a href="contact.html?plan=premium" class="btn-secondary w-full text-center">
                            Request Custom Quote
                        </a>
                    </div>
                </div>
            </div>

            <!-- Price Calculator -->
            <div class="bg-gray-50 rounded-2xl p-8 max-w-3xl mx-auto">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Quick Price Estimator</h3>
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700 mb-2">Service Type</label>
                        <select id="serviceType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent">
                            <option value="event-tent">Event Tent Rental</option>
                            <option value="gear-rental">Gear Rental</option>
                            <option value="event-planning">Event Planning</option>
                            <option value="custom-product">Custom Product</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Duration</label>
                        <select id="duration" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent">
                            <option value="1">1 Day</option>
                            <option value="3">3 Days (Weekend)</option>
                            <option value="7">1 Week</option>
                            <option value="30">1 Month</option>
                        </select>
                    </div>
                </div>
                
                <div class="text-center">
                    <button onclick="calculateEstimate()" class="btn-primary px-8">
                        <i class="fas fa-calculator mr-2"></i> Calculate Estimate
                    </button>
                    <div id="estimateResult" class="mt-6 hidden">
                        <div class="text-2xl font-bold text-[#2a6b4e] mb-2">Estimated Cost: <span id="estimatedCost">$0</span></div>
                        <p class="text-gray-600">This is an estimate. Contact us for an exact quote.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-gray-200 text-gray-800 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-question-circle mr-2"></i> FAQ
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Find answers to common questions about our services</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="space-y-4" x-data="{ open: null }">
                    <!-- FAQ 1 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <button @click="open = open === 1 ? null : 1" 
                                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-semibold text-gray-800">How far in advance should I book event tents?</span>
                            <i :class="open === 1 ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" 
                               class="text-[#2a6b4e]"></i>
                        </button>
                        <div x-show="open === 1" x-collapse class="px-6 pb-4">
                            <p class="text-gray-600">We recommend booking at least 3-6 months in advance for weddings and major events, and 1-2 months for corporate events. Last-minute bookings may be available depending on inventory.</p>
                            <div class="mt-3 p-3 bg-gray-50 rounded-lg">
                                <p class="text-sm text-gray-700">Peak season (May-September) books faster, so early booking is advised.</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <button @click="open = open === 2 ? null : 2" 
                                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-semibold text-gray-800">What is included in your gear rental packages?</span>
                            <i :class="open === 2 ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" 
                               class="text-[#2a6b4e]"></i>
                        </button>
                        <div x-show="open === 2" x-collapse class="px-6 pb-4">
                            <p class="text-gray-600">All gear rental packages include the equipment listed, basic instructions for use, and cleaning upon return. We do not provide transportation or setup at your campsite for gear rentals (this service is available for event tents).</p>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <button @click="open = open === 3 ? null : 3" 
                                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-semibold text-gray-800">Do you provide setup and teardown services?</span>
                            <i :class="open === 3 ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" 
                               class="text-[#2a6b4e]"></i>
                        </button>
                        <div x-show="open === 3" x-collapse class="px-6 pb-4">
                            <p class="text-gray-600">Yes! All our event tent packages include professional setup and teardown. For gear rentals, we provide setup instructions but typically do not provide on-site setup unless arranged as an additional service.</p>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <button @click="open = open === 4 ? null : 4" 
                                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-semibold text-gray-800">What is your cancellation policy?</span>
                            <i :class="open === 4 ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" 
                               class="text-[#2a6b4e]"></i>
                        </button>
                        <div x-show="open === 4" x-collapse class="px-6 pb-4">
                            <p class="text-gray-600">We offer full refunds for cancellations made more than 30 days before the event date. Cancellations 15-30 days prior receive a 50% refund. Cancellations within 14 days are non-refundable but may be rescheduled based on availability.</p>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <button @click="open = open === 5 ? null : 5" 
                                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-semibold text-gray-800">How long does custom product creation take?</span>
                            <i :class="open === 5 ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" 
                               class="text-[#2a6b4e]"></i>
                        </button>
                        <div x-show="open === 5" x-collapse class="px-6 pb-4">
                            <p class="text-gray-600">Custom product timelines vary based on complexity. Simple customizations (logo printing on existing products) take 2-3 weeks. Completely custom designs from scratch typically take 4-6 weeks from design approval to delivery.</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <p class="text-gray-600 mb-4">Still have questions?</p>
                    <a href="#contact-form" class="btn-primary px-8">
                        <i class="fas fa-envelope mr-2"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section id="contact-form" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-gradient-to-r from-[#2a6b4e] to-[#3a8b6f] rounded-2xl overflow-hidden">
                <div class="grid md:grid-cols-2">
                    <div class="p-8 md:p-12 text-white">
                        <h2 class="text-3xl font-bold mb-6">Ready to Start Your Project?</h2>
                        <p class="text-gray-100 mb-6">
                            Contact us for a free consultation. We'll discuss your needs and provide a detailed quote within 24 hours.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="fas fa-phone text-xl mr-4"></i>
                                <div>
                                    <p class="font-bold">Call Us</p>
                                    <p class="text-gray-100">+254 701596171</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-xl mr-4"></i>
                                <div>
                                    <p class="font-bold">Email Us</p>
                                    <p class="text-gray-100">info@nakurutents.com</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-clock text-xl mr-4"></i>
                                <div>
                                    <p class="font-bold">Response Time</p>
                                    <p class="text-gray-100">Within 24 hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Service Inquiry Form</h3>
                        <form id="serviceInquiryForm" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 mb-2">Full Name *</label>
                                    <input type="text" name="name" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent"
                                           placeholder="John Smith">
                                </div>
                                
                                <div>
                                    <label class="block text-gray-700 mb-2">Email Address *</label>
                                    <input type="email" name="email" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent"
                                           placeholder="john@example.com">
                                </div>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-gray-700 mb-2">Phone Number *</label>
                                    <input type="tel" name="phone" required 
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent"
                                           placeholder="(555) 123-4567">
                                </div>
                                
                                <div>
                                    <label class="block text-gray-700 mb-2">Service Needed *</label>
                                    <select name="service" required 
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent">
                                        <option value="">Select a service</option>
                                        <option value="event-tents">Event Tents & Structures</option>
                                        <option value="gear-rental">Gear Rental</option>
                                        <option value="custom-products">Custom Canvas Products</option>
                                        <option value="event-planning">Full Event Planning</option>
                                        <option value="consultation">Consultation</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 mb-2">Project Details *</label>
                                <textarea name="message" rows="4" required
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent"
                                          placeholder="Tell us about your project requirements, timeline, and any specific needs..."></textarea>
                            </div>
                            
                            <button type="submit" class="btn-primary w-full flex items-center justify-center py-4 text-lg">
                                <i class="fas fa-paper-plane mr-2"></i> Submit Inquiry
                            </button>
                            
                            <p class="text-gray-500 text-sm text-center">
                                We respect your privacy. Your information will only be used to contact you about your inquiry.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Indicators -->
    {{-- <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Trusted By Industry Leaders</h3>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-6 gap-8 items-center">
                <div class="flex justify-center">
                    <div class="w-32 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                        <span class="font-bold text-gray-400">Company Logo</span>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-32 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                        <span class="font-bold text-gray-400">Company Logo</span>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-32 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                        <span class="font-bold text-gray-400">Company Logo</span>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-32 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                        <span class="font-bold text-gray-400">Company Logo</span>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-32 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                        <span class="font-bold text-gray-400">Company Logo</span>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-32 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                        <span class="font-bold text-gray-400">Company Logo</span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

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
                        <li><a href="services.html" class="text-white">Services</a></li>
                        <li><a href="products.html" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="events.html" class="text-gray-400 hover:text-white">Events</a></li>
                        <li><a href="blog.html" class="text-gray-400 hover:text-white">Blog</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#event-services" class="text-gray-400 hover:text-white">Event Tents Rental</a></li>
                        <li><a href="#gear-rentals" class="text-gray-400 hover:text-white">Gear Rental</a></li>
                        <li><a href="#custom-products" class="text-gray-400 hover:text-white">Custom Canvas Products</a></li>
                        <li><a href="#event-organization" class="text-gray-400 hover:text-white">Event Planning</a></li>
                        <li><a href="#contact-form" class="text-gray-400 hover:text-white">Get a Quote</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Subscribe for outdoor tips and exclusive offers</p>
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
                <p class="text-gray-400 text-sm">© 2026 Nakuru Tents $ Canvas. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Booking Modal -->
    <div id="bookingModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full p-8 relative">
            <button onclick="closeBookingModal()" class="absolute top-4 right-4 text-2xl text-gray-500 hover:text-gray-700">&times;</button>
            <h3 class="text-2xl font-bold mb-4">Book Rental Package</h3>
            <p class="text-gray-600 mb-6" id="modalPackageName">Package details will appear here</p>
            <form id="bookingForm" class="space-y-4">
                <input type="hidden" id="selectedPackage" name="package">
                <div>
                    <label class="block text-gray-700 mb-2">Start Date *</label>
                    <input type="date" name="start_date" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-gray-700 mb-2">Number of People *</label>
                    <input type="number" name="people" min="1" required 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent">
                </div>
                <button type="submit" class="btn-primary w-full">
                    Continue to Checkout
                </button>
            </form>
            <p class="text-gray-500 text-sm mt-4">You'll be contacted within 24 hours to confirm your booking.</p>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-xl max-w-md w-full p-8 text-center">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check text-green-600 text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Inquiry Submitted!</h3>
            <p class="text-gray-600 mb-6">We'll contact you within 24 hours to discuss your requirements.</p>
            <button onclick="closeSuccessModal()" class="btn-primary">
                Close
            </button>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('mobileMenu');
            const button = document.getElementById('mobileMenuBtn');
            if (!menu.contains(event.target) && !button.contains(event.target) && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
            }
        });

        // Price estimator
        function calculateEstimate() {
            const serviceType = document.getElementById('serviceType').value;
            const duration = parseInt(document.getElementById('duration').value);
            
            let basePrice = 0;
            switch(serviceType) {
                case 'event-tent': basePrice = 500; break;
                case 'gear-rental': basePrice = 100; break;
                case 'event-planning': basePrice = 1000; break;
                case 'custom-product': basePrice = 300; break;
            }
            
            let multiplier = 1;
            if (duration > 1) multiplier = duration * 0.8; // 20% discount for multi-day
            
            const estimatedCost = basePrice * multiplier;
            
            document.getElementById('estimatedCost').textContent = '$' + Math.round(estimatedCost).toLocaleString();
            document.getElementById('estimateResult').classList.remove('hidden');
        }

        // Booking modal functions
        let currentPackage = '';
        
        function openBookingModal(packageId) {
            currentPackage = packageId;
            const modal = document.getElementById('bookingModal');
            const packageName = document.getElementById('modalPackageName');
            const packageInput = document.getElementById('selectedPackage');
            
            // Set package details based on ID
            let name = '';
            switch(packageId) {
                case 'weekend-warrior':
                    name = 'Weekend Warrior Package (3 days)';
                    break;
                case 'ultimate-adventure':
                    name = 'Ultimate Adventure Package (7 days)';
                    break;
                case 'day-hiker':
                    name = 'Day Hiker Package (1 day)';
                    break;
            }
            
            packageName.textContent = name;
            packageInput.value = packageId;
            modal.classList.remove('hidden');
        }
        
        function closeBookingModal() {
            document.getElementById('bookingModal').classList.add('hidden');
        }
        
        function closeSuccessModal() {
            document.getElementById('successModal').classList.add('hidden');
        }

        // Form submission
        document.getElementById('serviceInquiryForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // In a real app, this would send data to your backend
            document.getElementById('successModal').classList.remove('hidden');
            this.reset();
        });

        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            closeBookingModal();
            document.getElementById('successModal').classList.remove('hidden');
            this.reset();
        });

        // Intersection Observer for active nav highlighting
        const observerOptions = {
            threshold: 0.3
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    document.querySelectorAll('a[href^="#"]').forEach(link => {
                        link.classList.remove('text-[#2a6b4e]', 'bg-gray-50');
                        if (link.getAttribute('href') === `#${id}`) {
                            link.classList.add('text-[#2a6b4e]', 'bg-gray-50');
                        }
                    });
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section[id]').forEach(section => {
            observer.observe(section);
        });

        // Set minimum date for booking to today
        const today = new Date().toISOString().split('T')[0];
        document.querySelector('input[type="date"]').min = today;
    </script>
</body>
</html>