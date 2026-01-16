<x-admin-layout>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Gallery</h1>
        <a href="{{ route('gallery.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Gallery Title *</label>
                            <input type="text"
                                   class="form-control @error('title') is-invalid @enderror"
                                   id="title"
                                   name="title"
                                   value="{{ old('title', $gallery->title) }}"
                                   required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="category" class="form-label">Category *</label>
                                <select class="form-control @error('category') is-invalid @enderror"
                                        id="category"
                                        name="category"
                                        required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $key => $label)
                                        <option value="{{ $key }}"
                                                {{ old('category', $gallery->category) == $key ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <div class="form-check form-switch mt-2">
                                    <input type="checkbox"
                                           class="form-check-input"
                                           id="is_active"
                                           name="is_active"
                                           value="1"
                                           {{ old('is_active', $gallery->is_active) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">
                                        Active
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                      id="description"
                                      name="description"
                                      rows="3">{{ old('description', $gallery->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Current Images -->
                        @if($gallery->images && count($gallery->images) > 0)
                            <div class="mb-3">
                                <label class="form-label">Current Images</label>
                                <div class="row g-2">
                                    @foreach($gallery->images as $image)
                                        <div class="col-3">
                                            <div class="position-relative">
                                                <img src="{{ Storage::url($gallery->image) }}"
                                                     alt="Gallery Image"
                                                     class="img-thumbnail w-100"
                                                     style="height: 100px; object-fit: cover;">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="images" class="form-label">Add New Images (Optional)</label>
                            <input type="file"
                                   class="form-control @error('images') is-invalid @enderror"
                                   id="images"
                                   name="images[]"
                                   multiple
                                   accept="image/*">
                            <small class="text-muted">Select new images to replace current ones</small>
                            @error('images')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div id="imagePreview" class="mt-3 row g-2"></div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Gallery
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Gallery Info</h5>
                </div>
                <div class="card-body">
                    <p><strong>Created:</strong> {{ $gallery->created_at->format('M d, Y') }}</p>
                    <p><strong>Last Updated:</strong> {{ $gallery->updated_at->format('M d, Y') }}</p>
                    <p><strong>Slug:</strong> {{ $gallery->slug }}</p>
                    <p><strong>Images:</strong> {{ count($gallery->images ?? []) }}</p>

                    <hr>

                    <form action="{{ route('gallery.destroy', $gallery) }}"
                          method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this gallery?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash"></i> Delete Gallery
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
// Image preview
document.getElementById('images').addEventListener('change', function(e) {
    const preview = document.getElementById('imagePreview');
    preview.innerHTML = '';

    for (let i = 0; i < this.files.length; i++) {
        const file = this.files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
            const col = document.createElement('div');
            col.className = 'col-4';
            col.innerHTML = `
                <div class="position-relative">
                    <img src="${e.target.result}" class="img-thumbnail w-100" style="height: 100px; object-fit: cover;">
                    <small class="text-muted d-block text-truncate">${file.name}</small>
                </div>
            `;
            preview.appendChild(col);
        }

        reader.readAsDataURL(file);
    }
});
</script>
@endpush
</x-admin-layout>
