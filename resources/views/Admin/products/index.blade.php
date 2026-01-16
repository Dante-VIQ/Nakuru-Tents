<x-admin-layout>
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Products</h1>
            <a href="{{ route('products.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add Product
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">


            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1>Add New Product</h1>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('products.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Product Name *</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="type" class="form-label">Product Type *</label>
                                            <select class="form-control @error('type') is-invalid @enderror"
                                                id="type" name="type" required>
                                                <option value="">Select Type</option>
                                                @if (!isset($productTypes))
                                                    @php
                                                        $productTypes = [
                                                            'tent' => 'Tent',
                                                            'canvas' => 'Canvas',
                                                            'accessory' => 'Accessory',
                                                        ];
                                                    @endphp
                                                @endif
                                                @foreach ($productTypes as $key => $label)
                                                    <option value="{{ $key }}"
                                                        {{ old('type') == $key ? 'selected' : '' }}>
                                                        {{ $label }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="price" class="form-label">Price (₹) *</label>
                                            <input type="number" step="0.01"
                                                class="form-control @error('price') is-invalid @enderror" id="price"
                                                name="price" value="{{ old('price') }}" required>
                                            @error('price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="stock_quantity" class="form-label">Stock Quantity *</label>
                                            <input type="number"
                                                class="form-control @error('stock_quantity') is-invalid @enderror"
                                                id="stock_quantity" name="stock_quantity"
                                                value="{{ old('stock_quantity', 0) }}" required>
                                            @error('stock_quantity')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label">Status</label>
                                            <div class="form-check form-switch mt-2">
                                                <input type="checkbox" class="form-check-input" id="is_active"
                                                    name="is_active" value="1"
                                                    {{ old('is_active', true) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_active">
                                                    Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description *</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                            rows="4" required>{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="specifications" class="form-label">Specifications</label>
                                        <textarea class="form-control @error('specifications') is-invalid @enderror" id="specifications" name="specifications"
                                            rows="3">{{ old('specifications') }}</textarea>
                                        <small class="text-muted">Key specifications separated by commas or
                                            bullets</small>
                                        @error('specifications')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="images" class="form-label">Product Images</label>
                                        <input type="file" class="form-control @error('images') is-invalid @enderror"
                                            id="images" name="images[]" multiple accept="image/*">
                                        <small class="text-muted">You can select multiple images</small>
                                        @error('images')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save"></i> Save Product
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Product Types</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    @foreach ($productTypes as $key => $label)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $label }}
                                            <span class="badge bg-light text-dark">{{ ucfirst($key) }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="mb-0">Quick Tips</h5>
                            </div>
                            <div class="card-body">
                                <ul class="small text-muted mb-0">
                                    <li>Keep product names clear and descriptive</li>
                                    <li>For tents: Include capacity (e.g., "2-Person", "Family")</li>
                                    <li>For canvas: Mention material and dimensions</li>
                                    <li>Set stock to 0 for out-of-stock items</li>
                                    <li>Use simple language in descriptions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                @if ($products->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                  
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{-- @if ($product->image) --}}
                                            <img src="{{ asset('uploads/' . $product->image) }}"
                                                alt="{{ $product->name }}" class="rounded"
                                                style="width: 60px; height: 60px; object-fit: cover;">
                                            {{-- @else
                                                <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                                    style="width: 60px; height: 60px;">
                                                    <i class="fas fa-box text-muted"></i>
                                                </div>
                                            @endif --}}
                                        </td>
                                        <td>
                                            <strong>{{ $product->name }}</strong>
                                        </td>
                                        <td>
                                            <span class="badge bg-info">
                                                {{ ucfirst($product->type) }}
                                            </span>
                                        </td>
                                        <td>
                                            <strong>{{ $product->formatted_price }}</strong>
                                        </td>
                                        <td>
                                            <span
                                                class="badge bg-{{ $product->stock_quantity > 0 ? 'success' : 'danger' }}">
                                                {{ $product->stock_quantity }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input status-toggle"
                                                    data-id="{{ $product->id }}"
                                                    {{ $product->is_active ? 'checked' : '' }}>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('products.edit', $product) }}"
                                                    class="btn btn-outline-primary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('products.destroy', $product) }}"
                                                    method="POST" onsubmit="return confirm('Delete this product?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">
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

                    {{ $products->links() }}
                @else
                    <div class="text-center py-5">
                        <i class="fas fa-box-open fa-3x text-muted mb-3"></i>
                        <h4>No products found</h4>
                        <p class="text-muted">Start by adding your first product</p>
                        <a href="{{ route('products.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add Product
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.status-toggle').change(function() {
                    const productId = $(this).data('id');
                    const isActive = $(this).is(':checked');

                    $.ajax({
                        url: "{{ route('products.update-status', ':id') }}".replace(':id',
                            productId),
                        method: 'POST',
                        data: {
                            is_active: isActive ? 1 : 0,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            alert(response.message);
                        },
                        error: function() {
                            alert('Error updating status');
                            $(this).prop('checked', !isActive);
                        }
                    });
                });
            });
        </script>
    @endpush
</x-admin-layout>
