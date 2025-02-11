@extends('website.layouts.app')
@section('content')
    <div class="card bg-dark ">
        <img src="{{ asset('banner/idukki.jpeg') }}" class="card-img img-cover" alt="spices-online" height="325">
        <div class="card-img-overlay d-flex flex-column justify-content-end">
            <h1 class="card-title text-white">All Spices</h1>

        </div>
    </div>
    <div class="container px-4 m-5">
        <div class="row d-flex justify-content-between">
            <div class="col-auto">
                <h3>Filter By</h3>
            </div>
            <div class="col-auto">
                <h3>Sort By</h3>

            </div>
        </div>
    </div>
    <div class="container px-4 text-center">
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Category <span class="ms-auto toggle-icon">+</span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="form-check ">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Spices
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckTea"
                                        checked>
                                    <label class="form-check-label" for="flexCheckTea">
                                        Tea Powder
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCoffee"
                                        checked>
                                    <label class="form-check-label" for="flexCheckCoffee">
                                        Coffee Powder
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Price <span class="ms-auto toggle-icon">+</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Spices
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckTea"
                                        checked>
                                    <label class="form-check-label" for="flexCheckTea">
                                        Tea Powder
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCoffee"
                                        checked>
                                    <label class="form-check-label" for="flexCheckCoffee">
                                        Coffee Powder
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Size <span class="ms-auto toggle-icon">+</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Spices
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckTea"
                                        checked>
                                    <label class="form-check-label" for="flexCheckTea">
                                        Tea Powder
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCoffee"
                                        checked>
                                    <label class="form-check-label" for="flexCheckCoffee">
                                        Coffee Powder
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card cartButton homecardBackgroud h-25" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>



            </div>
            <div class="col-md-9">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <a href="{{ route('websiteproduct') }}">
                            <div class="card h-100 cartButton cartBorder">
                                <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top p-2" alt="...">
                                <div class="overlay">
                                    <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top p-2"
                                        alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Star Anise</h5>
                                    <p class="card-text">Star Anise</p>
                                    <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                                    <button type="button" class="btn-lg cartButton buttonIcon">
                                        <i class="fa-regular fa-heart icon-1"></i>
                                        <i class="fa fa-solid fa-heart icon-2"></i>
                                    </button>
                                    <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i>
                                        Add to Cart</a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <a href="{{ route('websiteproduct') }}">
                        <div class="card h-100 cartButton cartBorder">
                            <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top p-2" alt="...">
                            <div class="overlay">
                                <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top p-2"
                                    alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Star Anise</h5>
                                <p class="card-text">Star Anise</p>
                                <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                                <button type="button" class="btn-lg cartButton buttonIcon">
                                    <i class="fa-regular fa-heart icon-1"></i>
                                    <i class="fa fa-solid fa-heart icon-2"></i>
                                </button>
                                <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i> Add
                                    to Cart</a>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <a href="{{ route('websiteproduct') }}">
                        <div class="card h-100 cartButton cartBorder">
                            <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top p-2" alt="...">
                            <div class="overlay">
                                <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top p-2"
                                    alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Star Anise</h5>
                                <p class="card-text">Star Anise</p>
                                <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                                <button type="button" class="btn-lg cartButton buttonIcon">
                                    <i class="fa-regular fa-heart icon-1"></i>
                                    <i class="fa fa-solid fa-heart icon-2"></i>
                                </button>
                                <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i> Add
                                    to Cart</a>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 cartButton cartBorder">
                            <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top p-2" alt="...">
                            <div class="overlay">
                                <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top p-2"
                                    alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Star Anise</h5>
                                <p class="card-text">Star Anise</p>
                                <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                                <button type="button" class="btn-lg cartButton buttonIcon">
                                    <i class="fa-regular fa-heart icon-1"></i>
                                    <i class="fa fa-solid fa-heart icon-2"></i>
                                </button>
                                <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i> Add
                                    to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 cartButton cartBorder">
                            <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top p-2" alt="...">
                            <div class="overlay">
                                <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top p-2"
                                    alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Star Anise</h5>
                                <p class="card-text">Star Anise</p>
                                <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                                <button type="button" class="btn-lg cartButton buttonIcon">
                                    <i class="fa-regular fa-heart icon-1"></i>
                                    <i class="fa fa-solid fa-heart icon-2"></i>
                                </button>
                                <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i> Add
                                    to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 cartButton cartBorder">
                            <img src="{{ asset('banner/pepper.jfif') }}" class="card-img-top p-2" alt="...">
                            <div class="overlay">
                                <img src="{{ asset('banner/pepper_hover.jpg') }}" class="card-img-top p-2"
                                    alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Star Anise</h5>
                                <p class="card-text">Star Anise</p>
                                <p class="card-text">RS.250 &nbsp; <del>RS.500</del></p>
                                <button type="button" class="btn-lg cartButton buttonIcon">
                                    <i class="fa-regular fa-heart icon-1"></i>
                                    <i class="fa fa-solid fa-heart icon-2"></i>
                                </button>
                                <a href="#" class="btn btn-success cartButton"><i class="bi bi-cart fs-1"></i> Add
                                    to Cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Add more cards similarly -->
                </div>
            </div>

        </div>
    </div>
    <div class="container px-4 m-5 text-center">
        <nav aria-label="...">
            <ul class="pagination pagination-lg justify-content-center border-0">
                <li class="page-item active" aria-current="page">
                    <span class="page-link">1</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </div>
    <div class="container px-4 text-center">
        <hr>
    </div>
    @include('website.handpicked')
@endsection
