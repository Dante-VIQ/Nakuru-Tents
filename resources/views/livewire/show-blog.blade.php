<div>
    @if ($galleries->count() > 0)
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($galleries as $gallery)
                @php
                    // Safely get images as array
                    $images = is_array($gallery->images) ? $gallery->images : json_decode($gallery->images, true) ?? [];
                @endphp
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 gallery-item">
                    <!-- Gallery Image -->
                    <div class="relative h-48 overflow-hidden">

                        @foreach ($images as $image)
                            <div class="relative">
                                <img src="{{ asset('uploads/' . $image) }}" alt="{{ $gallery->title }}"
                                    class="w-full h-48 object-cover rounded-lg">
                            </div>
                        @endforeach

                        <!-- Image Count Badge -->
                        @if (count($images) > 0)
                            <span
                                class="absolute top-3 right-3 bg-black bg-opacity-50 text-white px-2 py-1 rounded text-xs">
                                <i class="fas fa-camera mr-1"></i> {{ count($images) }}
                            </span>
                        @endif
                        <!-- Category Badge -->
                        <span class="absolute top-3 left-3 bg-[#2a6b4e] text-white px-2 py-1 rounded text-xs font-bold">
                            {{ $gallery->category_label }}
                        </span>
                    </div>

                    <!-- Gallery Info -->
                    <div class="p-6">
                        <h3 class="font-bold text-gray-800 text-lg mb-2">{{ $gallery->title }}</h3>

                        @if ($gallery->description)
                            <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                                {{ Str::limit($gallery->description, 100) }}
                            </p>
                        @endif

                        <div class="flex justify-between items-center">
                            <a href="{{ route('gallery', $gallery->slug) }}"
                                class="btn-primary inline-flex items-center px-4 py-2 text-sm">
                                <i class="fas fa-eye mr-2"></i> View Gallery
                            </a>

                            <!-- Quick Preview -->
                            @if ($gallery->images && count($gallery->images) > 0)
                                <div class="flex -space-x-2">
                                    @foreach (array_slice($gallery->images, 0, 3) as $index => $image)
                                        <div class="w-8 h-8 rounded-full border-2 border-white overflow-hidden">
                                            <img src="{{ Storage::url($gallery->image) }}"
                                                alt="Preview {{ $index + 1 }}" class="w-full h-full object-cover">
                                        </div>
                                    @endforeach
                                    @if (count($gallery->images) > 3)
                                        <div
                                            class="w-8 h-8 rounded-full border-2 border-white bg-gray-300 flex items-center justify-center text-xs">
                                            +{{ count($gallery->images) - 3 }}
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        {{-- <div class="mt-12">
            {{ $galleries->withQueryString()->links() }}
        </div> --}}
    @else
        <!-- No Galleries Found -->
        <div class="text-center py-12">
            <div class="inline-block p-6 bg-gray-100 rounded-full mb-6">
                <i class="fas fa-images text-gray-400 text-5xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">No Galleries Found</h3>
            <p class="text-gray-600 mb-6 max-w-md mx-auto">
                @if (request()->has('search'))
                    No galleries match your search "{{ request('search') }}".
                @elseif(request()->has('category'))
                    No galleries found in the {{ $categories[request('category')] ?? request('category') }} category.
                @else
                    No galleries are currently available. Please check back later.
                @endif
            </p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="{{ route('gallery.index') }}" class="btn-primary">
                    <i class="fas fa-arrow-left mr-2"></i> View All Galleries
                </a>
                @if (request()->has('search') || request()->has('category'))
                    <a href="{{ route('gallery.index') }}"
                        class="border border-[#2a6b4e] text-[#2a6b4e] px-4 py-2 rounded-lg hover:bg-[#2a6b4e] hover:text-white transition">
                        Clear Filters
                    </a>
                @endif
            </div>
        </div>
    @endif
</div>
