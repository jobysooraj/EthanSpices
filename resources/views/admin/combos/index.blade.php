@extends('admin.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Combo'])

    <div class="row">
        <div class="col-xxl-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-actions float-end">                        
                        <div class="d-inline-block dropdown show">                           
                            <a href="{{route('combos.create')}}" class="btn btn-success">Add Combo</a>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Combos</h5>
                </div>
                <div class="card-body">
                    <table id="datatables-combos" class="table table-striped" style="width:100%" data-url="{{ route('combos.index') }}">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Products</th>
                                <th>Units</th>
                                <th>Product Price</th>
                                <th>Combo Price</th>
                                <th>Description </th>
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
                    <h5 class="card-title mb-0">Combos</h5>
                </div>
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-sm-3 col-xl-12 col-xxl-4 text-center">
                            <img id="combo_image" width="64" height="64" class="rounded-circle mt-2" alt="">
                        </div>
                        <div class="col-sm-9 col-xl-12 col-xxl-8">
                            <strong>Description</strong>
                            <p id="description"></p>
                        </div>
                    </div>

                    <table class="table table-sm my-2">
                        <tbody>
                            <tr>
                                <th>Code</th>
                                <td id="code">Charissa Hilt</td>
                            </tr>
                            <tr>
                                <th>Combo</th>
                                <td id="combo_name">Matrix Interior Design</td>
                            </tr>
                             <tr>
                                <th>Products</th>
                                <td id="product_name">Matrix Interior Design</td>
                            </tr>
                             
                             <tr>
                                <th>Gst </th>
                                <td id="gst_amount">Matrix Interior Design</td>
                            </tr>
                           <tr>
                                <th>Product Price</th>
                                <td id="product_price">Matrix Interior Design</td>
                            </tr>
                             <tr>
                                <th>Combo Price </th>
                                <td id="price">Matrix Interior Design</td>
                            </tr>
                           
                            <tr>
                                <th>Status</th>
                                <td id="status"></td>
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
    <script src="{{ asset('js/combo.js') }}"></script>

@endsection
