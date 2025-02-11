@extends('website.layouts.app')
@section('content')
    <section class="hero-section" id="section_1">
        <div class="container-fluid ">
            <div class="row d-flex justify-content-start align-items-center">
                <div class="col-12 col-lg-6  text-start mb-md-5 mb-0 banner_img_col  ">
                    <h5 class="text-white">About Us</h5>
                    <h2 class="text-white">Stright From Idukki</h2>
                    <p class="text-white"> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used
                        to demonstrate the
                        visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be
                        used as a placeholder before the final copy is available. In publishing and graphic design, Lorem
                        ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface
                        without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final
                        copy is available.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container px-4 m-5 p-5">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <h1 class="text-success text-center">Why Ethan Spices</h1>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <p class="text-break">
                    In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the
                    visual
                    form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a
                    placeholder before the final copy is available.
                    In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the
                    visual
                    form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a
                    placeholder before the final copy is available.
                </p>
            </div>

        </div>
    </div>
    <div class="container px-4 text-center">
        <hr>
    </div>
    <div class="container px-4 text-center">
        <div class="row row-cols-1 row-cols-md-2 g-4"> <!-- First container -->
            <div class="col">
                <div class="card cartButton homecardBackgroud cartBorder">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cartButton homecardBackgroud cartBorder">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cartButton homecardBackgroud cartBorder">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card cartButton homecardBackgroud cartBorder">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-4 mt-3 "> <!-- Second container -->
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card border-0 ">
                    <div class="card-body">
                        <h5 class="card-title text-success">Farm Fresh</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 ">
                    <div class="card-body">
                        <h5 class="card-title text-success">Hand Picked</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 ">
                    <div class="card-body">
                        <h5 class="card-title text-success">Freshly Processed</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 "> <!-- Applied same classes for alignment -->
                    <div class="card-body">
                        <h5 class="card-title text-success">Delivery At DoorStep</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-4 m-5 p-5">
        <div class="row align-items-stretch"> <!-- Ensure columns have equal height -->
            <div class="col-6">
                <div class="card bg-success h-100"> <!-- Set card height to 100% -->
                    <div class="card-body p-4"> <!-- Reduced padding -->
                        <h1 class="card-title text-white">What We Cultivate on our fields</h1>
                        <p class="card-text text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In ullam
                            ipsa facilis repudiandae nihil placeat incidunt accusantium rerum error? Tempore corporis
                            voluptatum nesciunt repellendus neque quas asperiores autem similique tenetur..</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div id="carouselExampleCaptions" class="carousel slide h-100"> <!-- Set carousel height to 100% -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner h-100"> <!-- Ensure the carousel items take full height -->
                        <div class="carousel-item active h-100"> <!-- Set individual carousel items to full height -->
                            <img src="{{ asset('banner/pepper.jfif') }}" class="d-block w-100 h-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img src="{{ asset('banner/cardamom.jfif') }}" class="d-block w-100 h-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item h-100">
                            <img src="{{ asset('banner/cinnamon.jfif') }}" class="d-block w-100 h-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container px-4 text-center m-5 p-5"> <!-- Adjusted the top margin to a smaller value -->
        <div class="row">
            <div class="col">
                <h2 class="mb-3">Continue Shopping ?</h2> <!-- Added bottom margin to keep spacing below -->
            </div>
        </div>
    </div>
    
    
@endsection
