<!-- Just an image -->
<nav class="navbar navbar-light bg-light p-1 ">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('logo/logo.jpg') }}" width="150" height="100" alt="">
    </a>
    <div class="m-4">
        <a href="" class="m-4 fs-2 fw-bold">Home</a>
        <a href="" class="m-4 fs-2 fw-bold">Shop By</a>
        <a href="" class="m-4 fs-2 fw-bold">Combo & Gifts</a>
        <a href="" class="m-4 fs-2 fw-bold">Bulk Orders</a>
        <a href="" class="m-4 fs-2 fw-bold">Our Story</a>
        <a href="" class="m-4 fs-2 fw-bold">Blog</a>
        <a href="" class="m-4 fs-2 fw-bold">Contact</a>
    </div>
    <div class="mr-5">
        <button type="button" class="btn buttonHeadIcon"> <i class="bi bi-cart"></i> </button>
        <button type="button" class="btn buttonHeadIcon "> <i class="bi bi-search"></i></button>
        <button type="button" class="btn buttonHeadIcon"> <i class="bi bi-heart heart-icon"></i></button>
        {{-- <button type="button" class="btn buttonHeadIcon"> <i class="bi bi-person profile-icon"></i></button> --}}
   @guest
        @if (Route::has('login'))
        <a href="{{ route('login') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Login">
            <button type="button" class="btn buttonHeadIcon">
                <i class="bi bi-people profile-icon"></i>
            </button>
        </a>
        @endif

        @if (Route::has('register'))
        <a href="{{ route('register') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Register">
            <button type="button" class="btn buttonHeadIcon">
                <i class="bi bi-person profile-icon"></i>
            </button>
        </a>
        @endif

        @else
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="btn buttonHeadIcon" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i>Sign out</a>
        @endguest
    </div>

</nav>
