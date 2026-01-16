<div class="relative">
    <!-- Trigger Button -->
    <button wire:click="showForm" type="button"
        class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white rounded-lg shadow transition duration-300">
        Order Products
    </button>

    <!-- Modal Form -->
    @if($showForm)
        <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-90 overflow-y-auto p-4">
            <div class="bg-white w-full max-w-md mx-auto p-6 rounded-xl shadow-2xl relative">
                <!-- Close Button -->
                <button wire:click="closeForm" type="button"
                    class="absolute top-4 right-4 text-gray-500 hover:text-black text-xl font-bold p-2">
                    ✕
                </button>

                <!-- Form -->
                <form wire:submit.prevent="save" class="space-y-5">
                    <div class="text-center mb-2">
                        <h3 class="text-2xl font-bold text-gray-900">Order Canvas & Tents</h3>
                        <p class="text-gray-600 text-sm mt-1">Fill in details to place your order</p>
                    </div>

                    @if (session()->has('message'))
                        <div class="mb-4 p-3 bg-green-50 border border-green-200 text-green-800 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-800 rounded-lg">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Full Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                        <input type="text" wire:model="full_name" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition placeholder-gray-400"
                            placeholder="Enter your full name"
                            required>
                        @error('full_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                        <input type="tel" wire:model="phone" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition placeholder-gray-400"
                            placeholder="+1 (555) 123-4567"
                            required>
                        @error('phone')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Product Selection -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Select Product *</label>
                        <select wire:model="product_id" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                            required>
                            <option value="">Choose a product</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">
                                    {{ $product->name }} - ${{ number_format($product->price, 2) }}
                                    @if($product->stock_quantity)
                                        ({{ $product->stock_quantity }} in stock)
                                    @endif
                                </option>
                            @endforeach
                        </select>
                        @error('product_id')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Quantity -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Quantity *</label>
                        <div class="flex items-center space-x-3">
                            <button type="button" 
                                wire:click="decrementQuantity"
                                class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-lg hover:bg-gray-50"
                                {{ $quantity <= 1 ? 'disabled' : '' }}>
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                </svg>
                            </button>
                            
                            <input type="number" wire:model="quantity" 
                                class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition text-center"
                                min="1" max="100">
                            
                            <button type="button" 
                                wire:click="incrementQuantity"
                                class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-lg hover:bg-gray-50"
                                {{ $quantity >= 100 ? 'disabled' : '' }}>
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </button>
                        </div>
                        @error('quantity')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Additional Notes -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Additional Notes (Optional)</label>
                        <textarea wire:model="notes" rows="3"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition placeholder-gray-400 resize-none"
                            placeholder="Any special requirements, customization needs, or questions..."></textarea>
                        @error('notes')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                        class="w-full py-3 bg-gradient-to-r from-green-600 to-emerald-600 text-white font-semibold rounded-lg hover:from-green-700 hover:to-emerald-700 transition duration-300 shadow-lg">
                        Place Order
                    </button>

                    <!-- Help Text -->
                    <p class="text-center text-sm text-gray-500 mt-4">
                        We'll contact you within 24 hours to confirm your order
                    </p>
                </form>
            </div>
        </div>
    @endif
</div>