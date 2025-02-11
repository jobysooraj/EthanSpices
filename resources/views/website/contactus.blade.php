@extends('website.layouts.app')
@section('content')
<div class="container px-4 m-5 text-center">
    <div class="card border-0">
        <div class="card-body">
            <div class="justify-items-center">
                <h3 class="card-title text-center p-2">Contact Us</h3>
                <h1 class="card-title text-center text-success p-2">Get In Touch</h1>
                <h4 class="p-2">Fill up the form and our team will get back to you within 24 Hours</h4>
                
                <div class="row m-3">
                    <div class="col-sm">
                        <h4><i class="bi bi-telephone p-2"></i><strong> Phone:</strong> <span class="p-2">9495637268</span><i class="bi bi-envelope p-2"></i> <span class="m-2">|</span> <strong>Email:</strong> ethanspicesofficial@gmail.com</h4>
                    </div>
                    
                </div>

                <div class="row justify-content-center">
                    <h5><i class="bi bi-clock p-2"></i> <strong>Working Hours</strong>: 9AM to 6:30PM, Monday to Saturday</h5>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container px-4 text-center m-5 p-5">
        <div class="row d-flex justify-content-center">
           
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
                        <textarea name="message"  class="form-control bulkInput" id="" cols="30" rows="5">Message*</textarea>
                    </div>
                    

                    <button class="btn btn-primary btnSendRequest" type="button">Send </button>
                </form>
                <div class="d-flex justify-content-center mt-3"> <!-- Flex container for alignment -->
                    <h4>We will get back to you!</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-4 text-center">
        <hr>
    </div>
    @include('website.handpicked')
@endsection
