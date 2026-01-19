<x-admin-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Edit Gallery</h1>
            <a href="{{ route('gallery.index') }}"
                class="bg-gray-600 hover:bg-gray-700 text-white font-medium py-2 px-4 rounded-lg inline-flex items-center transition duration-150 ease-in-out">
                <i class="fas fa-arrow-left mr-2"></i> Back
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-xl font-semibold text-gray-900">Gallery Details</h2>
                    </div>
                    <div class="p-6">
                        <form action="{{ route('gallery.update', $gallery) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-6">
                                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Gallery Title
                                    *</label>
                                <input type="text"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror"
                                    id="title" name="title" value="{{ old('title', $gallery->title) }}" required>
                                @error('title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category
                                        *</label>
                                    <select
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('category') border-red-500 @enderror"
                                        id="category" name="category" required>
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $key => $label)
                                            <option value="{{ $key }}"
                                                {{ old('category', $gallery->category) == $key ? 'selected' : '' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                                    <div class="flex items-center">
                                        <input type="checkbox" class="sr-only" id="is_active" name="is_active"
                                            value="1" {{ old('is_active', $gallery->is_active) ? 'checked' : '' }}>
                                        <label for="is_active" class="flex items-center cursor-pointer">
                                            <div class="relative">
                                                <div
                                                    class="w-11 h-6 bg-gray-200 rounded-full shadow-inner transition-colors duration-200 {{ old('is_active', $gallery->is_active) ? 'bg-green-400' : '' }}">
                                                </div>
                                                <div
                                                    class="absolute w-4 h-4 bg-white rounded-full shadow transition-transform duration-200 {{ old('is_active', $gallery->is_active) ? 'translate-x-6' : 'translate-x-1' }}">
                                                </div>
                                            </div>
                                            <span class="ml-3 text-sm font-medium text-gray-700">Active</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="description"
                                    class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                                <textarea
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror"
                                    id="description" name="description" rows="3">{{ old('description', $gallery->description) }}</textarea>
                                @error('description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            @php
                                // Convert JSON string to array if needed
                                $imagesArray = is_string($gallery->images)
                                    ? json_decode($gallery->images, true)
                                    : $gallery->images;

                                // Or for comma-separated string:
                                // $imagesArray = is_string($gallery->images) ? explode(',', $gallery->images) : $gallery->images;

                            @endphp
                            <!-- Current Images -->
                           @if(is_array($imagesArray) && count($imagesArray) > 0)
                                <div class="mb-6">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Current Images</label>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                        @foreach($imagesArray as $image)
                                            <div class="relative">
                                                <img src="{{ asset('uploads/' . $image) }}" alt="Gallery Image"
                                                    class="w-full h-24 object-cover rounded-lg shadow-sm border border-gray-200">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <div class="mb-6">
                                <label for="images" class="block text-sm font-medium text-gray-700 mb-2">Add New
                                    Images (Optional)</label>
                                <input type="file"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('images') border-red-500 @enderror"
                                    id="images" name="images[]" multiple accept="image/*">
                                <p class="mt-1 text-sm text-gray-500">Select new images to replace current ones</p>
                                @error('images')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <div id="imagePreview" class="mt-3 grid grid-cols-2 md:grid-cols-4 gap-4"></div>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg inline-flex items-center transition duration-150 ease-in-out">
                                    <i class="fas fa-save mr-2"></i> Update Gallery
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">Gallery Info</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-sm font-medium text-gray-500">Created:</span>
                                <span class="text-sm text-gray-900">{{ $gallery->created_at->format('M d, Y') }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm font-medium text-gray-500">Last Updated:</span>
                                <span class="text-sm text-gray-900">{{ $gallery->updated_at->format('M d, Y') }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm font-medium text-gray-500">Slug:</span>
                                <span class="text-sm text-gray-900">{{ $gallery->slug }}</span>
                            </div>
                            {{-- <div class="flex justify-between">
                                <span class="text-sm font-medium text-gray-500">Images:</span>
                                <span class="text-sm text-gray-900">{{ count($gallery->images ?? []) }}</span>
                            </div> --}}
                        </div>

                        <hr class="my-4">

                        <form action="{{ route('gallery.destroy', $gallery) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this gallery?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg inline-flex items-center justify-center transition duration-150 ease-in-out">
                                <i class="fas fa-trash mr-2"></i> Delete Gallery
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('is_active');
            const toggleLabel = toggle.nextElementSibling;
            const toggleBg = toggleLabel.querySelector('.relative > div:first-child');
            const toggleBtn = toggleLabel.querySelector('.absolute');

            function updateToggle() {
                if (toggle.checked) {
                    toggleBg.classList.add('bg-green-400');
                    toggleBg.classList.remove('bg-gray-200');
                    toggleBtn.classList.add('translate-x-6');
                    toggleBtn.classList.remove('translate-x-1');
                } else {
                    toggleBg.classList.remove('bg-green-400');
                    toggleBg.classList.add('bg-gray-200');
                    toggleBtn.classList.remove('translate-x-6');
                    toggleBtn.classList.add('translate-x-1');
                }
            }

            toggle.addEventListener('change', updateToggle);
            updateToggle(); // Initial state

            // Image preview
            document.getElementById('images').addEventListener('change', function(e) {
                const preview = document.getElementById('imagePreview');
                preview.innerHTML = '';

                for (let i = 0; i < this.files.length; i++) {
                    const file = this.files[i];
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const div = document.createElement('div');
                        div.className = 'relative';
                        div.innerHTML = `
                            <img src="${e.target.result}" class="w-full h-24 object-cover rounded-lg shadow-sm border border-gray-200">
                            <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-xs p-1 rounded-b-lg truncate">
                                ${file.name}
                            </div>
                        `;
                        preview.appendChild(div);
                    }

                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</x-admin-layout>
