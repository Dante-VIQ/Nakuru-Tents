{{-- resources/views/livewire/show-header.blade.php --}}
<div class="relative h-screen">
    <!-- Background Slider -->
    <div class="absolute inset-0">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                @if(!empty($heroImages) && count($heroImages) > 0)
                    @foreach($heroImages as $image)
                        <div class="swiper-slide">
                            <!-- Background Image with Overlay -->
                            <div class="relative w-full h-full">
                                <img src="{{ $image['url'] }}" 
                                     alt="{{ $image['title'] }}"
                                     class="w-full h-full object-cover">
                                
                                <!-- Dark Overlay -->
                                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                                
                                <!-- Content Overlay -->
                                <div class="absolute inset-0 flex items-center">
                                    <div class="container mx-auto px-6 lg:px-12 text-white">
                                        <div class="max-w-2xl">
                                            <span class="inline-block px-4 py-2 bg-blue-600 rounded-full text-sm font-semibold mb-4">
                                                {{ ucfirst($image['type'] ?? 'Featured') }}
                                            </span>
                                            <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight">
                                                {{ $image['title'] ?? 'Featured Image' }}
                                            </h1>
                                            @isset($image['description'])
                                                <p class="text-xl mb-8 opacity-90">
                                                    {{ Str::limit($image['description'], 150) }}
                                                </p>
                                            @endisset
                                            @isset($image['link'])
                                                <a href="{{ $image['link'] }}" 
                                                   class="inline-flex items-center px-8 py-3 bg-white text-gray-900 font-semibold rounded-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                                                    View Details
                                                    <i class="fas fa-arrow-right ml-2"></i>
                                                </a>
                                            @endisset
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Fallback if no images -->
                    <div class="swiper-slide">
                        <div class="w-full h-full bg-gradient-to-r from-blue-900 to-gray-800 flex items-center justify-center">
                            <div class="text-center text-white p-8">
                                <i class="fas fa-camera text-6xl mb-6 opacity-50"></i>
                                <h2 class="text-3xl font-bold mb-4">Featured Images Coming Soon</h2>
                                <p class="opacity-75 text-lg">Explore our products and gallery for amazing visuals</p>
                                <div class="mt-6">
                                    <a href="{{ route('products.index') }}" 
                                       class="inline-block px-6 py-3 bg-white text-gray-900 font-semibold rounded-lg mr-4 hover:bg-gray-100">
                                        View Products
                                    </a>
                                    <a href="{{ route('gallery.index') }}" 
                                       class="inline-block px-6 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white/10">
                                        View Gallery
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            
            <!-- Navigation Buttons (only show if we have images) -->
            @if(!empty($heroImages) && count($heroImages) > 1)
                <div class="swiper-button-next text-white"></div>
                <div class="swiper-button-prev text-white"></div>
            @endif
            
            <!-- Pagination Dots (only show if we have images) -->
            @if(!empty($heroImages) && count($heroImages) > 1)
                <div class="swiper-pagination"></div>
            @endif
            
            <!-- Scroll Down Indicator -->
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
                <a href="#content" class="text-white">
                    <i class="fas fa-chevron-down text-2xl"></i>
                </a>
            </div>
        </div>
    </div>
</div>

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
    .hero-slider {
        width: 100%;
        height: 100vh;
    }
    
    .swiper-slide {
        background-position: center;
        background-size: cover;
    }
    
    .swiper-button-next,
    .swiper-button-prev {
        background: rgba(0, 0, 0, 0.5);
        width: 60px;
        height: 60px;
        border-radius: 50%;
        backdrop-filter: blur(10px);
    }
    
    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 24px;
        color: white;
    }
    
    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: white;
        opacity: 0.5;
    }
    
    .swiper-pagination-bullet-active {
        opacity: 1;
        background: #3B82F6;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const heroSwiper = new Swiper('.hero-slider', {
            // Optional parameters
            direction: 'horizontal',
            loop: {{ !empty($heroImages) && count($heroImages) > 1 ? 'true' : 'false' }},
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            
            // Navigation arrows
            navigation: {{ !empty($heroImages) && count($heroImages) > 1 ? `{
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }` : 'false' }},
            
            // Pagination
            pagination: {{ !empty($heroImages) && count($heroImages) > 1 ? `{
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            }` : 'false' }},
            
            // Only enable autoplay if we have multiple images
            {{ empty($heroImages) || count($heroImages) <= 1 ? 'autoplay: false,' : '' }}
        });
        
        // Pause autoplay on hover (only if we have autoplay)
        @if(!empty($heroImages) && count($heroImages) > 1)
            heroSwiper.el.addEventListener('mouseenter', function() {
                heroSwiper.autoplay.stop();
            });
            
            heroSwiper.el.addEventListener('mouseleave', function() {
                heroSwiper.autoplay.start();
            });
        @endif
    });
</script>
@endpush