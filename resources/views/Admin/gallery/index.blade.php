<x-admin-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Gallery Management</h1>
            <a href="{{ route('gallery.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add Gallery
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Category Filter -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('gallery.index') }}"
                        class="btn btn-sm {{ !request('category') ? 'btn-primary' : 'btn-outline-primary' }}">
                        All Categories
                    </a>
                    @foreach ($categories as $key => $label)
                        <a href="{{ route('gallery.index', ['category' => $key]) }}"
                            class="btn btn-sm {{ request('category') == $key ? 'btn-primary' : 'btn-outline-primary' }}">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                @if ($galleries->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Preview</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Images</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                    @php
                                        $categories = \App\Models\Gallery::select('category')
                                            ->distinct()
                                            ->pluck('category', 'category')
                                            ->toArray();
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @foreach ($gallery->images as $image)
                                                <div class="relative">
                                                    <img src="{{ asset('uploads/' . $image) }}"
                                                        alt="{{ $gallery->title }}"
                                                        class="w-full h-48 object-cover rounded-lg">
                                                </div>
                                            @endforeach

                                        </td>
                                        <td>
                                            <strong>{{ $gallery->title }}</strong>
                                            @if ($gallery->description)
                                                <p class="text-muted mb-0 small">
                                                    {{ Str::limit($gallery->description, 50) }}</p>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-info">{{ $gallery->category_label }}</span>
                                        </td>
                                        <td>
                                            <!-- Image Count Badge -->
                                            {{-- @if (count($images) > 0)
                                                <span class="badge bg-secondary">{{ count($images) }}
                                                    images</span>
                                            @endif --}}

                                        </td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input status-toggle"
                                                    data-id="{{ $gallery->id }}"
                                                    {{ $gallery->is_active ? 'checked' : '' }}>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('gallery.show', $gallery->slug) }}" target="_blank"
                                                    class="btn btn-outline-info" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('gallery.edit', $gallery) }}"
                                                    class="btn btn-outline-primary" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('gallery.destroy', $gallery) }}" method="POST"
                                                    onsubmit="return confirm('Delete this gallery?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger"
                                                        title="Delete">
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

                    {{-- {{ $galleries->links() }} --}}
                @else
                    <div class="text-center py-5">
                        <i class="fas fa-images fa-3x text-muted mb-3"></i>
                        <h4>No galleries found</h4>
                        <p class="text-muted">Start by creating your first gallery</p>
                        <a href="{{ route('gallery.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Create Gallery
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    
        <script>
            $(document).ready(function() {
                $('.status-toggle').change(function() {
                    const galleryId = $(this).data('id');
                    const isActive = $(this).is(':checked');

                    $.ajax({
                        url: "{{ route('gallery.update-status', ':id') }}".replace(':id', galleryId),
                        method: 'POST',
                        data: {
                            is_active: isActive ? 1 : 0,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            alert('Status updated successfully');
                        },
                        error: function() {
                            alert('Error updating status');
                            $(this).prop('checked', !isActive);
                        }
                    });
                });
            });
        </script>
 
</x-admin-layout>
