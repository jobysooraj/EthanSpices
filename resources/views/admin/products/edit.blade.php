@extends('admin.layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Edit Product'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Product</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $product->name) }}" required>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Category -->
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Category</label>
                                <select class="form-select" name="category_id" id="category_id" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Supplier -->
                            <div class="mb-3">
                                <label for="supplier_id" class="form-label">Supplier</label>
                                <select class="form-select" name="supplier_id" id="supplier_id" required>
                                    <option value="">Select Supplier</option>
                                    @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}" {{ $supplier->id == $product->supplier_id ? 'selected' : '' }}>
                                        {{ $supplier->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('supplier_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- GST Tax -->
                            <div class="mb-3">
                                <label for="gsttax_id" class="form-label">GST Tax</label>
                                <select class="form-select" name="gsttax_id" id="gsttax_id" required>
                                    <option value="">Select GST Tax</option>
                                    @foreach ($gstTaxes as $gstTax)
                                    <option value="{{ $gstTax->id }}" {{ $gstTax->id == $product->gsttax_id ? 'selected' : '' }}>
                                        {{ $gstTax->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('gsttax_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Price -->
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" name="price" id="price" value="{{ old('price', $product->price) }}" step="0.01" required>
                                @error('price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label class="form-label">Current Images</label>
                                <div id="image_column">
                                    @foreach ($productImages as $image)
                                    <div class="d-inline-block position-relative">
                                        <img src="{{ asset('storage/' . $image->image_path) }}" width="64" height="64" class="rounded-circle mt-2 mx-1">
                                        <label class="position-absolute top-0 start-0 bg-primary text-white p-1 rounded" data-bs-toggle="tooltip" title="Remove Image">
                                            <input type="checkbox" name="remove_images[]" value="{{ $image->id }}">
                                            ❌
                                        </label> </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Upload New Images</label>
                                <input type="file" class="form-control" name="image[]" id="image" accept="image/*" multiple>
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Short Description -->
                            <div class="mb-3">
                                <label for="short_description" class="form-label">Short Description</label>
                                <textarea class="form-control" name="short_description" id="short_description">{{ old('short_description', $product->short_description) }}</textarea>
                                @error('short_description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description">{{ old('description', $product->description) }}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Batch No -->
                            <div class="mb-3">
                                <label for="batch_no" class="form-label">Batch No</label>
                                <input type="text" class="form-control" name="batch_no" id="batch_no" value="{{ old('batch_no', $product->batch_no) }}">
                                @error('batch_no')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- HSN Code -->
                            <div class="mb-3">
                                <label for="hsn_code" class="form-label">HSN Code</label>
                                <input type="text" class="form-control" name="hsn_code" id="hsn_code" value="{{ old('hsn_code', $product->hsn_code) }}">
                                @error('hsn_code')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status" value="1" {{ $product->status == '1' ? 'checked' : '' }}> Active
                                    </label>
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status" value="0" {{ $product->status == '0' ? 'checked' : '' }}> Inactive
                                    </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
