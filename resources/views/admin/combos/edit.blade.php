@extends('admin.layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Edit Combo'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Combo</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('combos.update', $combo->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Product Selection (Multiple) -->
                            <div class="mb-3">
                                <label for="product_id" class="form-label">Products</label>
                                <select class="form-select select2" name="product_id[]" id="product_id" multiple required>
                                    @foreach ($products as $product)
                                    <option value="{{ $product->id }}" {{ in_array($product->id, $selectedProducts) ? 'selected' : '' }}>
                                        {{ $product->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- GST Tax -->
                            <div class="mb-3">
                                <label for="gsttax_id" class="form-label">GST Tax</label>
                                <select class="form-select" name="gsttax_id" id="gsttax_id" required>
                                    @foreach ($gstTaxes as $gstTax)
                                    <option value="{{ $gstTax->id }}" {{ $combo->gsttax_id == $gstTax->id ? 'selected' : '' }}>
                                        {{ $gstTax->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('gsttax_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $combo->name) }}" required>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Combo Price -->
                            <div class="mb-3">
                                <label for="combo_price" class="form-label">Combo Price</label>
                                <input type="number" class="form-control" name="combo_price" id="combo_price" value="{{ old('combo_price', $combo->combo_price) }}" step="0.01" required>
                                @error('combo_price')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description">{{ old('description', $combo->description) }}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <div>
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status" value="1" {{ old('status', $combo->status) == '1' ? 'checked' : '' }}> Active
                                    </label>
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status" value="0" {{ old('status', $combo->status) == '0' ? 'checked' : '' }}> Inactive
                                    </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/*">
                                @if ($combo->image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $combo->image) }}" alt="Combo Image" class="img-thumbnail" width="150">
                                </div>
                                @endif
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="{{ asset('js/combo.js') }}"></script>
@endsection