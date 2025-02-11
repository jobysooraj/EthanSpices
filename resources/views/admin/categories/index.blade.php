@extends('admin.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid">

        @include('admin.layouts.partials.header', ['pageTitle' => 'Categories'])

    <div class="row">
        <div class="col-xxl-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-actions float-end">                        
                        <div class="d-inline-block dropdown show">                           
                            <a href="{{route('categories.create')}}" class="btn btn-success">Add Category</a>
                        </div>
                    </div>
                    <h5 class="card-title mb-0">Categories</h5>
                </div>
                <div class="card-body">
                    <table id="datatables-categories" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Status</th>
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
                    <h5 class="card-title mb-0">Angelica Ramos</h5>
                </div>
                <div class="card-body">
                    <div class="row g-0">
                        <div class="col-sm-3 col-xl-12 col-xxl-4 text-center">
                            <img src="img/avatars/avatar-3.jpg" width="64" height="64" class="rounded-circle mt-2" alt="Angelica Ramos">
                        </div>
                        <div class="col-sm-9 col-xl-12 col-xxl-8">
                            <strong>About me</strong>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                                sociis
                                natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </div>

                    <table class="table table-sm my-2">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>Charissa Hilt</td>
                            </tr>
                            <tr>
                                <th>Company</th>
                                <td>Matrix Interior Design</td>
                            </tr>
                            <tr>
                                <th>Occupation</th>
                                <td>Desktop publisher</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>charissahilt@rhyta.com</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>+1234123123123</td>
                            </tr>
                            <tr>
                                <th>Website</th>
                                <td>hispanomarketer.com</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><span class="badge bg-success">Active</span></td>
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
