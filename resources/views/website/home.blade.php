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
            <div class="card h-100 cartButton ">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton">
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
            <div class="card h-100 cartButton">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>
                    <button type="button" class="btn-lg cartButton">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton">
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
                    <a href="#" class="btn btn-success cartButton ">Connect</a>
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
            <div class="card h-100 cartButton ">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body mt-5">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
         <div class="col">
            <div class="card h-100 cartButton">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton">
                        <i class="fa-regular fa-heart icon-1"></i>
                        <i class="fa fa-solid fa-heart icon-2"></i>

                    </button>
                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>Add to
                        Cart</a>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 cartButton">
                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top  p-2" alt="...">
                <div class="overlay">
                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top  p-2" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Star Anise</h5>
                    <p class="card-text">Star Anise</p>
                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                    <button type="button" class="btn-lg cartButton">
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
@endsection
