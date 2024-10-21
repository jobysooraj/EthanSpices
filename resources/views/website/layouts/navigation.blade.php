<!-- Just an image -->
<nav class="navbar navbar-light bg-light p-1 ">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('logo/logo.jpg') }}" width="150" height="100" alt="ethan-spices-logo">
    </a>
    <div class="m-4">
        <a href="{{ route('websitelogin') }}" class="m-4 fs-2 fw-bold">Home</a>
        <div class="dropdown d-inline">
            <a class=" dropdown-toggle m-4 fs-2 fw-bold" id="shopByDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                Shop By
            </a>
            <ul class="dropdown-menu" aria-labelledby="shopByDropdown">
                <li><a class="dropdown-item" href="{{ route('websiteshopBy') }}">All Products</a></li>
                <li><a class="dropdown-item" href="{{ route('websiteshopBySpices') }}">Spices</a></li>
                <li><a class="dropdown-item" href="{{ route('websiteshopByTea') }}">Tea</a></li>
                <li><a class="dropdown-item" href="{{ route('websiteshopByCoffee') }}">Coffee</a></li>
            </ul>
        </div>
        <div class="dropdown d-inline">
            <a class=" dropdown-toggle m-4 fs-2 fw-bold" id="shopByDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                Combo & Gifts
            </a>
            <ul class="dropdown-menu" aria-labelledby="shopByDropdown">
                <li><a class="dropdown-item" href="{{ route('websiteshopBy') }}">All Products</a></li>
                <li><a class="dropdown-item" href="{{ route('websiteshopBySpices') }}">Combo</a></li>
                <li><a class="dropdown-item" href="{{ route('websiteshopByTea') }}">Customized Combos</a></li>
                <li><a class="dropdown-item" href="{{ route('websiteshopByCoffee') }}">Gifts</a></li>
            </ul>
        </div>
        {{-- <a href="" class="m-4 fs-2 fw-bold">Combo & Gifts</a> --}}
        <a href="{{ route('websitebulkOrder') }}" class="m-4 fs-2 fw-bold">Bulk Orders</a>
        <a href="{{ route('websiteaboutUs') }}" class="m-4 fs-2 fw-bold">Our Story</a>
        <a href="" class="m-4 fs-2 fw-bold">Blog</a>
        <a href="{{route('websitecontactUs')}}" class="m-4 fs-2 fw-bold">Contact</a>
    </div>
    <div class="mr-5">
        <button type="button" class="btn buttonHeadIcon"> <i class="bi bi-cart"></i> </button>
        <button type="button" class="btn buttonHeadIcon "> <i class="bi bi-search"></i></button>
        <button type="button" class="btn buttonHeadIcon"> <i class="bi bi-heart heart-icon"></i></button>
        <button type="button" class="btn buttonHeadIcon"> <i class="bi bi-person profile-icon"></i></button>
    </div>

</nav>
