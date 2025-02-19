@extends('admin.layouts.app')
@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Gst Tax'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Create GST Tax</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('taxes.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="GST Tax Name">
                                <small class="form-text d-block text-muted"> Name</small>
                            </div>


                            <div class="mb-3 error-placeholder">
                                <label class="form-label">Percentage</label>
                                <input type="text" class="form-control" name="percentage" placeholder="Percentage">
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
