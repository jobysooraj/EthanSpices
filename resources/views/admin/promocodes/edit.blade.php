@extends('admin.layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Promocode'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Promocode</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('promocodes.update', $promocode->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Promocode Field -->
                            <div class="mb-3">
                                <label for="promocode" class="form-label">Promocode</label>
                                <input type="text" class="form-control" id="promocode" name="promocode" placeholder="Enter promocode" value="{{ old('promocode', $promocode->promocode) }}">
                                @error('promocode')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description Field -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Enter description">{{ old('description', $promocode->description) }}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Discount Type Field -->
                            <div class="mb-3">
                                <label for="discount_type" class="form-label">Discount Type</label>
                                <select class="form-control" id="discount_type" name="discount_type">
                                    <option value="1" {{ old('discount_type', $promocode->discount_type) == 1 ? 'selected' : '' }}>Fixed Amount</option>
                                    <option value="0" {{ old('discount_type', $promocode->discount_type) == 0 ? 'selected' : '' }}>Percentage</option>
                                </select>
                                @error('discount_type')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Discount Value Field -->
                            <div class="mb-3">
                                <label for="discount_value" class="form-label">Discount Value</label>
                                <input type="number" class="form-control" id="discount_value" name="discount_value" placeholder="Enter discount value" value="{{ old('discount_value', $promocode->discount_value) }}" step="0.01">
                                @error('discount_value')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Minimum Order Amount Field -->
                            <div class="mb-3">
                                <label for="min_order_amount" class="form-label">Minimum Order Amount</label>
                                <input type="number" class="form-control" id="min_order_amount" name="min_order_amount" placeholder="Enter minimum order amount" value="{{ old('min_order_amount', $promocode->min_order_amount) }}" step="0.01">
                                @error('min_order_amount')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Maximum Discount Field -->
                            <div class="mb-3">
                                <label for="max_discount" class="form-label">Maximum Discount</label>
                                <input type="number" class="form-control" id="max_discount" name="max_discount" placeholder="Enter maximum discount" value="{{ old('max_discount', $promocode->max_discount) }}" step="0.01">
                                @error('max_discount')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Start Date Field -->
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $promocode->start_date ? $promocode->start_date->toDateString() : '') }}">
                                @error('start_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- End Date Field -->
                            <div class="mb-3">
                                <label for="end_date" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $promocode->end_date ? $promocode->end_date->toDateString() : '') }}">
                                @error('end_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Usage Limit Field -->
                            <div class="mb-3">
                                <label for="usage_limit" class="form-label">Usage Limit</label>
                                <input type="number" class="form-control" id="usage_limit" name="usage_limit" placeholder="Enter usage limit" value="{{ old('usage_limit', $promocode->usage_limit) }}">
                                @error('usage_limit')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Usage Per User Limit Field -->
                            <div class="mb-3">
                                <label for="usage_per_user_limit" class="form-label">Usage Per User Limit</label>
                                <input type="number" class="form-control" id="usage_per_user_limit" name="usage_per_user_limit" placeholder="Enter usage per user limit" value="{{ old('usage_per_user_limit', $promocode->usage_per_user_limit) }}">
                                @error('usage_per_user_limit')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status Field -->
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="1" {{ old('status', $promocode->status) == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status', $promocode->status) == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Update Promocode</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
