@extends('admin.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Stocks'])

        <div class="row">
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="d-inline-block dropdown show">
                                <a href="{{route('stocks.create')}}" class="btn btn-success">Add Stock</a>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Stocks</h5>
                    </div>
                    <div class="card-body">
                        <table id="datatables-stocks" class="table table-striped" style="width:100%" data-url="{{ route('stocks.index') }}">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Total Quantity</th>
                                    <th>Used Quantity</th>
                                    <th>Balance</th>
                                    <th>Action</th>
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
                        <h5 class="card-title mb-0">Stocks</h5>
                    </div>
                    <div class="card-body">

                        <table class="table table-sm my-2">
                            <tbody>
                                <tr>
                                    <th>Category</th>
                                    <td id="category">Charissa Hilt</td>
                                </tr>
                                <tr>
                                    <th>Product</th>
                                    <td id="product_name">Matrix Interior Design</td>
                                </tr>
                                <tr>
                                    <th>Total Quantity</th>
                                    <td id="total_quantity">Matrix Interior Design</td>
                                </tr>
                                <tr>
                                    <th>Total Used</th>
                                    <td id="total_used">Matrix Interior Design</td>
                                </tr>
                                <tr>
                                    <th>Balance </th>
                                    <td id="balnce_quantity">Matrix Interior Design</td>
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
<script src="{{ asset('js/stock.js') }}"></script>

@endsection
