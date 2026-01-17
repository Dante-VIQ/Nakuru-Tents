<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Adventure Canvas Co.</title>
    <meta name="description" content="Learn about our story, mission, and the team behind Adventure Canvas Co. - your trusted partner for outdoor adventures.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles & Animations -->
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
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes slideInLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideInRight {
            from { transform: translateX(50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        @keyframes shimmer {
            0% { background-position: -200% center; }
            100% { background-position: 200% center; }
        }
        
        .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
        
        .slide-in-left {
            animation: slideInLeft 0.8s ease-out forwards;
        }
        
        .slide-in-right {
            animation: slideInRight 0.8s ease-out forwards;
        }
        
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        .pulse-animation {
            animation: pulse 3s infinite;
        }
        
        .rotate-animation {
            animation: rotate 20s linear infinite;
        }
        
        .shimmer {
            background: linear-gradient(90deg, 
                rgba(255,255,255,0) 0%,
                rgba(255,255,255,0.3) 50%,
                rgba(255,255,255,0) 100%);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }
        
        /* Custom Transitions */
        .card-hover {
            @apply transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl;
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #2a6b4e 0%, #3a8b6f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Timeline Styles */
        .timeline-item {
            @apply relative pl-10 pb-10 border-l-2 border-[#2a6b4e];
        }
        
        .timeline-item::before {
            content: '';
            @apply absolute left-[-8px] top-0 w-4 h-4 bg-[#2a6b4e] rounded-full;
        }
        
        /* Team Card Hover */
        .team-card {
            @apply transition-all duration-500 hover:scale-105;
        }
        
        .team-card:hover .team-overlay {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Parallax Effect */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        /* Progress Bar Animation */
        .progress-bar {
            @apply h-2 bg-gray-200 rounded-full overflow-hidden;
        }
        
        .progress-fill {
            @apply h-full bg-[#2a6b4e] rounded-full transition-all duration-1000;
            width: 0%;
        }
        
        /* Counter Animation */
        .counter {
            @apply transition-all duration-1000;
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
        
        /* Custom Scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
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
        
        /* Loading Animation */
        .dot-flashing {
            position: relative;
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: #2a6b4e;
            color: #2a6b4e;
            animation: dot-flashing 1s infinite linear alternate;
            animation-delay: 0.5s;
        }
        
        .dot-flashing::before, .dot-flashing::after {
            content: '';
            display: inline-block;
            position: absolute;
            top: 0;
        }
        
        .dot-flashing::before {
            left: -15px;
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: #2a6b4e;
            color: #2a6b4e;
            animation: dot-flashing 1s infinite alternate;
            animation-delay: 0s;
        }
        
        .dot-flashing::after {
            left: 15px;
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background-color: #2a6b4e;
            color: #2a6b4e;
            animation: dot-flashing 1s infinite alternate;
            animation-delay: 1s;
        }
        
        @keyframes dot-flashing {
            0% { background-color: #2a6b4e; }
            50%, 100% { background-color: rgba(42, 107, 78, 0.2); }
        }
        
        /* Glitch Text Effect */
        .glitch {
            position: relative;
            animation: glitch-skew 1s infinite linear alternate-reverse;
        }
        
        .glitch::before {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            left: 2px;
            text-shadow: -2px 0 #ff00c1;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim 5s infinite linear alternate-reverse;
        }
        
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            left: -2px;
            text-shadow: -2px 0 #00fff9, 2px 2px #ff00c1;
            animation: glitch-anim2 1s infinite linear alternate-reverse;
        }
        
        @keyframes glitch-anim {
            0% { clip: rect(31px, 9999px, 94px, 0); }
            5% { clip: rect(112px, 9999px, 76px, 0); }
            10% { clip: rect(85px, 9999px, 77px, 0); }
            15% { clip: rect(27px, 9999px, 97px, 0); }
            20% { clip: rect(64px, 9999px, 98px, 0); }
            100% { clip: rect(68px, 9999px, 92px, 0); }
        }
        
        @keyframes glitch-anim2 {
            0% { clip: rect(65px, 9999px, 100px, 0); }
            5% { clip: rect(52px, 9999px, 74px, 0); }
            10% { clip: rect(79px, 9999px, 85px, 0); }
            15% { clip: rect(75px, 9999px, 5px, 0); }
            20% { clip: rect(67px, 9999px, 61px, 0); }
            100% { clip: rect(10px, 9999px, 35px, 0); }
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
@include('layouts.navigation')


    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center overflow-hidden bg-gradient-to-br from-[#2a6b4e] via-[#3a8b6f] to-[#1e4f3a] text-white">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <!-- Floating shapes -->
            <div class="absolute top-1/4 left-10 w-16 h-16 bg-white/10 rounded-full float-animation" style="animation-delay: 0s"></div>
            <div class="absolute top-1/3 right-20 w-24 h-24 bg-white/5 rounded-full float-animation" style="animation-delay: 1s"></div>
            <div class="absolute bottom-1/4 left-1/4 w-20 h-20 bg-white/8 rounded-full float-animation" style="animation-delay: 2s"></div>
            <div class="absolute bottom-1/3 right-1/3 w-12 h-12 bg-white/12 rounded-full float-animation" style="animation-delay: 3s"></div>
            
            <!-- Rotating gear icon -->
            <div class="absolute top-10 right-10 text-white/20 rotate-animation">
                <i class="fas fa-cog text-6xl"></i>
            </div>
            <div class="absolute bottom-10 left-10 text-white/15 rotate-animation" style="animation-direction: reverse;">
                <i class="fas fa-cog text-8xl"></i>
            </div>
            
            <!-- Shimmer effect -->
            <div class="absolute inset-0 shimmer"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-5xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="slide-in-left">
                        <div class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold mb-6">
                            <i class="fas fa-hiking mr-2"></i> Our Story Since 2010
                        </div>
                        
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                            Crafting Outdoor <span class="glitch text-gradient" data-text="Adventures">Adventures</span>
                        </h1>
                        
                        <p class="text-xl mb-8 text-gray-100">
                            For over a decade, we've been helping adventurers, event planners, and outdoor enthusiasts 
                            create unforgettable experiences with premium gear and expert service.
                        </p>
                        
                        <div class="flex flex-wrap gap-4">
                            <a href="#our-story" class="btn-secondary pulse-animation">
                                <i class="fas fa-book-open mr-2"></i> Read Our Story
                            </a>
                            <a href="#team" class="bg-white/20 hover:bg-white/30 text-white px-6 py-3 rounded-lg font-semibold backdrop-blur-sm transition">
                                <i class="fas fa-users mr-2"></i> Meet Our Team
                            </a>
                        </div>
                    </div>
                    
                    <div class="slide-in-right">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                                 alt="Team meeting outdoors" 
                                 class="rounded-2xl shadow-2xl w-full h-auto">
                            
                            <!-- Stats overlay -->
                            <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-6 shadow-2xl">
                                <div class="flex items-center">
                                    <div class="text-4xl font-bold text-[#2a6b4e] mr-4">13+</div>
                                    <div class="text-gray-700">
                                        <div class="font-bold">Years</div>
                                        <div class="text-sm text-gray-500">of Excellence</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Floating element -->
                            <div class="absolute -top-6 -left-6 w-16 h-16 bg-[#e6b325] rounded-2xl flex items-center justify-center shadow-xl">
                                <i class="fas fa-award text-2xl text-gray-800"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#our-story" class="flex flex-col items-center text-white/70 hover:text-white transition">
                <span class="text-sm mb-2">Scroll to explore</span>
                <i class="fas fa-chevron-down text-xl"></i>
            </a>
        </div>
    </section>

    <!-- Quick Stats -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center fade-in" style="animation-delay: 0.1s">
                    <div class="text-4xl font-bold text-[#2a6b4e] mb-2 counter" data-target="2500">0</div>
                    <div class="text-gray-600">Happy Customers</div>
                    <div class="w-12 h-1 bg-[#2a6b4e] mx-auto mt-3 rounded-full"></div>
                </div>
                
                <div class="text-center fade-in" style="animation-delay: 0.2s">
                    <div class="text-4xl font-bold text-[#2a6b4e] mb-2 counter" data-target="500">0</div>
                    <div class="text-gray-600">Events Organized</div>
                    <div class="w-12 h-1 bg-[#2a6b4e] mx-auto mt-3 rounded-full"></div>
                </div>
                
                <div class="text-center fade-in" style="animation-delay: 0.3s">
                    <div class="text-4xl font-bold text-[#2a6b4e] mb-2 counter" data-target="10000">0</div>
                    <div class="text-gray-600">Gear Rentals</div>
                    <div class="w-12 h-1 bg-[#2a6b4e] mx-auto mt-3 rounded-full"></div>
                </div>
                
                <div class="text-center fade-in" style="animation-delay: 0.4s">
                    <div class="text-4xl font-bold text-[#2a6b4e] mb-2 counter" data-target="50">0</div>
                    <div class="text-gray-600">Team Members</div>
                    <div class="w-12 h-1 bg-[#2a6b4e] mx-auto mt-3 rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section id="our-story" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#2a6b4e] text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-history mr-2"></i> Our Journey
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Story</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">From humble beginnings to industry leaders</p>
            </div>
            
            <!-- Timeline -->
            <div class="max-w-4xl mx-auto">
                <div class="relative">
                    <!-- Timeline line -->
                    <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-[#2a6b4e] opacity-30"></div>
                    
                    <!-- Timeline items -->
                    <div class="space-y-12">
                        <!-- 2010 -->
                        <div class="relative fade-in" style="animation-delay: 0.1s">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mr-6">
                                    <span class="text-white font-bold text-xl">2010</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">The Beginning</h3>
                                    <p class="text-gray-600 mb-4">
                                        Founded by two outdoor enthusiasts with a passion for quality craftsmanship. 
                                        Started with a small workshop making custom canvas tents for local camping clubs.
                                    </p>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        <span>Started in a 500 sq ft garage</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2013 -->
                        <div class="relative fade-in" style="animation-delay: 0.3s">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-16 h-16 bg-[#3a8b6f] rounded-full flex items-center justify-center mr-6">
                                    <span class="text-white font-bold text-xl">2013</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">First Major Event</h3>
                                    <p class="text-gray-600 mb-4">
                                        Provided tents for our first major corporate event. Expanded into event planning 
                                        services and hired our first full-time employees.
                                    </p>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <i class="fas fa-users mr-2"></i>
                                        <span>Team grew to 8 members</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2016 -->
                        <div class="relative fade-in" style="animation-delay: 0.5s">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mr-6">
                                    <span class="text-white font-bold text-xl">2016</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Expansion & Growth</h3>
                                    <p class="text-gray-600 mb-4">
                                        Opened our first retail store and launched online sales. Started offering 
                                        hiking gear rentals alongside our tent and event services.
                                    </p>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <i class="fas fa-store mr-2"></i>
                                        <span>First retail location opened</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2020 -->
                        <div class="relative fade-in" style="animation-delay: 0.7s">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-16 h-16 bg-[#3a8b6f] rounded-full flex items-center justify-center mr-6">
                                    <span class="text-white font-bold text-xl">2020</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Digital Transformation</h3>
                                    <p class="text-gray-600 mb-4">
                                        Launched our e-commerce platform and virtual consultation services. 
                                        Adapted to changing needs while maintaining our commitment to quality.
                                    </p>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <i class="fas fa-laptop-code mr-2"></i>
                                        <span>Full e-commerce launch</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 2023 -->
                        <div class="relative fade-in" style="animation-delay: 0.9s">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mr-6">
                                    <span class="text-white font-bold text-xl">Today</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Industry Leaders</h3>
                                    <p class="text-gray-600 mb-4">
                                        Now serving customers nationwide with a team of 50+ experts. 
                                        Continually innovating while staying true to our core values.
                                    </p>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <i class="fas fa-trophy mr-2"></i>
                                        <span>Multiple industry awards</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Values -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#e6b325] text-gray-800 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-star mr-2"></i> Our Core
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Mission & Values</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">What drives us every day</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-gray-50 rounded-2xl p-8 text-center card-hover fade-in" style="animation-delay: 0.1s">
                    <div class="w-20 h-20 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-bullseye text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Our Mission</h3>
                    <p class="text-gray-600">
                        To provide exceptional outdoor experiences through premium gear, expert service, 
                        and innovative solutions that inspire adventure and create lasting memories.
                    </p>
                </div>
                
                <div class="bg-gray-50 rounded-2xl p-8 text-center card-hover fade-in" style="animation-delay: 0.2s">
                    <div class="w-20 h-20 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-eye text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Our Vision</h3>
                    <p class="text-gray-600">
                        To be the leading provider of outdoor adventure solutions, recognized for quality, 
                        innovation, and our positive impact on outdoor communities worldwide.
                    </p>
                </div>
                
                <div class="bg-gray-50 rounded-2xl p-8 text-center card-hover fade-in" style="animation-delay: 0.3s">
                    <div class="w-20 h-20 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Our Promise</h3>
                    <p class="text-gray-600">
                        We commit to quality craftsmanship, sustainable practices, and customer satisfaction 
                        in everything we do. Your adventure is our responsibility.
                    </p>
                </div>
            </div>
            
            <!-- Values -->
            <div class="bg-gradient-to-r from-[#2a6b4e] to-[#3a8b6f] rounded-2xl p-8 text-white">
                <h3 class="text-2xl font-bold mb-8 text-center">Our Core Values</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Quality</h4>
                        <p class="text-white/80 text-sm">Excellence in every product and service</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-handshake text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Integrity</h4>
                        <p class="text-white/80 text-sm">Honest and transparent in all dealings</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-leaf text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Sustainability</h4>
                        <p class="text-white/80 text-sm">Protecting the outdoors we love</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-2">Community</h4>
                        <p class="text-white/80 text-sm">Building relationships that last</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meet Our Team -->
    {{-- <section id="team" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#3a8b6f] text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-users mr-2"></i> Our People
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Meet Our Team</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">The passionate experts behind your adventures</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- Team Member 1 -->
                <div class="team-card bg-white rounded-2xl overflow-hidden shadow-lg relative fade-in" style="animation-delay: 0.1s">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Sarah Johnson" 
                             class="w-full h-64 object-cover">
                        
                        <!-- Hover overlay -->
                        <div class="team-overlay absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 transition-all duration-500 transform translate-y-4">
                            <div class="absolute bottom-6 left-6 right-6 text-white">
                                <p class="text-sm mb-4">Outdoor enthusiast with 15+ years in adventure tourism. Leads our product development team.</p>
                                <div class="flex space-x-3">
                                    <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                                        <i class="fab fa-linkedin-in text-sm"></i>
                                    </a>
                                    <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                                        <i class="fab fa-twitter text-sm"></i>
                                    </a>
                                    <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                                        <i class="fas fa-envelope text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-1">Sarah Johnson</h3>
                        <p class="text-[#2a6b4e] font-semibold mb-2">CEO & Founder</p>
                        <p class="text-gray-500 text-sm">15+ years experience</p>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-card bg-white rounded-2xl overflow-hidden shadow-lg relative fade-in" style="animation-delay: 0.2s">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Michael Chen" 
                             class="w-full h-64 object-cover">
                        
                        <div class="team-overlay absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 transition-all duration-500 transform translate-y-4">
                            <div class="absolute bottom-6 left-6 right-6 text-white">
                                <p class="text-sm mb-4">Former professional guide turned operations expert. Ensures flawless event execution.</p>
                                <div class="flex space-x-3">
                                    <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                                        <i class="fab fa-linkedin-in text-sm"></i>
                                    </a>
                                    <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                                        <i class="fab fa-twitter text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-1">Michael Chen</h3>
                        <p class="text-[#2a6b4e] font-semibold mb-2">Operations Director</p>
                        <p class="text-gray-500 text-sm">12+ years experience</p>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-card bg-white rounded-2xl overflow-hidden shadow-lg relative fade-in" style="animation-delay: 0.3s">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="Elena Rodriguez" 
                             class="w-full h-64 object-cover">
                        
                        <div class="team-overlay absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 transition-all duration-500 transform translate-y-4">
                            <div class="absolute bottom-6 left-6 right-6 text-white">
                                <p class="text-sm mb-4">Textile engineer specializing in durable outdoor fabrics. Leads our product design team.</p>
                                <div class="flex space-x-3">
                                    <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                                        <i class="fab fa-linkedin-in text-sm"></i>
                                    </a>
                                    <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                                        <i class="fab fa-instagram text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-1">Elena Rodriguez</h3>
                        <p class="text-[#2a6b4e] font-semibold mb-2">Product Design Lead</p>
                        <p class="text-gray-500 text-sm">10+ years experience</p>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="team-card bg-white rounded-2xl overflow-hidden shadow-lg relative fade-in" style="animation-delay: 0.4s">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800" 
                             alt="David Park" 
                             class="w-full h-64 object-cover">
                        
                        <div class="team-overlay absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 transition-all duration-500 transform translate-y-4">
                            <div class="absolute bottom-6 left-6 right-6 text-white">
                                <p class="text-sm mb-4">Customer experience expert with background in adventure sports coaching.</p>
                                <div class="flex space-x-3">
                                    <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                                        <i class="fab fa-linkedin-in text-sm"></i>
                                    </a>
                                    <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                                        <i class="fab fa-twitter text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-1">David Park</h3>
                        <p class="text-[#2a6b4e] font-semibold mb-2">Customer Experience Manager</p>
                        <p class="text-gray-500 text-sm">8+ years experience</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <button id="loadMoreTeam" class="btn-outline px-8">
                    <span>View Full Team</span>
                    <i class="fas fa-spinner fa-spin ml-2 hidden"></i>
                </button>
            </div>
        </div>
    </section> --}}

    <!-- Expertise & Skills -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-gray-100 text-gray-800 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-chart-bar mr-2"></i> Our Expertise
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Areas of Excellence</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">What we're really good at</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div class="fade-in">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Our Skills & Capabilities</h3>
                    
                    <div class="space-y-6">
                        <!-- Skill 1 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-gray-800">Product Craftsmanship</span>
                                <span class="text-[#2a6b4e] font-bold">98%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" data-width="98"></div>
                            </div>
                        </div>
                        
                        <!-- Skill 2 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-gray-800">Event Planning</span>
                                <span class="text-[#2a6b4e] font-bold">95%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" data-width="95"></div>
                            </div>
                        </div>
                        
                        <!-- Skill 3 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-gray-800">Customer Satisfaction</span>
                                <span class="text-[#2a6b4e] font-bold">99%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" data-width="99"></div>
                            </div>
                        </div>
                        
                        <!-- Skill 4 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold text-gray-800">Sustainable Practices</span>
                                <span class="text-[#2a6b4e] font-bold=">92%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" data-width="92"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="fade-in" style="animation-delay: 0.2s">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Why Choose Us?</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-[#2a6b4e]/10 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-check text-[#2a6b4e]"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Industry Experience</h4>
                                <p class="text-gray-600">13+ years of specialized experience in outdoor equipment and events.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-[#2a6b4e]/10 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-check text-[#2a6b4e]"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Quality Assurance</h4>
                                <p class="text-gray-600">Rigorous testing and quality control for all products and services.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-[#2a6b4e]/10 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-check text-[#2a6b4e]"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Expert Team</h4>
                                <p class="text-gray-600">Certified professionals with real-world outdoor experience.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-[#2a6b4e]/10 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-check text-[#2a6b4e]"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Sustainable Focus</h4>
                                <p class="text-gray-600">Eco-friendly materials and practices to protect our environment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Recognition -->
    <section class="py-16 bg-gradient-to-r from-gray-50 to-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#e6b325] text-gray-800 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-trophy mr-2"></i> Recognition
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Awards & Recognition</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Celebrating excellence and innovation</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-2xl p-6 text-center card-hover fade-in" style="animation-delay: 0.1s">
                    <div class="w-16 h-16 bg-[#2a6b4e]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-[#2a6b4e] text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Outdoor Industry Award</h3>
                    <p class="text-gray-600 text-sm">Best Outdoor Equipment Provider 2022</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 text-center card-hover fade-in" style="animation-delay: 0.2s">
                    <div class="w-16 h-16 bg-[#2a6b4e]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-[#2a6b4e] text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Green Business Award</h3>
                    <p class="text-gray-600 text-sm">Sustainable Practices Excellence 2023</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 text-center card-hover fade-in" style="animation-delay: 0.3s">
                    <div class="w-16 h-16 bg-[#2a6b4e]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-star text-[#2a6b4e] text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Customer Choice Award</h3>
                    <p class="text-gray-600 text-sm">Highest Customer Satisfaction 2021-2023</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 text-center card-hover fade-in" style="animation-delay: 0.4s">
                    <div class="w-16 h-16 bg-[#2a6b4e]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-lightbulb text-[#2a6b4e] text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 mb-2">Innovation Award</h3>
                    <p class="text-gray-600 text-sm">Product Design Innovation 2022</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#2a6b4e] text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-quote-left mr-2"></i> Testimonials
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">What Our Clients Say</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Hear from adventurers, event planners, and outdoor enthusiasts</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 rounded-2xl p-8 relative fade-in" style="animation-delay: 0.1s">
                    <div class="absolute -top-4 -left-4 w-12 h-12 bg-[#2a6b4e] rounded-full flex items-center justify-center">
                        <i class="fas fa-quote-right text-white"></i>
                    </div>
                    <div class="mb-6">
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 italic">
                            "The team at Adventure Canvas transformed our corporate retreat. Their tents were flawless and their event coordination made everything stress-free."
                        </p>
                    </div>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100" 
                             alt="Alex Thompson" 
                             class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-800">Alex Thompson</h4>
                            <p class="text-gray-500 text-sm">Corporate Event Manager</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 rounded-2xl p-8 relative fade-in" style="animation-delay: 0.2s">
                    <div class="absolute -top-4 -left-4 w-12 h-12 bg-[#2a6b4e] rounded-full flex items-center justify-center">
                        <i class="fas fa-quote-right text-white"></i>
                    </div>
                    <div class="mb-6">
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-gray-600 italic">
                            "As a hiking guide, I rely on quality gear. Adventure Canvas provides the most durable equipment and their rental service is incredibly convenient."
                        </p>
                    </div>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100" 
                             alt="Maria Garcia" 
                             class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-800">Maria Garcia</h4>
                            <p class="text-gray-500 text-sm">Professional Hiking Guide</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-gray-50 rounded-2xl p-8 relative fade-in" style="animation-delay: 0.3s">
                    <div class="absolute -top-4 -left-4 w-12 h-12 bg-[#2a6b4e] rounded-full flex items-center justify-center">
                        <i class="fas fa-quote-right text-white"></i>
                    </div>
                    <div class="mb-6">
                        <div class="flex text-yellow-400 mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="text-gray-600 italic">
                            "Our wedding was magical thanks to their stunning marquee tents and flawless setup. The team went above and beyond to make our day special."
                        </p>
                    </div>
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100" 
                             alt="James & Sarah Wilson" 
                             class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-800">James & Sarah Wilson</h4>
                            <p class="text-gray-500 text-sm">Wedding Clients</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial Navigation -->
            <div class="flex justify-center mt-12 space-x-4">
                <button class="testimonial-nav w-3 h-3 bg-[#2a6b4e] rounded-full" data-slide="0"></button>
                <button class="testimonial-nav w-3 h-3 bg-gray-300 rounded-full" data-slide="1"></button>
                <button class="testimonial-nav w-3 h-3 bg-gray-300 rounded-full" data-slide="2"></button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-[#2a6b4e] to-[#3a8b6f] text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Adventure?</h2>
                <p class="text-xl mb-8 text-gray-100 max-w-3xl mx-auto">
                    Join thousands of satisfied customers who trust us for their outdoor adventures and events.
                </p>
                
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="contact.html" class="btn-secondary">
                        <i class="fas fa-calendar-check mr-2"></i> Schedule Consultation
                    </a>
                    <a href="products.html" class="bg-white text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                        <i class="fas fa-shopping-cart mr-2"></i> Shop Products
                    </a>
                    <a href="tel:5551234567" class="btn-outline border-white text-white hover:bg-white hover:text-[#2a6b4e]">
                        <i class="fas fa-phone mr-2"></i> Call Us Now
                    </a>
                </div>
                
                <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <i class="fas fa-shield-alt text-3xl mb-4"></i>
                        <p class="font-bold">Quality Guarantee</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-truck text-3xl mb-4"></i>
                        <p class="font-bold">Fast Delivery</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-headset text-3xl mb-4"></i>
                        <p class="font-bold">24/7 Support</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-recycle text-3xl mb-4"></i>
                        <p class="font-bold">Sustainable</p>
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
                        <span class="text-2xl font-bold">Nakuru Tents & Canvas</span>
                    </div>
                    <p class="text-gray-400 mb-6">Crafting outdoor adventures since 2010. Quality gear, expert service, unforgettable experiences.</p>
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
                        <li><a href="products.html" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="about.html" class="text-white">About Us</a></li>
                        <li><a href="contact.html" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Our Services</h4>
                    <ul class="space-y-3">
                        <li><a href="services.html#event-services" class="text-gray-400 hover:text-white">Event Tents</a></li>
                        <li><a href="services.html#gear-rentals" class="text-gray-400 hover:text-white">Gear Rental</a></li>
                        <li><a href="services.html#custom-products" class="text-gray-400 hover:text-white">Custom Products</a></li>
                        <li><a href="services.html#event-organization" class="text-gray-400 hover:text-white">Event Planning</a></li>
                        <li><a href="products.html" class="text-gray-400 hover:text-white">Shop Online</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Stay Updated</h4>
                    <p class="text-gray-400 mb-4">Subscribe for adventure tips and exclusive offers</p>
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
                <p class="text-gray-400 text-sm">© 2026 Nakuru Tents & Canvas. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Loading Animation -->
    <div id="loading" class="fixed inset-0 bg-white z-50 flex items-center justify-center hidden">
        <div class="text-center">
            <div class="mb-4">
                <div class="dot-flashing mx-auto"></div>
            </div>
            <p class="text-gray-600">Loading team members...</p>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            setupEventListeners();
            startCounters();
            setupScrollAnimations();
            animateProgressBars();
        });

        // Setup Event Listeners
        function setupEventListeners() {
            // Mobile menu toggle
            document.getElementById('mobileMenuBtn').addEventListener('click', function() {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('hidden');
            });

            // Load more team button
            document.getElementById('loadMoreTeam').addEventListener('click', loadMoreTeamMembers);

            // Testimonial navigation
            document.querySelectorAll('.testimonial-nav').forEach(btn => {
                btn.addEventListener('click', function() {
                    const slide = parseInt(this.dataset.slide);
                    navigateTestimonials(slide);
                });
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

        // Animated Counters
        function startCounters() {
            const counters = document.querySelectorAll('.counter');
            const speed = 200; // Lower = faster
            
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = parseInt(counter.getAttribute('data-target'));
                    const count = parseInt(counter.innerText);
                    const increment = Math.ceil(target / speed);
                    
                    if (count < target) {
                        counter.innerText = count + increment;
                        setTimeout(updateCount, 20);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                };
                
                // Start counter when in viewport
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCount();
                            observer.unobserve(entry.target);
                        }
                    });
                });
                
                observer.observe(counter);
            });
        }

        // Progress Bar Animation
        function animateProgressBars() {
            const progressBars = document.querySelectorAll('.progress-fill');
            
            progressBars.forEach(bar => {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const width = bar.getAttribute('data-width');
                            bar.style.width = width + '%';
                            observer.unobserve(entry.target);
                        }
                    });
                });
                
                observer.observe(bar);
            });
        }

        // Load More Team Members
        function loadMoreTeamMembers() {
            const btn = document.getElementById('loadMoreTeam');
            const spinner = btn.querySelector('i');
            const text = btn.querySelector('span');
            
            // Show loading animation
            document.getElementById('loading').classList.remove('hidden');
            text.textContent = 'Loading...';
            spinner.classList.remove('hidden');
            btn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                // In a real app, this would fetch more team members
                const newMembers = [
                    {
                        name: "Lisa Wang",
                        role: "Marketing Director",
                        experience: "7+ years",
                        image: "https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                        bio: "Digital marketing expert with background in outdoor tourism promotion."
                    },
                    {
                        name: "Robert Kim",
                        role: "Logistics Manager",
                        experience: "9+ years",
                        image: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                        bio: "Supply chain specialist ensuring timely delivery of all equipment."
                    },
                    {
                        name: "Amanda Smith",
                        role: "Quality Control Lead",
                        experience: "6+ years",
                        image: "https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                        bio: "Ensures all products meet our rigorous quality standards."
                    },
                    {
                        name: "Thomas Brown",
                        role: "Outdoor Guide Trainer",
                        experience: "15+ years",
                        image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800",
                        bio: "Former park ranger training our team in outdoor safety and skills."
                    }
                ];
                
                // Add new members to grid
                const teamGrid = document.querySelector('#team .grid');
                
                newMembers.forEach((member, index) => {
                    const memberCard = document.createElement('div');
                    memberCard.className = `team-card bg-white rounded-2xl overflow-hidden shadow-lg relative fade-in`;
                    memberCard.style.animationDelay = `${0.1 * (index + 5)}s`;
                    
                    memberCard.innerHTML = `
                        <div class="relative overflow-hidden">
                            <img src="${member.image}" alt="${member.name}" class="w-full h-64 object-cover">
                            <div class="team-overlay absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 transition-all duration-500 transform translate-y-4">
                                <div class="absolute bottom-6 left-6 right-6 text-white">
                                    <p class="text-sm mb-4">${member.bio}</p>
                                    <div class="flex space-x-3">
                                        <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                                            <i class="fab fa-linkedin-in text-sm"></i>
                                        </a>
                                        <a href="#" class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition">
                                            <i class="fab fa-twitter text-sm"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-1">${member.name}</h3>
                            <p class="text-[#2a6b4e] font-semibold mb-2">${member.role}</p>
                            <p class="text-gray-500 text-sm">${member.experience} experience</p>
                        </div>
                    `;
                    
                    teamGrid.appendChild(memberCard);
                });
                
                // Update button
                text.textContent = 'Team Loaded';
                spinner.classList.add('hidden');
                btn.disabled = true;
                btn.classList.add('opacity-50', 'cursor-not-allowed');
                
                // Hide loading animation
                setTimeout(() => {
                    document.getElementById('loading').classList.add('hidden');
                }, 500);
                
                // Show success message
                showNotification('Team members loaded successfully!');
            }, 1500);
        }

        // Testimonial Navigation
        let currentTestimonial = 0;
        const testimonials = document.querySelectorAll('#testimonials .grid > div');
        
        function navigateTestimonials(slide) {
            // Update active dot
            document.querySelectorAll('.testimonial-nav').forEach((dot, index) => {
                dot.classList.toggle('bg-[#2a6b4e]', index === slide);
                dot.classList.toggle('bg-gray-300', index !== slide);
            });
            
            // Animate testimonials
            testimonials.forEach((testimonial, index) => {
                if (index === slide) {
                    testimonial.classList.add('fade-in');
                    testimonial.style.display = 'block';
                } else {
                    testimonial.style.display = 'none';
                }
            });
            
            currentTestimonial = slide;
        }

        // Auto-rotate testimonials
        function autoRotateTestimonials() {
            setInterval(() => {
                const nextSlide = (currentTestimonial + 1) % testimonials.length;
                navigateTestimonials(nextSlide);
            }, 5000);
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

        // Scroll Animations
        function setupScrollAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Add animation classes based on existing classes
                        if (entry.target.classList.contains('fade-in')) {
                            entry.target.style.animationPlayState = 'running';
                        }
                        
                        // For elements that should animate once
                        if (entry.target.dataset.animated !== 'true') {
                            entry.target.dataset.animated = 'true';
                        }
                    }
                });
            }, observerOptions);
            
            // Observe all animated elements
            document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(el => {
                observer.observe(el);
            });
        }

        // Parallax Effect
        function setupParallax() {
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('.parallax');
                
                parallaxElements.forEach(element => {
                    const speed = element.dataset.speed || 0.5;
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translate3d(0, ${yPos}px, 0)`;
                });
            });
        }

        // Initialize auto-rotation
        setTimeout(autoRotateTestimonials, 3000);
        setTimeout(setupParallax, 100);

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    document.getElementById('mobileMenu').classList.add('hidden');
                }
            });
        });

        // Add some fun interactive elements
        function addInteractiveEffects() {
            // Add click effect to team cards
            document.querySelectorAll('.team-card').forEach(card => {
                card.addEventListener('click', function() {
                    this.classList.add('scale-95');
                    setTimeout(() => {
                        this.classList.remove('scale-95');
                    }, 300);
                });
            });
            
            // Add hover effect to values cards
            document.querySelectorAll('.card-hover').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        }

        // Initialize interactive effects
        setTimeout(addInteractiveEffects, 1000);
    </script>
</body>
</html>