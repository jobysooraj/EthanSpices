@extends('admin.layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Units'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Create Units</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('units.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 error-placeholder">
                                <label class="form-label"> Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Category Name">
                                <small class="form-text d-block text-muted">Title Name</small>
                            </div>


                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                           

                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Status</label>
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="status" value="active"> Active
                                </label>
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="status" value="blocked"> Inactive
                                </label>
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
