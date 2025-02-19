@extends('admin.layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Units'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Units</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('units.update', $unit->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 

                            <div class="mb-3 error-placeholder">
                                <label class="form-label"> Title</label>
                                <input type="text" class="form-control" name="title" value="{{ old('name', $unit->title) }}" placeholder="Unit Name">
                                <small class="form-text d-block text-muted">Units</small>
                            </div>

                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description">{{ old('description', $unit->description) }}</textarea>
                            </div>

                        

                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Status</label>
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="status" value="active" {{ old('status', $unit->status) == 'active' ? 'checked' : '' }}> Active
                                </label>
                                <label class="form-check">
                                    <input type="radio" class="form-check-input" name="status" value="blocked" {{ old('status', $unit->status) == 'blocked' ? 'checked' : '' }}> Inactive
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
