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
                    From stunning event installations to rugged hiking equipment—we craft durable solutions for your
                    next journey. Your trusted partner for outdoor adventures and memorable events.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 mb-12">
                    <a href="/contact" class="btn-primary px-6 py-3 bg-green-600 hover:bg-green-700 text-white rounded-lg shadow transition duration-300">
                        <i class="fas fa-calendar-alt mr-2"></i> Learn More
                    </a>
                    <a href="tel:+254701596171" class="btn-outline text-center">
                        <i class="fas fa-phone mr-2"></i> Call Now
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
                    <div
                        class="bg-gradient-to-br from-primary to-green-600 rounded-3xl h-96 lg:h-[500px] overflow-hidden shadow-2xl">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        <!-- This would be your hero image -->
                        {{-- <div class="w-full h-full bg-gray-300 flex items-center justify-center">
                            <div class="text-center text-white p-8">
                                <i class="fas fa-camera text-4xl mb-4 opacity-50"></i>
                                <p class="opacity-50">Hero Image: Event tent setup or hiking adventure</p>
                            </div> --}}
                            <livewire:show-header />
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
                Comprehensive solutions for events, adventures, and custom needs. One provider for all your outdoor
                requirements.
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
                    Complete event solutions including marquee tents, professional setup, and full coordination for
                    weddings, corporate events, and festivals.
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
                    Premium backpacks, tents, sleeping bags, and equipment tested in real conditions for reliable
                    outdoor adventures.
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
                    Bespoke canvas solutions including bags, tarps, and custom designs tailored to your specific
                    requirements and branding.
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
<livewire:room-card />

<!-- Gallery Section -->
<section id="gallery" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold mb-6">Our Work in Action</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                See how we transform events and equip adventurers for their journeys.
            </p>
        </div>

<livewire:show-blog />
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 gradient-bg text-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6">Why Choose Nakuru Tents & Canvas?</h2>
                <p class="text-xl mb-8">
                    With over a decade of experience, we've mastered the art of creating unforgettable outdoor
                    experiences. Our passion for quality and adventure drives everything we do.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-award text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Premium Quality Materials</h3>
                            <p>We use only the finest canvas, fabrics, and materials that withstand the toughest
                                conditions.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-2">Expert Team</h3>
                            <p>Our team includes experienced event planners and outdoor enthusiasts who understand your
                                needs.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mr-4 flex-shrink-0">
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
                    <div class="bg-gradient-to-br from-primary to-green-600 rounded-2xl p-8 text-gray-600">
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
                                    <div>info@nakurutentscanvas.com</div>
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
                                    <div class="text-green-700">We've received your inquiry and will contact you within
                                        24 hours.</div>
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
                <a href="tel:+254701596171" class="btn-primary">
                    <i class="fas fa-phone mr-2"></i> Call Now
                </a>
                <a href="contact"
                    class="bg-white text-primary px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                    Get Free Quote
                </a>
            </div>
        </div>
    </div>
</section>
