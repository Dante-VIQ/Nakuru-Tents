        <div class="container mx-auto px-4">
            <!-- Back Button -->
            <a href="{{ route('gallery.index') }}" class="inline-flex items-center text-[#2a6b4e] hover:text-[#3a8b6f] mb-6">
                <i class="fas fa-arrow-left mr-2"></i> Back to Gallery
            </a>

            <!-- Gallery Header -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <div>
                        <span class="inline-block bg-[#2a6b4e] text-white px-3 py-1 rounded-full text-sm font-bold mb-3">
                            {{ $gallery->category_label }}
                        </span>
                        <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $gallery->title }}</h1>
                        @if($gallery->description)
                            <p class="text-gray-600">{{ $gallery->description }}</p>
                        @endif
                    </div>
                    <div class="text-sm text-gray-500">
                        <i class="far fa-calendar mr-1"></i> {{ $gallery->created_at->format('F d, Y') }}
                        <span class="mx-2">•</span>
                        <i class="fas fa-images mr-1"></i> {{ count($gallery->images ?? []) }} images
                    </div>
                </div>
            </div>

            <!-- Gallery Images -->
            @if($gallery->images && count($gallery->images) > 0)
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Gallery Images</h2>
                    <div class="image-grid">
                        @foreach($gallery->images as $index => $image)
                            <div class="image-item bg-white rounded-lg overflow-hidden shadow-md">
                                <a href="{{ Storage::url($image) }}"
                                   data-lightbox="gallery"
                                   data-title="{{ $gallery->title }} - Image {{ $index + 1 }}">
                                    <img src="{{ Storage::url($image) }}"
                                         alt="{{ $gallery->title }} - Image {{ $index + 1 }}">
                                    <div class="image-overlay">
                                        <div class="flex justify-between items-center">
                                            <span>Image {{ $index + 1 }}</span>
                                            <i class="fas fa-expand"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="text-center py-12 bg-white rounded-xl shadow-lg">
                    <i class="fas fa-images text-gray-300 text-5xl mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">No Images Available</h3>
                    <p class="text-gray-600">This gallery doesn't contain any images yet.</p>
                </div>
            @endif

            <!-- Related Galleries -->
            {{-- @if($relatedGalleries->count() > 0)
                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">More from {{ $gallery->category_label }}</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        @foreach($relatedGalleries as $related)
                            <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                                <div class="h-40 overflow-hidden">
                                    @if($related->image)
                                        <img src="{{ Storage::url($related->image) }}"
                                             alt="{{ $related->title }}"
                                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                            <i class="fas fa-images text-gray-400 text-3xl"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-gray-800 mb-2">{{ $related->title }}</h3>
                                    <a href="{{ route('gallery.show', $related->slug) }}"
                                       class="inline-flex items-center text-[#2a6b4e] hover:text-[#3a8b6f] text-sm font-medium">
                                        View Gallery <i class="fas fa-arrow-right ml-1 text-xs"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif --}}
        </div>