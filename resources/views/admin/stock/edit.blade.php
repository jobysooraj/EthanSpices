@extends('admin.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Edit Stock'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Stock</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('stocks.update', $stock->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Category Selection -->
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Category</label>
                                <select class="form-control" name="category_id" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $stock->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Product Selection -->
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Product</label>
                                <select class="form-control" name="product_id" required>
                                    <option value="">Select Product</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}" {{ $stock->product_id == $product->id ? 'selected' : '' }}>
                                            {{ $product->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Total Quantity -->
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Total Quantity</label>
                                <input type="number" class="form-control" name="total_quantity" value="{{ $stock->total_quantity }}" step="0.01" required>
                            </div>

                            <!-- Used Quantity -->
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Used Quantity</label>
                                <input type="number" class="form-control" name="used_quantity" value="{{ $stock->used_quantity }}" step="0.01" required>
                            </div>

                            <!-- Balanced Quantity (Read-Only) -->
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Balanced Quantity</label>
                                <input type="number" class="form-control" name="balanced_quantity" value="{{ $stock->balanced_quantity }}" step="0.01" readonly>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Update Stock</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
