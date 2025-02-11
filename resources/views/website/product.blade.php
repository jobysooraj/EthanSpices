@extends('website.layouts.app')
@section('content')
    <div class="container px-4 m-5">
        {{-- <div class="row">
            <!-- Product Images -->
            <div class="col-md-6 mb-4">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxoZWFkcGhvbmV8ZW58MHwwfHx8MTcyMTMwMzY5MHww&ixlib=rb-4.0.3&q=80&w=1080" alt="Product" class="img-fluid rounded mb-3 product-image" id="mainImage">
                <div class="d-flex justify-content-between">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxoZWFkcGhvbmV8ZW58MHwwfHx8MTcyMTMwMzY5MHww&ixlib=rb-4.0.3&q=80&w=1080" alt="Thumbnail 1" class="thumbnail rounded active" onclick="changeImage(event, this.src)">
                    <img src="https://images.unsplash.com/photo-1528148343865-51218c4a13e6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwzfHxoZWFkcGhvbmV8ZW58MHwwfHx8MTcyMTMwMzY5MHww&ixlib=rb-4.0.3&q=80&w=1080" alt="Thumbnail 2" class="thumbnail rounded" onclick="changeImage(event, this.src)">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxoZWFkcGhvbmV8ZW58MHwwfHx8MTcyMTMwMzY5MHww&ixlib=rb-4.0.3&q=80&w=1080" alt="Thumbnail 3" class="thumbnail rounded" onclick="changeImage(event, this.src)">
                    <img src="https://images.unsplash.com/photo-1528148343865-51218c4a13e6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwzfHxoZWFkcGhvbmV8ZW58MHwwfHx8MTcyMTMwMzY5MHww&ixlib=rb-4.0.3&q=80&w=1080" alt="Thumbnail 4" class="thumbnail rounded" onclick="changeImage(event, this.src)">
                </div>
            </div>
    
            <!-- Product Details -->
            <div class="col-md-6">
                <h2 class="mb-3">Premium Wireless Headphones</h2>
                <p class="text-muted mb-4">SKU: WH1000XM4</p>
                <div class="mb-3">
                    <span class="h4 me-2">$349.99</span>
                    <span class="text-muted"><s>$399.99</s></span>
                </div>
                <div class="mb-3">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-half text-warning"></i>
                    <span class="ms-2">4.5 (120 reviews)</span>
                </div>
                <p class="mb-4">Experience premium sound quality and industry-leading noise cancellation with these wireless
                    headphones. Perfect for music lovers and frequent travelers.</p>
                <div class="mb-4">
                    <h5>Color:</h5>
                    <div class="btn-group" role="group" aria-label="Color selection">
                        <input type="radio" class="btn-check" name="color" id="black" autocomplete="off" checked>
                        <label class="btn btn-outline-dark" for="black">Black</label>
                        <input type="radio" class="btn-check" name="color" id="silver" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="silver">Silver</label>
                        <input type="radio" class="btn-check" name="color" id="blue" autocomplete="off">
                        <label class="btn btn-outline-primary" for="blue">Blue</label>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" class="form-control" id="quantity" value="1" min="1" style="width: 80px;">
                </div>
                <button class="btn btn-primary btn-lg mb-3 me-2">
                        <i class="bi bi-cart-plus"></i> Add to Cart
                    </button>
                <button class="btn btn-outline-secondary btn-lg mb-3">
                        <i class="bi bi-heart"></i> Add to Wishlist
                    </button>
                <div class="mt-4">
                    <h5>Key Features:</h5>
                    <ul>
                        <li>Industry-leading noise cancellation</li>
                        <li>30-hour battery life</li>
                        <li>Touch sensor controls</li>
                        <li>Speak-to-chat technology</li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <div class="container my-5">
            <div class="row details-snippet1">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-2 mini-preview">
                            <!-- Thumbnails for images, using data-bs-toggle to switch main image -->
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#image1">
                                        <img class="img-fluid" src="{{ asset('banner/pepper.jfif') }}" alt="Preview">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image2">
                                        <img class="img-fluid" src="{{ asset('banner/cinnamon.jfif') }}" alt="Preview">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image3">
                                        <img class="img-fluid" src="{{ asset('banner/cofeepowder.jfif') }}" alt="Preview">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#image4">
                                        <img class="img-fluid" src="{{ asset('banner/starAnise.jpg') }}" alt="Preview">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-10">
                            <!-- Main image section -->
                            <div class="tab-content">
                                <div id="image1" class="tab-pane fade show active">
                                    <img class="img-fluid" src="{{ asset('banner/pepper.jfif') }}" alt="Main Image 1">
                                </div>
                                <div id="image2" class="tab-pane fade">
                                    <img class="img-fluid" src="{{ asset('banner/cinnamon.jfif') }}" alt="Main Image 2">
                                </div>
                                <div id="image3" class="tab-pane fade">
                                    <img class="img-fluid" src="{{ asset('banner/cofeepowder.jfif') }}" alt="Main Image 3">
                                </div>
                                <div id="image4" class="tab-pane fade">
                                    <img class="img-fluid" src="{{ asset('banner/starAnise.jpg') }}" alt="Main Image 4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product details as you had it before -->
                <div class="col-md-5">
                    <div class="m-5">
                        <h4 class="p-1">Spices</h4>
                        <h1 class="p-2">Pepper</h1>
                        <h4 class="p-2">RS.200.00</h4>
                        <h5 class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio
                            consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde
                            quae distinctio earum culpa omnis soluta voluptate tempora placeat</h5>
                    </div>
                    <div class="row m-5">
                        <button type="button" class="btn btn-success qntityBtn m-2">100 g</button>
                        <button type="button" class="btn btn-success qntityBtn m-2">250 g</button>
                        <button type="button" class="btn btn-success qntityBtn m-2">500 g</button>
                        <button type="button" class="btn btn-success qntityBtn m-2">750 g</button>
                        <button type="button" class="btn btn-success qntityBtn m-2">1 kg</button>

                    </div>

                    <div class="row p-2 ">
                        <div class="btn-group border rounded" role="group" aria-label="Basic mixed styles example">
                            <button class="btn border-0" type="button" id="decrementBtn">-</button>
                            <button class="btn text-center border-1 rounded bg-dark text-white" type="button"
                                id="quantityInput">1</button>
                            <button class="btn border-0" type="button" id="incrementBtn">+</button>
                        </div>
                        <div class="p-2">
                            <button class="btn border rounded text-success">Add To Cart</button>
                        </div>
                        <div class="p-2">
                            <button class="btn border rounded text-success"><i
                                    class="bi bi-heart-fill text-bg-success"></i></button>
                        </div>
                    </div>
                    <div  class="row p-2">
                        <div class="col-12">
                            <button class="btn btn-success border rounded text-white" style="width: 700px;">Buy It Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class=" px-4 text-center bg-warning mt-5">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 d-flex align-items-center  ">
                    <div class="cartButton">
                        <img class="rounded-3 m-2" width="80" height="80" src="" alt=""
                            srcset="">
                    </div>
                    <h3 class="fw-bold spacing p-3">100% Easy Returns</h3>
                </div>
            </div>
            <div class="col">
                <div class="p-3 d-flex align-items-center ">
                    <div class="cartButton">
                        <img class="rounded-3 m-2" width="80" height="80" src="" alt=""
                            srcset="">
                    </div>
                    <h3 class="fw-bold spacing p-3">100% Certified Organic</h3>
                </div>
            </div>
            <div class="col">
                <div class="p-3 d-flex align-items-center">
                    <div class="cartButton">
                        <img class="rounded-3 m-2" width="80" height="80" src="" alt=""
                            srcset="">
                    </div>
                    <h3 class="fw-bold spacing p-3">No Artificial Colors</h3>
                </div>
            </div>

        </div>
    </div>
    <div class="container px-4 text-center">
        <div class="row justify-content-center">
            <h1 class="text-success">Other Products</h1>
        </div>
    </div>
    <div class="container px-4 text-center">
        <hr>
    </div>
    @include('website.handpicked')
@endsection
@section('script')
    <script>
        document.getElementById('incrementBtn').addEventListener('click', function() {
            var button = document.getElementById('quantityInput');
            button.innerText = parseInt(button.innerText) + 1; // Update innerText instead of value
        });

        document.getElementById('decrementBtn').addEventListener('click', function() {
            var button = document.getElementById('quantityInput');
            if (parseInt(button.innerText) > 1) {
                button.innerText = parseInt(button.innerText) - 1; // Update innerText instead of value
            }
        });
    </script>
@endsection
