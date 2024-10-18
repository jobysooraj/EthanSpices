@extends('website.layouts.app')
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
    @include('website.handpicked')
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
                        <h3 class="card-subtitle text-center m-5 p-3">10% Off on your First Purchase</h3>
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
    <div class="container px-4 m-3 pt-5">
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

    <div class="container px-4 text-center">
        <hr>
    </div>
    {{-- Refresh Your Days --}}
    <div class="container px-4 mb-3 text-center">
        <div class="row">
            <div class="col-sm-4">
                <div class="card cartButton homecardBackgroud h-100">
                    <div class="card-body">
                        <h5 class="card-title ">Special title treatment</h5>
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
                            <a href="#" class="btn btn-success cartButton">See More <i
                                    class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-md-6">
                                <div class=" m-2 h-100 cartButton cartBorder">
                                    <div class="">
                                        <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top p-2"
                                            alt="...">
                                        <div class="overlay">
                                            <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top p-2"
                                                alt="...">
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
                                        <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top p-2"
                                            alt="...">
                                        <div class="overlay">
                                            <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top p-2"
                                                alt="...">
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
                                <p class="text-white fw-bold">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book.</p>
                            </div>
                        </div>
                        <a href="#" class="btn  cartButton mt-3 btnColor">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- why Shop with Ethan --}}
    <div class="container px-4 m-5 text-center">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 d-flex flex-column align-items-center">
                    <img class="rounded-3 mb-3" width="80" height="80" src="{{ asset('banner/farm.jfif') }}"
                        alt="">
                    <h3 class="fw-bold spacing">100% Natural</h3>
                    <p class="text-muted">Fresh produce straight from the farm.</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3 d-flex flex-column align-items-center">
                    <img class="rounded-3 mb-3" width="80" height="80" src="{{ asset('banner/hand.jfif') }}"
                        alt="">
                    <h3 class="fw-bold spacing">Safe Shipping</h3>
                    <p class="text-muted">Reliable delivery right to your doorstep.</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3 d-flex flex-column align-items-center">
                    <img class="rounded-3 mb-3" width="80" height="80" src="{{ asset('banner/fresh.jfif') }}"
                        alt="">
                    <h3 class="fw-bold spacing">Online Support</h3>
                    <p class="text-muted">We're here to assist you anytime.</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3 d-flex flex-column align-items-center">
                    <img class="rounded-3 mb-3" width="80" height="80" src="{{ asset('banner/doorstep.jfif') }}"
                        alt="">
                    <h3 class="fw-bolder spacing">Safe & Easy Payment</h3>
                    <p class="text-muted">Secure transactions for your peace of mind.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Testimonials --}}
    <div class="testnomialColor px-4 h-75">
        <div class="p-5">
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
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="testimonial-box">
                            <i class="bi bi-quote text-success fs-2 "></i>
                        </div>
                        <div class=" p-5" style="width:800px;">
                            <p>
                                <i class="fa-sharp fa-regular fa-star"></i>
                                <i class="fa-sharp fa-regular fa-star"></i>
                                <i class="fa-sharp fa-regular fa-star"></i>
                                <i class="fa-sharp fa-regular fa-star"></i>
                            </p>
                            <h5 class="text-black text-wrap">"In publishing and graphic design, Lorem ipsum is a
                                placeholder text commonly used to demonstrate the visual form of a document or a typeface
                                without relying on meaningful content. Lorem ipsum may be used as a placeholder before the
                                final copy is available"</h5>
                            <h5 class="p-2">Rajesh Kumar</h5>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="testimonial-box">
                            <i class="bi bi-quote text-success fs-2 "></i>
                        </div>
                        <div class=" p-5" style="width:800px;">
                            <p>
                                <i class="fa-sharp fa-regular fa-star"></i>
                                <i class="fa-sharp fa-regular fa-star"></i>
                                <i class="fa-sharp fa-regular fa-star"></i>
                                <i class="fa-sharp fa-regular fa-star"></i>
                            </p>
                            <h5 class="text-black text-wrap">"In publishing and graphic design, Lorem ipsum is a
                                placeholder text commonly used to demonstrate the visual form of a document or a typeface
                                without relying on meaningful content. Lorem ipsum may be used as a placeholder before the
                                final copy is available"</h5>
                            <h5 class="p-2">Rajesh Kumar</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="testimonial-box">
                            <i class="bi bi-quote text-success fs-2 "></i>
                        </div>
                        <div class=" p-5" style="width:800px;">
                            <p>
                                <i class="fa-sharp fa-regular fa-star"></i>
                                <i class="fa-sharp fa-regular fa-star"></i>
                                <i class="fa-sharp fa-regular fa-star"></i>
                                <i class="fa-sharp fa-regular fa-star"></i>
                            </p>
                            <h5 class="text-black text-wrap">"In publishing and graphic design, Lorem ipsum is a
                                placeholder text commonly used to demonstrate the visual form of a document or a typeface
                                without relying on meaningful content. Lorem ipsum may be used as a placeholder before the
                                final copy is available"</h5>
                            <h5 class="p-5">Rajesh Kumar</h5>
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
    {{-- Spice Blog --}}
    <div class="container px-4 mt-5">
        <div class="d-flex flex-row mb-5 align-items-center">
            <div class="col p-2">
                <h3 class="text-success fw-bold">Spices Blog</h3>
            </div>
            <div class="d-flex flex-row-reverse">
                <a href="#" class="btn btn-success cartButton">Read More <i class="bi bi-chevron-right"></i></a>
            </div>
        </div>

        <div class="m-5">
            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
        </div>

        <div class="row">
            <div class="col">
                <div class="card homecardBackgroud cartButton p-5">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card Subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
                <div class="p-3">
                    <h4>August 10, 2024</h4>
                    <h3>Lorem ipsum dolor sit amet consectetur</h3>
                    <a href="#" class="blogAnchor">Read More</a>
                </div>
            </div>

            <div class="col">
                <div class="card homecardBackgroud cartButton p-5">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card Subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
                <div class="p-3">
                    <h4>August 10, 2024</h4>
                    <h3>Lorem ipsum dolor sit amet consectetur</h3>
                    <a href="#" class="card-link">Read More</a>
                </div>
            </div>

            <div class="col">
                <div class="card homecardBackgroud cartButton p-5">
                    <div class="card-body">
                        <h5 class="card-title">Card Title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card Subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
                <div class="p-3">
                    <h4>August 10, 2024</h4>
                    <h3>Lorem ipsum dolor sit amet consectetur</h3>
                    <a href="#" class="card-link">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-4 mt-5 text-center">
        <hr>
    </div>
    {{-- Stay Spiced-up --}}
    <div class="container px-4 mb-3 text-center">
        <div class="row align-items-center">
            <div class="col-sm-4">
                <div class="card  h-100 border-0">
                    <div class="card-body">
                        <div class="d-flex align-content-center flex-wrap">
                            <h1 class="text-success ">Stay Spice-d up on Instagram</h1>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card  border-0">
                    <div class="card-body">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-sm">
                                <div class="card homecardBackgroud cartButton p-3 ">
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card Subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the bulk of the
                                            card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-sm">
                                <div class="card homecardBackgroud cartButton p-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card Subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the
                                            bulk of the
                                            card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-sm">
                                <div class="card homecardBackgroud cartButton p-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card Subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the
                                            bulk of the
                                            card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col-sm">
                                <div class="card homecardBackgroud cartButton p-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Card Title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card Subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the
                                            bulk of the
                                            card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
