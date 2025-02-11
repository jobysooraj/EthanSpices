@extends('admin.layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Categories'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Create Category</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Category Name">
                                <small class="form-text d-block text-muted">Category Name</small>
                            </div>


                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Short Description</label>
                                <textarea class="form-control" name="short_description"></textarea>
                            </div>
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Image</label>
                                <div>
                                    <input type="file" class="validation-file" name="image">
                                </div>
                            </div>

                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Status</label>
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="status" value="1"> Active
                                </label>
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="status" value="0"> Inactive
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
