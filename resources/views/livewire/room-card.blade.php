<div>
    @if ($products->count() > 0)
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
                @php
                    // Safely get images as array
                    $images = is_array($product->images) ? $product->images : json_decode($product->images, true) ?? [];
                @endphp
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 product-card fade-in">
                    <!-- Product Image -->
                    <div class="relative h-48 overflow-hidden">
                         @foreach ($images as $image)
                            <img src="{{ Storage::url($product->images[0]) }}" alt="{{ $product->name }}"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                        @endforeach

                        <!-- Product Type Badge -->
                        <span
                            class="absolute top-3 left-3 bg-{{ $product->type == 'tent' ? 'blue' : ($product->type == 'canvas' ? 'green' : 'amber') }}-500 text-white px-2 py-1 rounded text-xs font-bold">
                            {{ ucfirst($product->type) }}
                        </span>

                        <!-- Stock Status -->
                        @if ($product->stock_quantity <= 0)
                            <span
                                class="absolute top-3 right-3 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">
                                Out of Stock
                            </span>
                        @endif
                    </div>

                    <!-- Product Info -->
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800 text-lg mb-2">{{ $product->name }}</h3>

                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">
                            {{ Str::limit($product->description, 80) }}
                        </p>

                        <div class="flex justify-between items-center mb-3">
                            <div class="text-xl font-bold text-[#2a6b4e]">
                                Ksh {{ number_format($product->price, 2) }}
                            </div>
                            <span class="text-sm text-gray-500">
                                @if ($product->stock_quantity > 0)
                                    <i class="fas fa-check-circle text-green-500 mr-1"></i>
                                    {{ $product->stock_quantity }} in stock
                                @else
                                    <i class="fas fa-times-circle text-red-500 mr-1"></i>
                                    Out of stock
                                @endif
                            </span>
                        </div>

                        <!-- Specifications (if available) -->
                        @if ($product->specifications)
                            <div class="mb-3">
                                <p class="text-gray-700 text-sm line-clamp-1">
                                    {{ Str::limit($product->specifications, 60) }}
                                </p>
                            </div>
                        @endif

                        <!-- Action Buttons -->
                        <div class="flex gap-2">
                            <a href="{{ route('products.show', $product->slug) }}"
                                class="btn-outline flex-1 text-center py-2 text-sm">
                                <i class="fas fa-eye mr-1"></i> View Details
                            </a>

                            {{-- @if ($product->stock_quantity > 0)
                                        <form action="{{ route('cart.add', $product->id) }}" method="POST"
                                            class="flex-1">
                                            @csrf
                                            <button type="submit" class="btn-primary w-full py-2 text-sm"
                                                onclick="showToast('{{ $product->name }} added to cart')">
                                                <i class="fas fa-cart-plus mr-1"></i> Add to Cart
                                            </button>
                                        </form>
                                    @else
                                        <button
                                            class="btn-outline flex-1 text-center py-2 text-sm opacity-50 cursor-not-allowed">
                                            <i class="fas fa-bell mr-1"></i> Notify Me
                                        </button>
                                    @endif --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{-- {{ $products->withQueryString()->links() }} --}}
        </div>
    @else
        <!-- No Products Found -->
        <div class="text-center py-12">
            <div class="inline-block p-6 bg-gray-100 rounded-full mb-6">
                <i class="fas fa-box-open text-gray-400 text-5xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">No Products Found</h3>
            <p class="text-gray-600 mb-6 max-w-md mx-auto">
                @if (request()->has('search'))
                    No products match your search "{{ request('search') }}". Try a different search term.
                @elseif(request()->has('type'))
                    No {{ request('type') }} products are currently available.
                @else
                    No products are currently available. Please check back later.
                @endif
            </p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="{{ route('products.index') }}" class="btn-primary">
                    <i class="fas fa-arrow-left mr-2"></i> View All Products
                </a>
                @if (request()->has('search') || request()->has('type'))
                    <a href="{{ route('products.index') }}" class="btn-outline">
                        Clear Filters
                    </a>
                @endif
            </div>
        </div>
    @endif
</div>
