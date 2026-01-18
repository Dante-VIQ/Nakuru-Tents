<x-admin-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Add New Product</h1>
            <a href="{{ route('products.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-medium py-2 px-4 rounded-lg inline-flex items-center transition duration-150 ease-in-out">
                <i class="fas fa-arrow-left mr-2"></i> Back
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-xl font-semibold text-gray-900">Product Details</h2>
                    </div>
                    <div class="p-6">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-6">
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Product Name *</label>
                                <input type="text"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror"
                                       id="name"
                                       name="name"
                                       value="{{ old('name') }}"
                                       required>
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="type" class="block text-sm font-medium text-gray-700 mb-2">Product Type *</label>
                                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('type') border-red-500 @enderror"
                                            id="type"
                                            name="type"
                                            required>
                                        <option value="">Select Type</option>
                                        @foreach($productTypes as $key => $label)
                                            <option value="{{ $key }}"
                                                    {{ old('type') == $key ? 'selected' : '' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price (₹) *</label>
                                    <input type="number"
                                           step="0.01"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('price') border-red-500 @enderror"
                                           id="price"
                                           name="price"
                                           value="{{ old('price') }}"
                                           required>
                                    @error('price')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="stock_quantity" class="block text-sm font-medium text-gray-700 mb-2">Stock Quantity *</label>
                                    <input type="number"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('stock_quantity') border-red-500 @enderror"
                                           id="stock_quantity"
                                           name="stock_quantity"
                                           value="{{ old('stock_quantity', 0) }}"
                                           required>
                                    @error('stock_quantity')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                                    <div class="flex items-center">
                                        <input type="checkbox"
                                               class="sr-only"
                                               id="is_active"
                                               name="is_active"
                                               value="1"
                                               {{ old('is_active', true) ? 'checked' : '' }}>
                                        <label for="is_active" class="flex items-center cursor-pointer">
                                            <div class="relative">
                                                <div class="w-11 h-6 bg-gray-200 rounded-full shadow-inner transition-colors duration-200 {{ old('is_active', true) ? 'bg-green-400' : '' }}"></div>
                                                <div class="absolute w-4 h-4 bg-white rounded-full shadow transition-transform duration-200 {{ old('is_active', true) ? 'translate-x-6' : 'translate-x-1' }}"></div>
                                            </div>
                                            <span class="ml-3 text-sm font-medium text-gray-700">Active</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description *</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror"
                                          id="description"
                                          name="description"
                                          rows="4"
                                          required>{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="specifications" class="block text-sm font-medium text-gray-700 mb-2">Specifications</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('specifications') border-red-500 @enderror"
                                          id="specifications"
                                          name="specifications"
                                          rows="3">{{ old('specifications') }}</textarea>
                                <p class="mt-1 text-sm text-gray-500">Key specifications separated by commas or bullets</p>
                                @error('specifications')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="images" class="block text-sm font-medium text-gray-700 mb-2">Product Images</label>
                                <input type="file"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 @error('images') border-red-500 @enderror"
                                       id="images"
                                       name="images[]"
                                       multiple
                                       accept="image/*">
                                <p class="mt-1 text-sm text-gray-500">You can select multiple images</p>
                                @error('images')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex justify-end">
                                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg inline-flex items-center transition duration-150 ease-in-out">
                                    <i class="fas fa-save mr-2"></i> Save Product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">Product Types</h3>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-3">
                            @foreach($productTypes as $key => $label)
                                <li class="flex justify-between items-center py-2 px-3 bg-gray-50 rounded-md">
                                    <span class="text-sm font-medium text-gray-900">{{ $label }}</span>
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">{{ ucfirst($key) }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">Quick Tips</h3>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                Keep product names clear and descriptive
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                For tents: Include capacity (e.g., "2-Person", "Family")
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                For canvas: Mention material and dimensions
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                Set stock to 0 for out-of-stock items
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-lightbulb text-yellow-500 mr-2 mt-0.5"></i>
                                Use simple language in descriptions
                            </li>
                        </ul>
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
        });
    </script>
</x-admin-layout>