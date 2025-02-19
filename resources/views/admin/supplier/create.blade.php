@extends('admin.layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Supplier'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Create Suppliers</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('suppliers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 error-placeholder">
                                <label class="form-label"> Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Supplier Name">
                                <small class="form-text d-block text-muted">Supplier Name</small>
                            </div>

                            <div class="mb-3 error-placeholder">
                                <label class="form-label"> Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Supplier Email">
                                <small class="form-text d-block text-muted">Supplier Email</small>
                            </div>
                            <div class="mb-3 error-placeholder">
                                <label class="form-label"> Mobile</label>
                                <input type="text" class="form-control" name="mobile" placeholder="Supplier Mobile">
                                <small class="form-text d-block text-muted">Supplier Mobile</small>
                            </div>
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" name="address"></textarea>
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
