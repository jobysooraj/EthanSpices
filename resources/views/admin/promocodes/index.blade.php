@extends('admin.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Promocode'])

        <div class="row">
            <div class="col-xxl-9">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="d-inline-block dropdown show">
                                <a href="{{route('promocodes.create')}}" class="btn btn-success">Add Promocode</a>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Promocode</h5>
                    </div>
                    <div class="card-body">
                        <table id="datatables-promocodes" class="table table-striped" style="width:100%" data-url="{{ route('promocodes.index') }}">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Promocode</th>
                                    <th>Description</th>
                                    <th>Discount Type</th>
                                    <th>Discount Value</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
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
                        <h5 class="card-title mb-0">Promocode </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm my-2">
                            <tbody>
                                <tr>
                                    <th>Promocode</th>
                                    <td id="promocode">XYZ123</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td id="description">Special discount for new users</td>
                                </tr>
                                <tr>
                                    <th>Discount Type</th>
                                    <td id="discount_type">Percentage</td>
                                </tr>
                                <tr>
                                    <th>Discount Value</th>
                                    <td id="discount_value">15%</td>
                                </tr>
                                <tr>
                                    <th>Min Order Amount</th>
                                    <td id="min_order_amount">$100</td>
                                </tr>
                                <tr>
                                    <th>Max Discount</th>
                                    <td id="max_discount">$50</td>
                                </tr>
                                <tr>
                                    <th>Start Date</th>
                                    <td id="start_date">2025-03-01</td>
                                </tr>
                                <tr>
                                    <th>End Date</th>
                                    <td id="end_date">2025-03-31</td>
                                </tr>
                                <tr>
                                    <th>Usage Limit</th>
                                    <td id="usage_limit">100</td>
                                </tr>
                                <tr>
                                    <th>Usage Per User Limit</th>
                                    <td id="usage_per_user_limit">1</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td id="status">Active</td>
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
<script src="{{ asset('js/promocode.js') }}"></script>

@endsection
