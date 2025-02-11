@extends('website.layouts.app')
@section('content')
    <div class="container px-4 m-5 text-center">
        <div class="card border-0">
            <div class="card-body">
                <div class="justify-items-center">
                    <h1 class="card-title text-center">Bulk Orders</h1>
                    <h6 class="text-wrap">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used
                        to demonstrate the visual form of a document or a typeface without relying on meaningful content.
                        Lorem ipsum may be used as a placeholder before the final copy is available.</h6>
                    <h6>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the
                        visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be
                        used as a placeholder before the final copy is available.</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-4 text-center m-5 p-5">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-4">
                <div class="card w-100 h-100 homecardBackgroud cartButton mb-4">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary mt-auto">Button</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control bulkInput" id="name" placeholder="Name*">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control bulkInput" id="exampleInputEmail1" placeholder="Email*"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control bulkInput" id="exampleInputPhone1"
                            placeholder="Mobile Number*">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control bulkInput" id="exampleInputPurpose"
                            placeholder="Purpose*">
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control bulkInput" id="exampleInputQuantity"
                            placeholder="Quantity Required*">
                    </div>

                    <button class="btn btn-primary btnSendRequest" type="button">Send Request</button>
                </form>
                <div class="d-flex justify-content-start mt-3"> <!-- Flex container for alignment -->
                    <h6>We will get back to you!</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-4 text-center">
        <hr>
    </div>
    @include('website.handpicked')
@endsection
