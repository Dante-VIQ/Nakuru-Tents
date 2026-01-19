        <div x-data="{ open: false }">
            <!-- Mobile icon-only bar (visible on small screens) -->
            <div class="fixed inset-y-0 left-0 z-40 flex flex-col items-center w-16 bg-white shadow-lg md:hidden">
                <div class="py-4">
                    <button @click="open = true" aria-label="Open sidebar" class="p-2 rounded-md text-gray-600 hover:bg-gray-100">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

                <nav class="flex-1 flex flex-col items-center space-y-3 mt-6">
                    <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-900" title="Dashboard">
                        <i class="fas fa-tachometer-alt fa-lg"></i>
                    </a>
                    <a href="{{ route('products.index') }}" class="text-gray-600 hover:text-gray-900" title="Products">
                        <i class="fas fa-campground fa-lg"></i>
                    </a>
                    <a href="{{ route('gallery.index') }}" class="text-gray-600 hover:text-gray-900" title="Gallery">
                        <i class="fas fa-image fa-lg"></i>
                    </a>
                </nav>

                <div class="py-6 text-center text-sm text-gray-600">
                    <div class="font-semibold text-green-700">{{ \App\Models\Product::count() }}</div>
                    <div class="text-xs text-gray-500">items</div>
                </div>
            </div>

            <!-- Desktop sidebar (hidden on small screens) -->
            <aside class="hidden md:flex md:flex-col md:w-64 bg-white shadow-lg h-screen sticky top-0">
                <div class="flex-col p-6">
                    <h2 class="text-lg font-bold text-gray-800 mb-6">Navigation</h2>

                    <div class="flex flex-col space-y-4">
                        <a href="{{ route('dashboard') }}" class="flex items-center space-x-4 text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md {{ request()->routeIs('admin.dashboard') ? 'bg-gray-100' : '' }}">
                            <i class="fas fa-tachometer-alt w-5"></i>
                            <span class="text-sm font-medium">Dashboard</span>
                        </a>

                        <a href="{{ route('products.index') }}" class="flex items-center space-x-4 text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md {{ request()->routeIs('admin.products.*') ? 'bg-gray-100' : '' }}">
                            <i class="fas fa-campground w-5"></i>
                            <span class="text-sm font-medium">Products</span>
                        </a>

                        <a href="{{ route('gallery.index') }}" class="flex items-center space-x-4 text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md {{ request()->routeIs('admin.gallery.*') ? 'bg-gray-100' : '' }}">
                            <i class="fas fa-image w-5"></i>
                            <span class="text-sm font-medium">Gallery</span>
                        </a>
                    </div>

                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <h3 class="text-sm font-bold text-gray-500 uppercase mb-4">Quick Stats</h3>
                        <div class="space-y-3">
                            <div>
                                <p class="text-sm text-gray-600">Total Products</p>
                                <p class="text-lg font-bold text-[#2a6b4e]">{{ \App\Models\Product::count() }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Active Products</p>
                                <p class="text-lg font-bold text-[#2a6b4e]">{{ \App\Models\Product::where('is_active', true)->count() }}</p>
                            </div>
                        </div>
                    </div>

                    @auth
                        <div class="mt-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">{{ __('Profile') }}</x-dropdown-link>
                                    <form method="POST" action="{{ route('logout') }}">@csrf
                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endauth

                    @guest
                        <div class="mt-6">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline px-3 py-2">Login</a>
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline px-3 py-2">Register</a>
                        </div>
                    @endguest
                </div>
            </aside>

            <!-- Off-canvas sidebar for mobile -->
            <div x-show="open" x-cloak class="fixed inset-0 z-50 md:hidden">
                <div class="absolute inset-0 bg-black bg-opacity-50" @click="open = false"></div>
                <aside class="absolute left-0 top-0 bottom-0 w-64 bg-white p-6 overflow-auto">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-bold">Navigation</h2>
                        <button @click="open = false" class="p-2 rounded-md text-gray-600 hover:bg-gray-100">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>

                    <nav class="mt-6 space-y-2">
                        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50">
                            <i class="fas fa-tachometer-alt w-5"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('products.index') }}" class="flex items-center space-x-3 px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50">
                            <i class="fas fa-campground w-5"></i>
                            <span>Products</span>
                        </a>
                        <a href="{{ route('gallery.index') }}" class="flex items-center space-x-3 px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50">
                            <i class="fas fa-image w-5"></i>
                            <span>Gallery</span>
                        </a>
                    </nav>

                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <h3 class="text-sm font-bold text-gray-500 uppercase mb-4">Quick Stats</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Total Products</span>
                                <span class="font-bold text-[#2a6b4e]">{{ \App\Models\Product::count() }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Active</span>
                                <span class="font-bold text-[#2a6b4e]">{{ \App\Models\Product::where('is_active', true)->count() }}</span>
                            </div>
                        </div>
                    </div>

                    @auth
                        <div class="mt-6">
                            <form method="POST" action="{{ route('logout') }}">@csrf
                                <button type="submit" class="w-full text-left px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50">Log Out</button>
                            </form>
                        </div>
                    @endauth
                </aside>
            </div>
        </div>
