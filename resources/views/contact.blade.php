<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Adventure Canvas Co.</title>
    <meta name="description" content="Get in touch with Adventure Canvas Co. for event tents, hiking gear, and outdoor equipment inquiries.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Leaflet CSS for Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
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
        
        @keyframes slideInLeft {
            from { transform: translateX(-30px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideInRight {
            from { transform: translateX(30px); opacity: 0; }
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
        
        .slide-in-left {
            animation: slideInLeft 0.5s ease-out forwards;
        }
        
        .slide-in-right {
            animation: slideInRight 0.5s ease-out forwards;
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        .bounce-animation {
            animation: bounce 0.5s ease infinite;
        }
        
        /* Form Styles */
        .form-input {
            @apply w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2a6b4e] focus:border-transparent transition-all duration-300;
        }
        
        .form-input:focus {
            @apply shadow-lg;
        }
        
        .form-label {
            @apply block text-gray-700 mb-2 font-medium;
        }
        
        /* Map Container */
        #map {
            height: 400px;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }
        
        .leaflet-container {
            font-family: inherit;
        }
        
        /* Custom Map Marker */
        .custom-marker {
            background: #2a6b4e;
            border: 3px solid white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 20px rgba(42, 107, 78, 0.3);
            animation: markerPulse 2s infinite;
        }
        
        @keyframes markerPulse {
            0%, 100% { transform: scale(1); box-shadow: 0 0 20px rgba(42, 107, 78, 0.3); }
            50% { transform: scale(1.1); box-shadow: 0 0 30px rgba(42, 107, 78, 0.5); }
        }
        
        .custom-marker i {
            color: white;
            font-size: 18px;
        }
        
        /* Contact Card Hover Effects */
        .contact-card {
            @apply transition-all duration-300 hover:-translate-y-2 hover:shadow-xl;
        }
        
        /* Success/Error Messages */
        .success-message {
            @apply bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg;
        }
        
        .error-message {
            @apply bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg;
        }
        
        /* Loading Animation */
        .loading-spinner {
            border: 3px solid #f3f3f3;
            border-top: 3px solid #2a6b4e;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            animation: spin 1s linear infinite;
            display: inline-block;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
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
        
        /* Section Background Pattern */
        .pattern-bg {
            background-color: #f8fafc;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(42, 107, 78, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(230, 179, 37, 0.05) 0%, transparent 20%);
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
@include('layouts.navigation')


    <!-- Hero Section -->
    <section class="relative py-20 md:py-28 overflow-hidden bg-gradient-to-br from-[#2a6b4e] via-[#3a8b6f] to-[#1e4f3a] text-white">
        <!-- Animated Background -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"100\" height=\"100\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\" fill=\"%23ffffff\" fill-opacity=\"0.4\" fill-rule=\"evenodd\"/%3E%3C/svg%3E'); background-size: 200px;"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Get in Touch
                </h1>
                <p class="text-xl mb-8 text-gray-100 max-w-3xl mx-auto">
                    Ready to start your next adventure? Contact us for event planning, gear rentals, or custom canvas solutions.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#contact-form" class="btn-secondary pulse-animation">
                        <i class="fas fa-envelope mr-2"></i> Send Message
                    </a>
                    <a href="#location" class="bg-white text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                        <i class="fas fa-map-marker-alt mr-2"></i> Visit Us
                    </a>
                    <a href="tel:5551234567" class="btn-primary">
                        <i class="fas fa-phone mr-2"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#contact-info" class="flex flex-col items-center text-white/70 hover:text-white transition">
                <span class="text-sm mb-2">Scroll to explore</span>
                <i class="fas fa-chevron-down text-xl"></i>
            </a>
        </div>
    </section>

    <!-- Contact Information -->
    <section id="contact-info" class="py-16 pattern-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#2a6b4e] text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-info-circle mr-2"></i> Contact Details
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">How to Reach Us</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Multiple ways to connect with our team</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Contact Card 1 -->
                <div class="contact-card bg-white rounded-2xl p-8 text-center slide-in-left">
                    <div class="w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-phone text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Call Us</h3>
                    <p class="text-gray-600 mb-4">Speak directly with our team during business hours</p>
                    <div class="space-y-2">
                        <a href="tel:5551234567" class="text-2xl font-bold text-[#2a6b4e] hover:text-[#3a8b6f] transition block">
                            (555) 123-4567
                        </a>
                        <p class="text-gray-500 text-sm">Mon-Fri: 9AM-6PM EST</p>
                        <p class="text-gray-500 text-sm">Sat: 10AM-4PM EST</p>
                    </div>
                    <button onclick="callNumber('5551234567')" class="btn-outline mt-6 w-full">
                        <i class="fas fa-phone mr-2"></i> Call Now
                    </button>
                </div>
                
                <!-- Contact Card 2 -->
                <div class="contact-card bg-white rounded-2xl p-8 text-center fade-in">
                    <div class="w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-envelope text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Email Us</h3>
                    <p class="text-gray-600 mb-4">Send us a message and we'll respond within 24 hours</p>
                    <div class="space-y-2">
                        <a href="mailto:info@adventurecanvas.com" class="text-lg font-bold text-[#2a6b4e] hover:text-[#3a8b6f] transition block">
                            info@adventurecanvas.com
                        </a>
                        <a href="mailto:sales@adventurecanvas.com" class="text-lg font-bold text-[#2a6b4e] hover:text-[#3a8b6f] transition block">
                            sales@adventurecanvas.com
                        </a>
                        <p class="text-gray-500 text-sm">Support: support@adventurecanvas.com</p>
                    </div>
                    <button onclick="emailUs()" class="btn-primary mt-6 w-full">
                        <i class="fas fa-envelope mr-2"></i> Send Email
                    </button>
                </div>
                
                <!-- Contact Card 3 -->
                <div class="contact-card bg-white rounded-2xl p-8 text-center slide-in-right">
                    <div class="w-16 h-16 bg-[#2a6b4e] rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Visit Us</h3>
                    <p class="text-gray-600 mb-4">Come see our showroom and meet our team</p>
                    <div class="space-y-2">
                        <p class="text-gray-800 font-medium">123 Adventure Street</p>
                        <p class="text-gray-800">Outdoor City, OC 12345</p>
                        <p class="text-gray-800">United States</p>
                        <p class="text-gray-500 text-sm">Showroom Hours: Mon-Sat 10AM-6PM</p>
                    </div>
                    <button onclick="getDirections()" class="btn-outline mt-6 w-full">
                        <i class="fas fa-directions mr-2"></i> Get Directions
                    </button>
                </div>
            </div>
            
            <!-- Additional Contact Methods -->
            <div class="mt-12 bg-gradient-to-r from-[#2a6b4e] to-[#3a8b6f] rounded-2xl p-8 text-white">
                <h3 class="text-2xl font-bold mb-6 text-center">Other Ways to Connect</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-1">WhatsApp</h4>
                        <p class="text-white/80 text-sm">Quick text support</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-facebook-messenger text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-1">Messenger</h4>
                        <p class="text-white/80 text-sm">Facebook Messenger</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-comments text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-1">Live Chat</h4>
                        <p class="text-white/80 text-sm">On-site chat support</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-video text-xl"></i>
                        </div>
                        <h4 class="font-bold mb-1">Video Call</h4>
                        <p class="text-white/80 text-sm">Virtual consultation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map & Location -->
    <section id="location" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#e6b325] text-gray-800 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-map mr-2"></i> Our Location
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Find Us</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Visit our showroom and warehouse facility</p>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 fade-in">
                    <!-- Interactive Map -->
                    <div id="map" class="w-full"></div>
                    
                    <!-- Map Controls -->
                    <div class="flex flex-wrap gap-3 mt-4">
                        <button onclick="zoomIn()" class="btn-outline px-4 py-2">
                            <i class="fas fa-search-plus mr-2"></i> Zoom In
                        </button>
                        <button onclick="zoomOut()" class="btn-outline px-4 py-2">
                            <i class="fas fa-search-minus mr-2"></i> Zoom Out
                        </button>
                        <button onclick="resetMap()" class="btn-outline px-4 py-2">
                            <i class="fas fa-sync-alt mr-2"></i> Reset View
                        </button>
                        <button onclick="showSatelliteView()" class="btn-outline px-4 py-2">
                            <i class="fas fa-satellite mr-2"></i> Satellite
                        </button>
                        <button onclick="showStreetView()" class="btn-outline px-4 py-2">
                            <i class="fas fa-road mr-2"></i> Streets
                        </button>
                    </div>
                </div>
                
                <div class="fade-in" style="animation-delay: 0.2s">
                    <div class="bg-gray-50 rounded-2xl p-6 h-full">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Location Details</h3>
                        
                        <div class="space-y-4 mb-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-[#2a6b4e] rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-map-pin text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Address</h4>
                                    <p class="text-gray-600">123 Adventure Street<br>Outdoor City, OC 12345<br>United States</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-[#2a6b4e] rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-clock text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Hours</h4>
                                    <p class="text-gray-600">
                                        <span class="font-medium">Mon-Fri:</span> 9AM-6PM<br>
                                        <span class="font-medium">Saturday:</span> 10AM-4PM<br>
                                        <span class="font-medium">Sunday:</span> Appointment Only
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-[#2a6b4e] rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-car text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Parking</h4>
                                    <p class="text-gray-600">Free parking available on-site for up to 50 vehicles. Additional street parking available.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-10 h-10 bg-[#2a6b4e] rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-wheelchair text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-1">Accessibility</h4>
                                    <p class="text-gray-600">Fully wheelchair accessible facility with ramps and automatic doors.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-3">
                            <button onclick="openNavigation()" class="btn-primary w-full">
                                <i class="fas fa-directions mr-2"></i> Open in Navigation
                            </button>
                            <button onclick="copyAddress()" class="btn-outline w-full">
                                <i class="fas fa-copy mr-2"></i> Copy Address
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Nearby Locations -->
            <div class="mt-12 bg-gradient-to-r from-gray-50 to-gray-100 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Nearby Facilities</h3>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                            <i class="fas fa-utensils text-[#2a6b4e] text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Restaurants</h4>
                        <p class="text-gray-600 text-sm">10+ within 1 mile</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                            <i class="fas fa-hotel text-[#2a6b4e] text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Hotels</h4>
                        <p class="text-gray-600 text-sm">5+ within 2 miles</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                            <i class="fas fa-gas-pump text-[#2a6b4e] text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Gas Stations</h4>
                        <p class="text-gray-600 text-sm">3 within 0.5 miles</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                            <i class="fas fa-shopping-cart text-[#2a6b4e] text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Shopping</h4>
                        <p class="text-gray-600 text-sm">Mall 2 miles away</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact-form" class="py-16 pattern-bg">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-[#3a8b6f] text-white rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-paper-plane mr-2"></i> Send Message
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Contact Form</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Fill out the form below and we'll get back to you within 24 hours</p>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="fade-in">
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Send Us a Message</h3>
                        
                        <form id="contactForm" class="space-y-6">
                            <!-- Name Fields -->
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="form-label">First Name *</label>
                                    <input type="text" id="firstName" class="form-input" placeholder="John" required>
                                    <div id="firstNameError" class="text-red-500 text-sm mt-1 hidden">Please enter your first name</div>
                                </div>
                                <div>
                                    <label class="form-label">Last Name *</label>
                                    <input type="text" id="lastName" class="form-input" placeholder="Smith" required>
                                    <div id="lastNameError" class="text-red-500 text-sm mt-1 hidden">Please enter your last name</div>
                                </div>
                            </div>
                            
                            <!-- Contact Fields -->
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" id="email" class="form-input" placeholder="john@example.com" required>
                                    <div id="emailError" class="text-red-500 text-sm mt-1 hidden">Please enter a valid email address</div>
                                </div>
                                <div>
                                    <label class="form-label">Phone Number *</label>
                                    <input type="tel" id="phone" class="form-input" placeholder="(555) 123-4567" required>
                                    <div id="phoneError" class="text-red-500 text-sm mt-1 hidden">Please enter a valid phone number</div>
                                </div>
                            </div>
                            
                            <!-- Company Field -->
                            <div>
                                <label class="form-label">Company (Optional)</label>
                                <input type="text" id="company" class="form-input" placeholder="Your company name">
                            </div>
                            
                            <!-- Inquiry Type -->
                            <div>
                                <label class="form-label">Inquiry Type *</label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="inquiryType" value="event" class="mr-2" checked>
                                        <span>Event</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="inquiryType" value="product" class="mr-2">
                                        <span>Product</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="inquiryType" value="rental" class="mr-2">
                                        <span>Rental</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="inquiryType" value="other" class="mr-2">
                                        <span>Other</span>
                                    </label>
                                </div>
                            </div>
                            
                            <!-- Message -->
                            <div>
                                <label class="form-label">Message *</label>
                                <textarea id="message" rows="5" class="form-input" placeholder="Tell us about your project or inquiry..." required></textarea>
                                <div id="messageError" class="text-red-500 text-sm mt-1 hidden">Please enter your message</div>
                                <div class="text-gray-500 text-sm mt-1">Maximum 1000 characters</div>
                            </div>
                            
                            <!-- Preferred Contact -->
                            <div>
                                <label class="form-label">Preferred Contact Method</label>
                                <select id="contactMethod" class="form-input">
                                    <option value="email">Email</option>
                                    <option value="phone">Phone Call</option>
                                    <option value="text">Text Message</option>
                                    <option value="any">Any Method</option>
                                </select>
                            </div>
                            
                            <!-- Submit Button -->
                            <button type="submit" id="submitBtn" class="btn-primary w-full py-4">
                                <span id="submitText">Send Message</span>
                                <div id="submitSpinner" class="loading-spinner hidden ml-2 inline-block"></div>
                            </button>
                            
                            <!-- Success/Error Messages -->
                            <div id="successMessage" class="success-message hidden">
                                <i class="fas fa-check-circle mr-2"></i>
                                <span>Thank you! Your message has been sent successfully.</span>
                            </div>
                            <div id="errorMessage" class="error-message hidden">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                <span>There was an error sending your message. Please try again.</span>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="fade-in" style="animation-delay: 0.2s">
                    <div class="space-y-6">
                        <!-- FAQ -->
                        <div class="bg-white rounded-2xl shadow-lg p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-bold text-gray-700 mb-1">What's your response time?</h4>
                                    <p class="text-gray-600 text-sm">We typically respond within 24 hours during business days.</p>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-700 mb-1">Do you offer emergency services?</h4>
                                    <p class="text-gray-600 text-sm">Yes, we offer 24/7 emergency support for existing clients.</p>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-700 mb-1">Can I visit without an appointment?</h4>
                                    <p class="text-gray-600 text-sm">Yes, our showroom is open to walk-ins during business hours.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Support Hours -->
                        <div class="bg-gradient-to-r from-[#2a6b4e] to-[#3a8b6f] rounded-2xl shadow-lg p-6 text-white">
                            <h3 class="text-xl font-bold mb-4">Support Hours</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span>Monday - Friday</span>
                                    <span class="font-bold">9:00 AM - 6:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Saturday</span>
                                    <span class="font-bold">10:00 AM - 4:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Sunday</span>
                                    <span class="font-bold">Emergency Only</span>
                                </div>
                                <div class="pt-4 border-t border-white/20">
                                    <p class="text-sm text-white/80">For urgent matters outside business hours, call our emergency line: <span class="font-bold">(555) 987-6543</span></p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Media -->
                        <div class="bg-white rounded-2xl shadow-lg p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Connect With Us</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="w-12 h-12 bg-[#2a6b4e] rounded-full flex items-center justify-center hover:bg-[#3a8b6f] transition">
                                    <i class="fab fa-facebook-f text-white text-xl"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-[#2a6b4e] rounded-full flex items-center justify-center hover:bg-[#3a8b6f] transition">
                                    <i class="fab fa-instagram text-white text-xl"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-[#2a6b4e] rounded-full flex items-center justify-center hover:bg-[#3a8b6f] transition">
                                    <i class="fab fa-twitter text-white text-xl"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-[#2a6b4e] rounded-full flex items-center justify-center hover:bg-[#3a8b6f] transition">
                                    <i class="fab fa-linkedin-in text-white text-xl"></i>
                                </a>
                                <a href="#" class="w-12 h-12 bg-[#2a6b4e] rounded-full flex items-center justify-center hover:bg-[#3a8b6f] transition">
                                    <i class="fab fa-pinterest text-white text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Departments -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block px-4 py-2 bg-gray-100 text-gray-800 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-sitemap mr-2"></i> Departments
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Contact Specific Departments</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Connect directly with the team that can best assist you</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Sales Department -->
                <div class="bg-gray-50 rounded-2xl p-8 contact-card">
                    <div class="flex items-start mb-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-[#2a6b4e] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-chart-line text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Sales Department</h3>
                            <p class="text-gray-600 text-sm">For product inquiries and purchases</p>
                        </div>
                    </div>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-envelope text-[#2a6b4e] mr-3"></i>
                            <span>sales@adventurecanvas.com</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-phone text-[#2a6b4e] mr-3"></i>
                            <span>(555) 123-4001</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-user text-[#2a6b4e] mr-3"></i>
                            <span>Contact: Sarah Johnson</span>
                        </div>
                    </div>
                    <button onclick="contactSales()" class="btn-outline w-full">
                        Contact Sales
                    </button>
                </div>
                
                <!-- Support Department -->
                <div class="bg-gray-50 rounded-2xl p-8 contact-card">
                    <div class="flex items-start mb-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-[#2a6b4e] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-headset text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Customer Support</h3>
                            <p class="text-gray-600 text-sm">For technical support and assistance</p>
                        </div>
                    </div>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-envelope text-[#2a6b4e] mr-3"></i>
                            <span>support@adventurecanvas.com</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-phone text-[#2a6b4e] mr-3"></i>
                            <span>(555) 123-4002</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-user text-[#2a6b4e] mr-3"></i>
                            <span>Contact: David Park</span>
                        </div>
                    </div>
                    <button onclick="contactSupport()" class="btn-outline w-full">
                        Contact Support
                    </button>
                </div>
                
                <!-- Events Department -->
                <div class="bg-gray-50 rounded-2xl p-8 contact-card">
                    <div class="flex items-start mb-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-[#2a6b4e] rounded-lg flex items-center justify-center mr-4">
                            <i class="fas fa-calendar-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Events Department</h3>
                            <p class="text-gray-600 text-sm">For event planning and coordination</p>
                        </div>
                    </div>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-envelope text-[#2a6b4e] mr-3"></i>
                            <span>events@adventurecanvas.com</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-phone text-[#2a6b4e] mr-3"></i>
                            <span>(555) 123-4003</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-user text-[#2a6b4e] mr-3"></i>
                            <span>Contact: Michael Chen</span>
                        </div>
                    </div>
                    <button onclick="contactEvents()" class="btn-outline w-full">
                        Contact Events
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-[#2a6b4e] to-[#3a8b6f] text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Adventure?</h2>
                <p class="text-xl mb-8 text-gray-100 max-w-3xl mx-auto">
                    Contact us today for a free consultation or visit our showroom to see our products in person.
                </p>
                
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="tel:5551234567" class="btn-secondary">
                        <i class="fas fa-phone mr-2"></i> Call Now
                    </a>
                    <button onclick="scheduleCall()" class="bg-white text-gray-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                        <i class="fas fa-calendar mr-2"></i> Schedule Call
                    </button>
                    <a href="#contact-form" class="btn-outline border-white text-white hover:bg-white hover:text-[#2a6b4e]">
                        <i class="fas fa-envelope mr-2"></i> Send Message
                    </a>
                </div>
                
                <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">24/7</div>
                        <p class="text-sm text-gray-200">Emergency Support</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">1 hr</div>
                        <p class="text-sm text-gray-200">Response Time</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">100%</div>
                        <p class="text-sm text-gray-200">Satisfaction</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold mb-2">Free</div>
                        <p class="text-sm text-gray-200">Consultation</p>
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
                    <p class="text-gray-400 mb-6">Your trusted partner for outdoor adventures and events since 2010.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="index.html" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="services.html" class="text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="products.html" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="gallery.html" class="text-gray-400 hover:text-white">Gallery</a></li>
                        <li><a href="contact.html" class="text-white">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Contact Info</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-map-marker-alt mr-3"></i>
                            <span>123 Adventure St, Outdoor City, OC 12345</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-phone mr-3"></i>
                            <span>(555) 123-4567</span>
                        </li>
                        <li class="flex items-center text-gray-400">
                            <i class="fas fa-envelope mr-3"></i>
                            <span>info@adventurecanvas.com</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Subscribe for adventure tips and updates</p>
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

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <!-- JavaScript -->
    <script>
        // Map Variables
        let map;
        let marker;
        let currentLayer = 'streets';
        
        // Business Coordinates (Example: Denver, Colorado)
        const businessLat = 39.7392;
        const businessLng = -104.9903;
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            setupEventListeners();
            initMap();
            setupFormValidation();
            setupAnimations();
        });

        // Setup Event Listeners
        function setupEventListeners() {
            // Mobile menu toggle
            document.getElementById('mobileMenuBtn').addEventListener('click', function() {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('hidden');
            });

            // Form submission
            document.getElementById('contactForm').addEventListener('submit', handleFormSubmit);

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                const menu = document.getElementById('mobileMenu');
                const button = document.getElementById('mobileMenuBtn');
                if (!menu.contains(event.target) && !button.contains(event.target) && !menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                }
            });
        }

        // Initialize Map
        function initMap() {
            // Create map instance
            map = L.map('map').setView([businessLat, businessLng], 15);
            
            // Add tile layer (OpenStreetMap)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors',
                maxZoom: 19,
            }).addTo(map);
            
            // Create custom marker
            const customIcon = L.divIcon({
                className: 'custom-marker',
                html: '<i class="fas fa-mountain-sun"></i>',
                iconSize: [40, 40],
                iconAnchor: [20, 40],
                popupAnchor: [0, -40]
            });
            
            // Add marker
            marker = L.marker([businessLat, businessLng], { icon: customIcon })
                .addTo(map)
                .bindPopup(`
                    <div class="p-2">
                        <h3 class="font-bold text-lg mb-1">Adventure Canvas Co.</h3>
                        <p class="text-gray-600">123 Adventure Street</p>
                        <p class="text-gray-600">Outdoor City, OC 12345</p>
                        <button onclick="getDirections()" class="btn-primary mt-2 w-full">
                            Get Directions
                        </button>
                    </div>
                `);
            
            // Add some points of interest around the business
            addPointsOfInterest();
        }

        // Add Points of Interest
        function addPointsOfInterest() {
            // Example points around the business (within ~1km radius)
            const points = [
                {
                    lat: businessLat + 0.002,
                    lng: businessLng + 0.002,
                    title: 'Parking Lot',
                    icon: 'car',
                    color: '#3a8b6f'
                },
                {
                    lat: businessLat - 0.003,
                    lng: businessLng - 0.001,
                    title: 'Restaurant',
                    icon: 'utensils',
                    color: '#e6b325'
                },
                {
                    lat: businessLat + 0.001,
                    lng: businessLng - 0.003,
                    title: 'Hotel',
                    icon: 'hotel',
                    color: '#2a6b4e'
                },
                {
                    lat: businessLat - 0.002,
                    lng: businessLng + 0.003,
                    title: 'Gas Station',
                    icon: 'gas-pump',
                    color: '#dc2626'
                }
            ];
            
            points.forEach(point => {
                const poiIcon = L.divIcon({
                    className: 'poi-marker',
                    html: `<div style="background: ${point.color}" class="w-8 h-8 rounded-full flex items-center justify-center">
                             <i class="fas fa-${point.icon} text-white text-sm"></i>
                           </div>`,
                    iconSize: [32, 32],
                    iconAnchor: [16, 32],
                    popupAnchor: [0, -32]
                });
                
                L.marker([point.lat, point.lng], { icon: poiIcon })
                    .addTo(map)
                    .bindPopup(`<strong>${point.title}</strong><br>Near Adventure Canvas Co.`);
            });
            
            // Add a circle to show approximate business area
            L.circle([businessLat, businessLng], {
                color: '#2a6b4e',
                fillColor: '#2a6b4e',
                fillOpacity: 0.1,
                radius: 300
            }).addTo(map);
        }

        // Map Controls
        function zoomIn() {
            map.zoomIn();
            animateButton('zoomIn');
        }

        function zoomOut() {
            map.zoomOut();
            animateButton('zoomOut');
        }

        function resetMap() {
            map.setView([businessLat, businessLng], 15);
            animateButton('resetMap');
        }

        function showSatelliteView() {
            if (currentLayer !== 'satellite') {
                map.eachLayer(layer => {
                    if (layer instanceof L.TileLayer) {
                        map.removeLayer(layer);
                    }
                });
                
                L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                    attribution: 'Tiles © Esri',
                    maxZoom: 19,
                }).addTo(map);
                
                currentLayer = 'satellite';
                animateButton('showSatelliteView');
            }
        }

        function showStreetView() {
            if (currentLayer !== 'streets') {
                map.eachLayer(layer => {
                    if (layer instanceof L.TileLayer) {
                        map.removeLayer(layer);
                    }
                });
                
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors',
                    maxZoom: 19,
                }).addTo(map);
                
                currentLayer = 'streets';
                animateButton('showStreetView');
            }
        }

        // Setup Form Validation
        function setupFormValidation() {
            const form = document.getElementById('contactForm');
            const inputs = form.querySelectorAll('input[required], textarea[required]');
            
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    validateField(this);
                });
                
                input.addEventListener('input', function() {
                    clearError(this.id);
                });
            });
        }

        // Validate Form Field
        function validateField(field) {
            const fieldId = field.id;
            const value = field.value.trim();
            let isValid = true;
            let errorMessage = '';
            
            switch(fieldId) {
                case 'firstName':
                case 'lastName':
                    if (value.length < 2) {
                        isValid = false;
                        errorMessage = 'Must be at least 2 characters';
                    }
                    break;
                    
                case 'email':
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(value)) {
                        isValid = false;
                        errorMessage = 'Please enter a valid email address';
                    }
                    break;
                    
                case 'phone':
                    const phoneRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
                    if (!phoneRegex.test(value)) {
                        isValid = false;
                        errorMessage = 'Please enter a valid phone number';
                    }
                    break;
                    
                case 'message':
                    if (value.length < 10) {
                        isValid = false;
                        errorMessage = 'Message must be at least 10 characters';
                    } else if (value.length > 1000) {
                        isValid = false;
                        errorMessage = 'Message cannot exceed 1000 characters';
                    }
                    break;
            }
            
            if (!isValid) {
                showError(fieldId, errorMessage);
                field.classList.add('border-red-500');
                field.classList.remove('border-gray-300');
            } else {
                clearError(fieldId);
                field.classList.remove('border-red-500');
                field.classList.add('border-gray-300');
            }
            
            return isValid;
        }

        // Show Error Message
        function showError(fieldId, message) {
            const errorElement = document.getElementById(`${fieldId}Error`);
            if (errorElement) {
                errorElement.textContent = message;
                errorElement.classList.remove('hidden');
            }
        }

        // Clear Error Message
        function clearError(fieldId) {
            const errorElement = document.getElementById(`${fieldId}Error`);
            if (errorElement) {
                errorElement.classList.add('hidden');
            }
        }

        // Handle Form Submission
        function handleFormSubmit(e) {
            e.preventDefault();
            
            // Get form elements
            const firstName = document.getElementById('firstName');
            const lastName = document.getElementById('lastName');
            const email = document.getElementById('email');
            const phone = document.getElementById('phone');
            const message = document.getElementById('message');
            
            // Validate all fields
            const isFirstNameValid = validateField(firstName);
            const isLastNameValid = validateField(lastName);
            const isEmailValid = validateField(email);
            const isPhoneValid = validateField(phone);
            const isMessageValid = validateField(message);
            
            if (isFirstNameValid && isLastNameValid && isEmailValid && isPhoneValid && isMessageValid) {
                // Show loading state
                const submitBtn = document.getElementById('submitBtn');
                const submitText = document.getElementById('submitText');
                const submitSpinner = document.getElementById('submitSpinner');
                
                submitText.textContent = 'Sending...';
                submitSpinner.classList.remove('hidden');
                submitBtn.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    // In a real application, this would send the data to your backend
                    const formData = {
                        firstName: firstName.value,
                        lastName: lastName.value,
                        email: email.value,
                        phone: phone.value,
                        company: document.getElementById('company').value,
                        inquiryType: document.querySelector('input[name="inquiryType"]:checked').value,
                        message: message.value,
                        contactMethod: document.getElementById('contactMethod').value
                    };
                    
                    console.log('Form submitted:', formData);
                    
                    // Show success message
                    document.getElementById('successMessage').classList.remove('hidden');
                    document.getElementById('errorMessage').classList.add('hidden');
                    
                    // Reset form
                    document.getElementById('contactForm').reset();
                    
                    // Reset button state
                    submitText.textContent = 'Send Message';
                    submitSpinner.classList.add('hidden');
                    submitBtn.disabled = false;
                    
                    // Scroll to success message
                    document.getElementById('successMessage').scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                    
                    // Show notification
                    showNotification('Message sent successfully!');
                }, 1500);
            } else {
                // Show error message
                document.getElementById('errorMessage').classList.remove('hidden');
                document.getElementById('successMessage').classList.add('hidden');
                
                // Scroll to first error
                const firstError = document.querySelector('.border-red-500');
                if (firstError) {
                    firstError.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            }
        }

        // Contact Actions
        function callNumber(number) {
            window.location.href = `tel:${number}`;
            showNotification(`Calling ${number}...`);
        }

        function emailUs() {
            window.location.href = 'mailto:info@adventurecanvas.com?subject=Inquiry%20from%20Website';
        }

        function getDirections() {
            // Using OpenStreetMap for directions
            const url = `https://www.openstreetmap.org/directions?from=&to=${businessLat},${businessLng}`;
            window.open(url, '_blank');
            showNotification('Opening directions in new tab...');
        }

        function openNavigation() {
            // For mobile devices, try to open in native maps app
            if (/Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
                window.open(`geo:${businessLat},${businessLng}?q=Adventure+Canvas+Co.`);
            } else {
                getDirections();
            }
        }

        function copyAddress() {
            const address = '123 Adventure Street, Outdoor City, OC 12345';
            navigator.clipboard.writeText(address).then(() => {
                showNotification('Address copied to clipboard!');
            });
        }

        function contactSales() {
            document.getElementById('inquiryType').value = 'sales';
            document.getElementById('message').value = 'I am interested in purchasing products from Adventure Canvas Co.';
            document.getElementById('contact-form').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        function contactSupport() {
            document.getElementById('inquiryType').value = 'support';
            document.getElementById('message').value = 'I need support with my Adventure Canvas Co. products.';
            document.getElementById('contact-form').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        function contactEvents() {
            document.getElementById('inquiryType').value = 'event';
            document.getElementById('message').value = 'I am interested in event planning services for an upcoming event.';
            document.getElementById('contact-form').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        function scheduleCall() {
            // In a real app, this would open a scheduling modal
            showNotification('Opening scheduling calendar...');
            // For demo, we'll simulate opening a scheduling link
            setTimeout(() => {
                alert('In a real application, this would open a scheduling calendar like Calendly');
            }, 500);
        }

        // Setup Animations
        function setupAnimations() {
            // Add scroll animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            // Observe all animated elements
            document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(el => {
                observer.observe(el);
            });
        }

        // Button Animation
        function animateButton(buttonId) {
            const button = document.querySelector(`[onclick*="${buttonId}"]`);
            if (button) {
                button.classList.add('scale-95');
                setTimeout(() => {
                    button.classList.remove('scale-95');
                }, 300);
            }
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

        // Add some interactive effects
        document.querySelectorAll('.contact-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>