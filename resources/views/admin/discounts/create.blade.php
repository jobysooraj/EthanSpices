@extends('admin.layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Discount'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Create Discount</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('discounts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Discount Name">
                                <small class="form-text d-block text-muted"> Name</small>
                            </div>


                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Discount Type</label>
                                <select class="form-control" name="discount_type" id="discount_type">
                                    <option value="fixed">Fixed Amount</option>
                                    <option value="percentage">Percentage</option>
                                </select>
                            </div>
                            <div class="mb-3 error-placeholder" id="discountValueContainer">
                                <label class="form-label" id="discountValueLabel">Amount</label>
                                <input type="number" class="form-control" name="amount" id="discountValue" placeholder="Enter value">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Valid From</label>
                                <input type="date" class="form-control" name="valid_from" value="{{ old('valid_from') }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Valid Until</label>
                                <input type="date" class="form-control" name="valid_until" value="{{ old('valid_until') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
