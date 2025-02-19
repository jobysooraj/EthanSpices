@extends('admin.layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Categories'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Category</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 

                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name', $category->name) }}" placeholder="Category Name">
                                <small class="form-text d-block text-muted">Category Name</small>
                            </div>

                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description">{{ old('description', $category->description) }}</textarea>
                            </div>

                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Short Description</label>
                                <textarea class="form-control" name="short_description">{{ old('short_description', $category->short_description) }}</textarea>
                            </div>

                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Image</label>
                                <div>
                                    <input type="file" class="validation-file" name="image">
                                </div>
                                @if($category->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image" width="100">
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Status</label>
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="status" value="1" {{ old('status', $category->status) == 1 ? 'checked' : '' }}> Active
                                </label>
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="status" value="0" {{ old('status', $category->status) == 0 ? 'checked' : '' }}> Inactive
                                </label>
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
