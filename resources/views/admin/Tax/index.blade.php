@extends('admin.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'GstTax'])

    <div class="row">
        <div class="col-xxl-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-actions float-end">                        
                        <div class="d-inline-block dropdown show">                           
                            <a href="{{route('taxes.create')}}" class="btn btn-success">Add GstTax</a>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Gst Tax</h5>
                </div>
                <div class="card-body">
                    <table id="datatables-taxes" class="table table-striped" style="width:100%" data-url="{{ route('taxes.index') }}">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Percentage</th>                                
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xxl-3">
            <div class="card">
                <div class="card-header">
                    <div class="card-actions float-end">
                        <a href="#" class="me-1">
                            <i class="align-middle" data-feather="refresh-cw"></i>
                        </a>
                        <div class="d-inline-block dropdown show">
                            <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                <i class="align-middle" data-feather="more-vertical"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">GST Tax</h5>
                </div>
                <div class="card-body">
                    <table class="table table-sm my-2">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td id="name">Charissa Hilt</td>
                            </tr>
                            <tr>
                                <th>Percentage</th>
                                <td id="percentage">Matrix Interior Design</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection
@section('scripts')
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/tax.js') }}"></script>

@endsection
