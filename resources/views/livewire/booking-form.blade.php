                <div class="bg-white rounded-xl shadow-lg p-6 md:p-8">
                    @if (session()->has('message'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-100 text-green-800 rounded-lg">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form wire:submit.prevent="save" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                <input type="text" wire:model="full_name" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition">
                                @error('full_name')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                <input type="text" wire:model="phone" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition">
                                @error('phone')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Check In -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Check-In Date *</label>
                                <input type="date" wire:model="check_in" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition">
                                @error('check_in')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Check Out -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Check-Out Date *</label>
                                <input type="date" wire:model="check_out" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition">
                                @error('check_out')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Adults -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Adults *</label>
                                <select wire:model="adults" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition">
                                    <option value="">Select number of adults</option>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ $i }} {{ $i === 1 ? 'Adult' : 'Adults' }}</option>
                                    @endfor
                                </select>
                                @error('adults')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Children -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Children</label>
                                <select wire:model="children" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition">
                                    <option value="">Select number of children</option>
                                    @for ($i = 0; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ $i }} {{ $i === 1 ? 'Child' : 'Children' }}</option>
                                    @endfor
                                </select>
                                @error('children')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Room Selection -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Select Room *</label>
                                <select wire:model="room_id" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition">
                                    <option value="">Choose a room type</option>
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->name }} - ${{ $room->price }}/night</option>
                                    @endforeach
                                </select>
                                @error('room_id')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Time -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Check-in Time (Optional)</label>
                                <input type="text" wire:model="time" 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition"
                                    placeholder="e.g., 2:00 PM">
                                @error('time')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" 
                            class="w-full py-4 bg-teal-600 text-white font-semibold rounded-lg hover:bg-teal-700 transition duration-300 shadow-lg">
                            Confirm Booking
                        </button>
                    </form>
                </div>