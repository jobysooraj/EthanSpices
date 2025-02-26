@extends('admin.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Create Stock'])
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Create Stock</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('stocks.store') }}" method="POST">
                            @csrf
                            <!-- Category Selection -->
                               <div class="mb-3 error-placeholder">
                                <label class="form-label">Select Category</label>
                                <select class="form-control" name="category_id" id="category-select">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Product Dropdown (Populated Dynamically) -->
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Products</label>
                                <select class="form-control" name="product_id" id="product-select">
                                    <option value="">Select Product</option>
                                    <!-- Options will be loaded via AJAX -->
                                </select>
                            </div>

                            <!-- Total Quantity -->
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Total Quantity</label>
                                <input type="number" class="form-control" name="total_quantity" placeholder="Enter Total Quantity" step="0.01" required>
                            </div>


                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/stock.js') }}"></script>

@endsection
