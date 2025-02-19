@extends('admin.layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Suppliers'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Supplier</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 error-placeholder">
                                <label class="form-label"> Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name', $supplier->name) }}" placeholder="supplier Name">
                                <small class="form-text d-block text-muted">supplier Name</small>
                            </div>
                            <div class="mb-3 error-placeholder">
                                <label class="form-label"> Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email', $supplier->email) }}" placeholder="supplier Email">
                                <small class="form-text d-block text-muted">supplier Email</small>
                            </div>
                            <div class="mb-3 error-placeholder">
                                <label class="form-label"> Mobile</label>
                                <input type="text" class="form-control" name="mobile" value="{{ old('mobile', $supplier->mobile) }}" placeholder="supplier mobile">
                                <small class="form-text d-block text-muted">supplier Mobile</small>
                            </div>
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" name="address">{{ old('address', $supplier->address) }}</textarea>
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
