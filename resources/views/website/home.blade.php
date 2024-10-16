@extends('website.layouts.app')
<style>
    .spacing {
        letter-spacing: -1px;
    }

</style>
@section('content')
{{-- carousel --}}
<div id="carouselBannerIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselBannerIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselBannerIndicators" data-slide-to="1"></li>
        <li data-target="#carouselBannerIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('banner/aa.jfif') }}" alt="cardamom">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('banner/bb.jfif') }}" alt="pepper">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('banner/cc.jfif') }}" alt="spices">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('banner/cc.jfif') }}" alt="kerala">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('banner/cc.jfif') }}" alt="idukki">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselBannerIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselBannerIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{-- Hand Picked  --}}
<div class="container px-4 text-center">
    <div class="row gx-5">
        <div class="col">
            <div class="p-3 d-flex align-items-center">
                <img class="rounded-3 mr-4" width="80" height="80" src="{{ asset('banner/farm.jfif') }}" alt="" srcset="">
                <h3 class="fw-bold spacing">Farm Fresh</h3>
            </div>
        </div>
        <div class="col">
            <div class="p-3 d-flex align-items-center "> <img class="rounded-3 mr-4 " width="80" height="80" src="{{ asset('banner/hand.jfif') }}" alt="" srcset="">
                <h3 class="fw-bold spacing">Hand Picked</h3>
            </div>
        </div>
        <div class="col">
            <div class="p-3 d-flex align-items-center"> <img class="rounded-3 mr-4" width="80" height="80" src="{{ asset('banner/fresh.jfif') }}" alt="" srcset="">
                <h3 class="fw-bold spacing">Freshly Processed</h3>
            </div>
        </div>
        <div class="col">
            <div class="p-3 d-flex align-items-center"> <img class="rounded-3 mr-4" width="80" height="80" src="{{ asset('banner/doorstep.jfif') }}" alt="" srcset="">
                <h3 class="fw-bolder spacing">Delivery at DoorStep</h3>
            </div>
        </div>
    </div>
</div>
<div class="container px-4 text-center">
    <hr>
</div>
{{-- Product List --}}
<div class="container px-4 ">
    <div class="d-flex flex-row mb-5">
        <div class="col p-2">
            <h3 class="text-success font-weight-bold">Top Selling</h3>
        </div>
        <div class="d-flex flex-row-reverse">
            <a href="#" class="btn btn-success cartButton">See More <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
        <!-- Added mb-4 for row spacing -->
        <div class="col">
            <div class="card h-100 cartButton cartBorder ">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon ">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton cartBorder">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton cartBorder">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton cartBorder">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
        <!-- Added mb-4 for row spacing -->
        <div class="col">
            <div class="card h-100 cartButton cartBorder ">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon ">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton cartBorder">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton cartBorder">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton cartBorder">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
    </div>
</div>
{{-- 100% offer section --}}
<div class="container px-4">
    <div class="row d-flex align-items-stretch">
        <div class="col-4 d-flex">
            <div class="card cartButton w-100 homecardBackgroud">
                <div class="card-body">
                    <h3 class="card-subtitle text-center m-5 p-5">10% Off on your First Purchase</h3>
                </div>
            </div>
        </div>
        <div class="col-8 d-flex">
            <div class="card cartButton w-100 homecardBackgroud">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h3 class="card-subtitle m-3 text-center">Bulk Orders Available</h3>
                    <a href="#" class="btn btnColor cartButton ">Connect</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- shop spices set --}}
<div class="container px-4 m-3">
    <div class="d-flex flex-row mb-5">
        <div class="col p-2">
            <h3 class="text-success font-weight-bold">Shop Spices Set & Gifts</h3>
        </div>
        <div class="d-flex flex-row-reverse">
            <a href="#" class="btn btn-success cartButton">See More <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
        <!-- Added mb-4 for row spacing -->
        <div class="col">
            <div class="card h-100 cartButton cartBorder ">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon ">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton cartBorder ">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon ">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton cartBorder ">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon ">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton cartBorder ">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton buttonIcon ">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
    </div>

</div>
{{-- Refresh Your Days --}}
<div class="container px-4 text-center">
    <hr>
</div>
<div class="container px-4 mb-3 text-center">
    <div class="row">
        <div class="col-sm-4">
            <div class="card cartButton h-100">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card h-100 border-0">
                <div class="d-flex justify-content-between m-5">
                    <div class="p-2 text-start">
                        <h2 class="text-success font-weight-bold">Refresh Your Days</h2>
                    </div>
                    <div class="p-2">
                        <a href="#" class="btn btn-success cartButton">See More <i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <!-- Card 1 -->
                        <div class="col-md-6">
                            <div class=" m-2 h-100 cartButton cartBorder">
                                <div class="">
                                    <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top p-2" alt="...">
                                    <div class="overlay">
                                        <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top p-2" alt="...">
                                    </div>
                                    <div class="p-5">
                                        <h5 class="card-title">Star Anise</h5>
                                        <p class="card-text">Star Anise</p>
                                        <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                                        <button type="button" class="btn-lg cartButton buttonIcon ">
                                            <i class="fa-regular fa-heart icon-1"></i>
                                            <i class="fa fa-solid fa-heart icon-2"></i>
                                        </button>
                                        <a href="#" class="btn btn-success btn-lg cartButton">
                                            <i class="bi bi-cart fs-1"></i>Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-6">
                            <div class="card m-2 h-100 cartButton cartBorder">
                                <div class="">
                                    <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top p-2" alt="...">
                                    <div class="overlay">
                                        <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top p-2" alt="...">
                                    </div>
                                    <div class="p-5">
                                        <h5 class="card-title">Star Anise</h5>
                                        <p class="card-text">Star Anise</p>
                                        <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                                        <button type="button" class="btn-lg cartButton buttonIcon">
                                            <i class="fa-regular fa-heart icon-1"></i>
                                            <i class="fa fa-solid fa-heart icon-2"></i>
                                        </button>
                                        <a href="#" class="btn btn-success cartButton">
                                            <i class="bi bi-cart fs-1"></i>Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{{-- image banner --}}
<div class=" mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="position-relative">
                <img src="{{ asset('banner/idukki.jpeg') }}" alt="test" class="img-fluid w-100">
                <div class="carousel-caption text-white" style="top: 50%; transform: translateY(-50%);">
                    <div class="row">
                        <div class="col-md-4">
                            <h1 class="text-white ">Straight From Idukki</h1>
                        </div>
                        <div class="col-md-8">
                            <p class="text-white fw-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <a href="#" class="btn  cartButton mt-3 btnColor">Know More</a>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- why Shop with Ethan --}}
<div class="container m-5 text-center">
    <div class="row gx-5">
        <div class="col">
            <div class="p-3 d-flex flex-column align-items-center">
                <img class="rounded-3 mb-3" width="80" height="80" src="{{ asset('banner/farm.jfif') }}" alt="">
                <h3 class="fw-bold spacing">100% Natural</h3>
                <p class="text-muted">Fresh produce straight from the farm.</p>
            </div>
        </div>
        <div class="col">
            <div class="p-3 d-flex flex-column align-items-center">
                <img class="rounded-3 mb-3" width="80" height="80" src="{{ asset('banner/hand.jfif') }}" alt="">
                <h3 class="fw-bold spacing">Safe Shipping</h3>
                <p class="text-muted">Reliable delivery right to your doorstep.</p>
            </div>
        </div>
        <div class="col">
            <div class="p-3 d-flex flex-column align-items-center">
                <img class="rounded-3 mb-3" width="80" height="80" src="{{ asset('banner/fresh.jfif') }}" alt="">
                <h3 class="fw-bold spacing">Online Support</h3>
                <p class="text-muted">We're here to assist you anytime.</p>
            </div>
        </div>
        <div class="col">
            <div class="p-3 d-flex flex-column align-items-center">
                <img class="rounded-3 mb-3" width="80" height="80" src="{{ asset('banner/doorstep.jfif') }}" alt="">
                <h3 class="fw-bolder spacing">Safe & Easy Payment</h3>
                <p class="text-muted">Secure transactions for your peace of mind.</p>
            </div>
        </div>
    </div>
</div>
{{-- Testimonials --}}
<div class="bg-warning bg-gradient">
    <div>
        <h1 class="text-success text-center font-weight-bold">Reviews From Our Customers</h1>
    </div>
    <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselTestimonials" data-slide-to="0" class="active"></li>
            <li data-target="#carouselTestimonials" data-slide-to="1"></li>
            <li data-target="#carouselTestimonials" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                    <div>
                        <p><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                        <p><i class="bi bi-quote text-success"></i></p>
                        <p class="text-black">"Amazing service! Their prompt response and support have been exceptional."</p>
                        <h5>Rajesh Kumar</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                    <div>
                        <p><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                        <p><i class="bi bi-quote text-success"></i></p>

                        <p class="text-black">"The team went above and beyond to ensure my experience was smooth and hassle-free."</p>
                        <h5>Aditi Singh</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                    <div>
                        <p><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></p>
                        <p><i class="bi bi-quote text-success"></i></p>
                        <p class="text-black">"Exceptional quality and fantastic customer service! Highly recommended."</p>
                        <h5>Manish Gupta</h5>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselTestimonials" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
@endsection
