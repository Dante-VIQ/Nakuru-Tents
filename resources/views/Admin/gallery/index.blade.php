<x-admin-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Gallery Management</h1>
            <a href="{{ route('gallery.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg inline-flex items-center transition duration-150 ease-in-out">
                <i class="fas fa-plus mr-2"></i> Add Gallery
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                {{ session('success') }}
                <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none'">
                    <span class="text-green-700">&times;</span>
                </button>
            </div>
        @endif

        <!-- Category Filter -->
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('gallery.index') }}"
                    class="px-4 py-2 text-sm font-medium rounded-lg {{ !request('category') ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }} transition duration-150 ease-in-out">
                    All Categories
                </a>
                @foreach ($categories as $key => $label)
                    <a href="{{ route('gallery.index', ['category' => $key]) }}"
                        class="px-4 py-2 text-sm font-medium rounded-lg {{ request('category') == $key ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }} transition duration-150 ease-in-out">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            @if ($galleries->count() > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preview</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Images</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($galleries as $gallery)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($gallery->images && count($gallery->images) > 0)
                                            <img src="{{ asset('uploads/' . $gallery->images[0]) }}"
                                                alt="{{ $gallery->title }}"
                                                class="h-16 w-16 object-cover rounded-lg shadow-sm">
                                        @else
                                            <div class="h-16 w-16 bg-gray-200 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-image text-gray-400"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $gallery->title }}</div>
                                        @if ($gallery->description)
                                            <div class="text-sm text-gray-500">{{ Str::limit($gallery->description, 50) }}</div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                            {{ $gallery->category_label ?? ucfirst($gallery->category) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ count($gallery->images ?? []) }} images
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input type="checkbox" class="sr-only status-toggle" data-id="{{ $gallery->id }}" {{ $gallery->is_active ? 'checked' : '' }}>
                                            <div class="w-11 h-6 bg-gray-200 rounded-full shadow-inner {{ $gallery->is_active ? 'bg-green-400' : '' }}"></div>
                                            <div class="absolute w-4 h-4 bg-white rounded-full shadow transition-transform duration-200 ease-in-out {{ $gallery->is_active ? 'translate-x-6' : 'translate-x-1' }}"></div>
                                        </label>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('gallery.show', $gallery->slug) }}" target="_blank"
                                                class="text-blue-600 hover:text-blue-900 transition duration-150 ease-in-out" title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('gallery.edit', $gallery) }}"
                                                class="text-indigo-600 hover:text-indigo-900 transition duration-150 ease-in-out" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('gallery.destroy', $gallery) }}" method="POST"
                                                onsubmit="return confirm('Delete this gallery?');" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 transition duration-150 ease-in-out" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                    {{-- {{ $galleries->links() }} --}}
                </div>
            @else
                <div class="text-center py-12">
                    <div class="mx-auto h-24 w-24 text-gray-400">
                        <i class="fas fa-images text-6xl"></i>
                    </div>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">No galleries found</h3>
                    <p class="mt-1 text-sm text-gray-500">Start by creating your first gallery</p>
                    <div class="mt-6">
                        <a href="{{ route('gallery.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-150 ease-in-out">
                            <i class="fas fa-plus mr-2"></i> Create Gallery
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.status-toggle').forEach(function(toggle) {
                toggle.addEventListener('change', function() {
                    const galleryId = this.dataset.id;
                    const isActive = this.checked;

                    fetch("{{ route('gallery.update-status', ':id') }}".replace(':id', galleryId), {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            is_active: isActive ? 1 : 0
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert('Status updated successfully');
                    })
                    .catch(error => {
                        alert('Error updating status');
                        this.checked = !isActive;
                    });
                });
            });
        });
    </script>
</x-admin-layout>
