<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Canvas Co. | Premium Tents, Hiking Gear & Event Organization</title>
    <meta name="description" content="Your one-stop for event tents, hiking equipment & custom canvas products. Expert event organization. Durable gear for every adventure.">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
        }

        /* Custom Colors */
        .bg-primary {
            background-color: #1a5d3a;
        }

        .bg-secondary {
            background-color: #f59e0b;
        }

        .text-primary {
            color: #1a5d3a;
        }

        .text-secondary {
            color: #f59e0b;
        }

        .border-primary {
            border-color: #1a5d3a;
        }

        .border-secondary {
            border-color: #f59e0b;
        }

        /* Custom Gradients */
        .gradient-bg {
            background: linear-gradient(135deg, #1a5d3a 0%, #2d8a5e 100%);
        }

        .gradient-bg-light {
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        }

        /* Custom Buttons */
        .btn-primary {
            background-color: #1a5d3a;
            color: white;
            padding: 12px 32px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #14532d;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(26, 93, 58, 0.2);
        }

        .btn-secondary {
            background-color: #f59e0b;
            color: #1a5d3a;
            padding: 12px 32px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #e69a09;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(245, 158, 11, 0.2);
        }

        .btn-outline {
            border: 2px solid #1a5d3a;
            color: #1a5d3a;
            padding: 12px 32px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            background-color: #1a5d3a;
            color: white;
            transform: translateY(-2px);
        }

        /* Card Hover Effects */
        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        /* Animation Classes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease forwards;
        }

        .animation-delay-100 {
            animation-delay: 0.1s;
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
        }

        .animation-delay-300 {
            animation-delay: 0.3s;
        }

        /* Hero Image Animation */
        .hero-image {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Mobile Menu */
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        /* Section Spacing */
        section {
            scroll-margin-top: 80px;
        }
    </style>
</head>
<body class="bg-white text-gray-800">
    <!-- Header / Navigation -->
@include('layouts.navigation')

    <!-- Hero Section -->
    <section id="home" class="relative overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8 py-12 lg:py-24">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="animate-fade-in-up">
                    <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold mb-6 leading-tight">
                        Premium Tents & Outdoor Gear for
                        <span class="text-primary">Every Adventure</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-10">
                        From stunning event installations to rugged hiking equipment—we craft durable solutions for your next journey. Your trusted partner for outdoor adventures and memorable events.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mb-12">
                        <a href="#contact" class="btn-primary text-center">
                            <i class="fas fa-calendar-alt mr-2"></i> Book Event Services
                        </a>
                        <a href="#products" class="btn-outline text-center">
                            <i class="fas fa-hiking mr-2"></i> Shop Hiking Gear
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="grid grid-cols-3 gap-6">
                        <div>
                            <div class="text-3xl font-bold text-primary mb-1">500+</div>
                            <div class="text-gray-600">Events Organized</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-primary mb-1">2K+</div>
                            <div class="text-gray-600">Happy Customers</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-primary mb-1">10+</div>
                            <div class="text-gray-600">Years Experience</div>
                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="relative animate-fade-in-up animation-delay-200">
                    <div class="hero-image relative">
                        <div class="bg-gradient-to-br from-primary to-green-600 rounded-3xl h-96 lg:h-[500px] overflow-hidden shadow-2xl">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                            <!-- This would be your hero image -->
                            <div class="w-full h-full bg-gray-300 flex items-center justify-center">
                                <div class="text-center text-white p-8">
                                    <i class="fas fa-camera text-4xl mb-4 opacity-50"></i>
                                    <p class="opacity-50">Hero Image: Event tent setup or hiking adventure</p>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Elements -->
                        <div class="absolute -top-6 -right-6 bg-secondary text-primary p-6 rounded-2xl shadow-xl">
                            <div class="text-3xl font-bold">30% Off</div>
                            <div class="text-sm">First Event Booking</div>
                        </div>

                        <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl border border-gray-200">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                                    <i class="fas fa-shield-alt text-white text-xl"></i>
                                </div>
                                <div>
                                    <div class="font-bold">Quality Guarantee</div>
                                    <div class="text-sm text-gray-600">Premium Materials</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Pattern -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-green-50 to-transparent -z-10"></div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 gradient-bg-light">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-3xl lg:text-4xl font-bold mb-6">Our Specialties</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive solutions for events, adventures, and custom needs. One provider for all your outdoor requirements.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-2xl p-8 card-hover animate-fade-in-up animation-delay-100">
                    <div class="w-16 h-16 bg-primary rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-tents text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Event Tents & Organization</h3>
                    <p class="text-gray-600 mb-6">
                        Complete event solutions including marquee tents, professional setup, and full coordination for weddings, corporate events, and festivals.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-check text-primary mr-3"></i>
                            <span>Wedding Marquees & Canopies</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-primary mr-3"></i>
                            <span>Corporate Event Setup</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-primary mr-3"></i>
                            <span>Full Event Coordination</span>
                        </div>
                    </div>
                    <a href="#contact" class="btn-primary mt-8 inline-block">Get Event Quote</a>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-2xl p-8 card-hover animate-fade-in-up animation-delay-200">
                    <div class="w-16 h-16 bg-primary rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-hiking text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Hiking & Camping Gear</h3>
                    <p class="text-gray-600 mb-6">
                        Premium backpacks, tents, sleeping bags, and equipment tested in real conditions for reliable outdoor adventures.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-check text-primary mr-3"></i>
                            <span>Durable Hiking Backpacks</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-primary mr-3"></i>
                            <span>All-Weather Camping Tents</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-primary mr-3"></i>
                            <span>Essential Camping Equipment</span>
                        </div>
                    </div>
                    <a href="#products" class="btn-primary mt-8 inline-block">View Products</a>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-2xl p-8 card-hover animate-fade-in-up animation-delay-300">
                    <div class="w-16 h-16 bg-primary rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-edit text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Custom Canvas Products</h3>
                    <p class="text-gray-600 mb-6">
                        Bespoke canvas solutions including bags, tarps, and custom designs tailored to your specific requirements and branding.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-check text-primary mr-3"></i>
                            <span>Custom Branded Tents</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-primary mr-3"></i>
                            <span>Canvas Bags & Accessories</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check text-primary mr-3"></i>
                            <span>Tailored Outdoor Solutions</span>
                        </div>
                    </div>
                    <a href="#contact" class="btn-primary mt-8 inline-block">Request Custom Design</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Preview -->
    <section id="products" class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold mb-6">Featured Products</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Top-quality gear for your outdoor adventures. Durable, reliable, and tested in real conditions.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Product 1 -->
                <div class="group card-hover">
                    <div class="bg-gray-100 rounded-2xl h-64 overflow-hidden mb-4 relative">
                        <!-- Product Image Placeholder -->
                        <div class="w-full h-full flex items-center justify-center">
                            <i class="fas fa-campground text-4xl text-gray-400"></i>
                        </div>
                        <div class="absolute top-4 right-4 bg-secondary text-primary px-3 py-1 rounded-full text-sm font-bold">
                            Best Seller
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Explorer Pro Tent</h3>
                    <p class="text-gray-600 mb-4">4-person all-weather camping tent with waterproof coating.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-2xl font-bold text-primary">$249.99</div>
                        <button class="btn-outline opacity-0 group-hover:opacity-100 transition-opacity">
                            View Details
                        </button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="group card-hover">
                    <div class="bg-gray-100 rounded-2xl h-64 overflow-hidden mb-4 relative">
                        <!-- Product Image Placeholder -->
                        <div class="w-full h-full flex items-center justify-center">
                            <i class="fas fa-hiking text-4xl text-gray-400"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Trailblazer Backpack</h3>
                    <p class="text-gray-600 mb-4">65L hiking backpack with ergonomic design and waterproof compartments.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-2xl font-bold text-primary">$159.99</div>
                        <button class="btn-outline opacity-0 group-hover:opacity-100 transition-opacity">
                            View Details
                        </button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="group card-hover">
                    <div class="bg-gray-100 rounded-2xl h-64 overflow-hidden mb-4 relative">
                        <!-- Product Image Placeholder -->
                        <div class="w-full h-full flex items-center justify-center">
                            <i class="fas fa-umbrella-beach text-4xl text-gray-400"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Deluxe Event Marquee</h3>
                    <p class="text-gray-600 mb-4">20x30ft premium event tent with waterproof canopy and side walls.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-2xl font-bold text-primary">$1,499.99</div>
                        <button class="btn-outline opacity-0 group-hover:opacity-100 transition-opacity">
                            View Details
                        </button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="group card-hover">
                    <div class="bg-gray-100 rounded-2xl h-64 overflow-hidden mb-4 relative">
                        <!-- Product Image Placeholder -->
                        <div class="w-full h-full flex items-center justify-center">
                            <i class="fas fa-bag-shopping text-4xl text-gray-400"></i>
                        </div>
                        <div class="absolute top-4 right-4 bg-primary text-white px-3 py-1 rounded-full text-sm font-bold">
                            New
                        </div>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Canvas Utility Bag</h3>
                    <p class="text-gray-600 mb-4">Heavy-duty canvas duffel bag with leather straps and brass zippers.</p>
                    <div class="flex justify-between items-center">
                        <div class="text-2xl font-bold text-primary">$89.99</div>
                        <button class="btn-outline opacity-0 group-hover:opacity-100 transition-opacity">
                            View Details
                        </button>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="#contact" class="btn-secondary px-12">
                    View All Products <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold mb-6">Our Work in Action</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    See how we transform events and equip adventurers for their journeys.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Gallery Item 1 -->
                <div class="col-span-2 md:col-span-2">
                    <div class="bg-gray-300 h-64 md:h-80 rounded-2xl overflow-hidden relative group">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="text-lg font-bold">Wedding Event Setup</div>
                            <div class="text-sm">Elegant marquee with custom lighting</div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div>
                    <div class="bg-gray-300 h-64 md:h-80 rounded-2xl overflow-hidden relative group">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div>
                    <div class="bg-gray-300 h-64 md:h-80 rounded-2xl overflow-hidden relative group">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div>
                    <div class="bg-gray-300 h-64 md:h-80 rounded-2xl overflow-hidden relative group">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div>
                    <div class="bg-gray-300 h-64 md:h-80 rounded-2xl overflow-hidden relative group">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="col-span-2 md:col-span-3">
                    <div class="bg-gray-300 h-64 md:h-80 rounded-2xl overflow-hidden relative group">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="text-lg font-bold">Mountain Expedition Gear</div>
                            <div class="text-sm">Complete hiking equipment setup</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 gradient-bg text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6">Why Choose Adventure Canvas?</h2>
                    <p class="text-xl mb-8">
                        With over a decade of experience, we've mastered the art of creating unforgettable outdoor experiences. Our passion for quality and adventure drives everything we do.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-award text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Premium Quality Materials</h3>
                                <p>We use only the finest canvas, fabrics, and materials that withstand the toughest conditions.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-users text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Expert Team</h3>
                                <p>Our team includes experienced event planners and outdoor enthusiasts who understand your needs.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Timely Delivery</h3>
                                <p>We pride ourselves on punctual setup and delivery, ensuring your event runs smoothly.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Stats -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-8 text-center">Our Impact in Numbers</h3>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-4xl lg:text-5xl font-bold mb-2">500+</div>
                            <div>Successful Events</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl lg:text-5xl font-bold mb-2">2,500+</div>
                            <div>Happy Customers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl lg:text-5xl font-bold mb-2">10+</div>
                            <div>Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl lg:text-5xl font-bold mb-2">50+</div>
                            <div>Product Varieties</div>
                        </div>
                    </div>

                    <div class="mt-8 p-4 bg-white/20 rounded-xl">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-star text-primary text-xl"></i>
                            </div>
                            <div>
                                <div class="font-bold">4.9/5 Rating</div>
                                <div class="text-sm">Based on 284 customer reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-6">Get Your Free Quote</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Ready to start your adventure or plan your event? Contact us today for a personalized quote.
                    </p>
                </div>

                <div class="grid lg:grid-cols-3 gap-8">
                    <!-- Contact Info -->
                    <div class="lg:col-span-1">
                        <div class="bg-gradient-to-br from-primary to-green-600 rounded-2xl p-8 text-white">
                            <h3 class="text-2xl font-bold mb-8">Contact Information</h3>

                            <div class="space-y-6 mb-8">
                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div>
                                        <div class="font-bold">Call Us</div>
                                        <div>(555) 123-4567</div>
                                        <div class="text-sm opacity-80">Mon-Fri, 9AM-6PM EST</div>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div>
                                        <div class="font-bold">Email Us</div>
                                        <div>info@adventurecanvas.com</div>
                                        <div class="text-sm opacity-80">Response within 24 hours</div>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center mr-4">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div>
                                        <div class="font-bold">Visit Our Showroom</div>
                                        <div>123 Adventure Street</div>
                                        <div>Outdoor City, OC 12345</div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-white/20 pt-6">
                                <h4 class="font-bold mb-4">Business Hours</h4>
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between">
                                        <span>Monday - Friday</span>
                                        <span>9:00 AM - 6:00 PM</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Saturday</span>
                                        <span>10:00 AM - 4:00 PM</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Sunday</span>
                                        <span>By Appointment</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="lg:col-span-2">
                        <div class="bg-gray-50 rounded-2xl p-8 h-full">
                            <h3 class="text-2xl font-bold mb-6">Send us a message</h3>

                            <form id="contactForm" class="space-y-6">
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-gray-700 mb-2">Full Name *</label>
                                        <input type="text" required
                                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>

                                    <div>
                                        <label class="block text-gray-700 mb-2">Email Address *</label>
                                        <input type="email" required
                                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-gray-700 mb-2">Phone Number *</label>
                                        <input type="tel" required
                                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                    </div>

                                    <div>
                                        <label class="block text-gray-700 mb-2">Service Needed *</label>
                                        <select required
                                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                            <option value="">Select a service</option>
                                            <option value="event">Event Tents & Organization</option>
                                            <option value="hiking">Hiking & Camping Gear</option>
                                            <option value="custom">Custom Canvas Products</option>
                                            <option value="other">Other Inquiry</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-gray-700 mb-2">Message *</label>
                                    <textarea rows="5" required
                                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                                </div>

                                <button type="submit" class="btn-primary w-full py-4 text-lg">
                                    Submit Inquiry <i class="fas fa-paper-plane ml-2"></i>
                                </button>

                                <p class="text-gray-500 text-sm text-center">
                                    By submitting this form, you agree to our privacy policy.
                                </p>
                            </form>

                            <div id="formSuccess" class="hidden mt-6 p-4 bg-green-50 border border-green-200 rounded-xl">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                        <i class="fas fa-check text-green-600"></i>
                                    </div>
                                    <div>
                                        <div class="font-bold text-green-800">Thank you!</div>
                                        <div class="text-green-700">We've received your inquiry and will contact you within 24 hours.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="py-12 bg-secondary">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold text-primary mb-2">Ready to Start Your Adventure?</h3>
                    <p class="text-primary">Get expert advice and personalized solutions for your needs.</p>
                </div>
                <div class="flex space-x-4">
                    <a href="tel:5551234567" class="btn-primary">
                        <i class="fas fa-phone mr-2"></i> Call Now
                    </a>
                    <a href="#contact" class="bg-white text-primary px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                        Get Free Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-8">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                            <i class="fas fa-mountain-sun text-white"></i>
                        </div>
                        <span class="text-2xl font-bold">Adventure Canvas</span>
                    </div>
                    <p class="text-gray-400 mb-6">
                        Premium outdoor solutions for events and adventures. Quality tents, hiking gear, and expert event organization.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-pinterest"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="#products" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="#gallery" class="text-gray-400 hover:text-white">Gallery</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white">About Us</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white">Event Tents Rental</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Event Organization</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Hiking Gear</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Custom Canvas Products</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Equipment Rental</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Subscribe for outdoor tips and exclusive offers</p>
                    <div class="flex mb-4">
                        <input type="email" placeholder="Your email"
                               class="flex-grow px-4 py-2 rounded-l-lg text-gray-800">
                        <button class="bg-primary px-4 rounded-r-lg">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                    <p class="text-sm text-gray-500">We respect your privacy. Unsubscribe anytime.</p>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">
                        &copy; 2023 Adventure Canvas Co. All rights reserved.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        document.getElementById('closeMobileMenu').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.remove('active');
            document.body.style.overflow = '';
        });

        // Close mobile menu when clicking outside
        document.getElementById('mobileMenu').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        // Close mobile menu when clicking on links
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobileMenu').classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        // Smooth scrolling for anchor links
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
                }
            });
        });

        // Contact form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Show success message
            document.getElementById('formSuccess').classList.remove('hidden');

            // Reset form
            this.reset();

            // Hide success message after 5 seconds
            setTimeout(() => {
                document.getElementById('formSuccess').classList.add('hidden');
            }, 5000);
        });

        // Add animation classes on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Back to Top Button (optional)
        const backToTopButton = document.createElement('button');
        backToTopButton.innerHTML = '<i class="fas fa-chevron-up"></i>';
        backToTopButton.className = 'fixed bottom-6 right-6 w-12 h-12 bg-primary text-white rounded-full shadow-lg z-40 hidden hover:bg-green-700 transition';
        backToTopButton.style.display = 'none';
        document.body.appendChild(backToTopButton);

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'flex';
                backToTopButton.style.alignItems = 'center';
                backToTopButton.style.justifyContent = 'center';
            } else {
                backToTopButton.style.display = 'none';
            }
        });
    </script>
</body>
</html>
