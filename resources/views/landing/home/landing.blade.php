@extends('layout.landing')

@section('landing')



<!-- start page title -->
<section
    class="page-title-button-style cover-background position-relative ipad-top-space-margin top-space-padding md-pt-20px"
    style="background-image: url('/landing/images/pink-beach.jpg')">
    <div class="opacity-light bg-bay-of-many-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-large"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="text-uppercase mb-10px alt-font text-white fw-500 bg-dark-gray border-radius-4px">The
                    perfect trip</h2>
                <h1 class="mb-0 text-white alt-font ls-minus-2px text-uppercase fw-600 text-shadow-double-large">
                    Special tours</h1>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="position-relative pb-0 xs-pt-30px">
    <div class="w-100 h-70px position-absolute top-minus-70px md-top-minus-50px left-0px"
        style="background-image:url('/landing/images/demo-travel-agency-slider-07.png');"></div>
</section>
<!-- end section -->
<!-- start section -->
<section
    class="extra-big-section background-position-center-bottom background-size-contain background-no-repeat position-relative pt-0"
    style="background-image:url('/landing/images/demo-travel-agency-home-bg-07.png');">
    <div class="position-absolute left-0px bottom-minus-50px d-none d-lg-inline-block"
        data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
        <img src="/landing/images/landing/camar.png" alt="" width="300px" />
    </div>
    <div class="container background-position-right background-no-repeat sm-mb-10 xs-mb-15">
        <div class="row align-items-center position-relative mb-7">
            <div class="position-absolute left-0px top-0px h-100 w-130px border-end border-color-extra-medium-gray d-none d-md-inline-block"
                data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="vertical-title-center align-items-center justify-content-center">
                    <div class="title fs-24 alt-font text-base-color fw-600 text-uppercase">Explore the world for
                        yourself</div>
                </div>
            </div>
            <div class="col-lg-1 col-md-2 d-none d-md-inline-block">
                <div class="divider-dot d-flex align-items-center w-100 h-200px"></div>
            </div>
            <div class="col-lg-5 col-md-9 offset-md-1"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="alt-font fw-600 text-dark-gray ls-minus-3px w-90 xl-w-100 mb-30px">Discover the aesthetic
                    destination.</h1>
                <p class="w-75 lg-w-100">Happiness is not something ready made. It comes from your own actions.</p>
                <div class="d-inline-block mt-5px">
                    <a href="demo-travel-agency-about.html"
                        class="btn btn-large btn-round-edge btn-dark-gray btn-hover-animation btn-box-shadow me-25px">
                        <span>
                            <span class="btn-text">About company</span><span class="btn-icon"><i
                                    class="feather icon-feather-feather"></i></span>
                        </span>
                    </a>
                    <a href="demo-travel-agency-tours.html"
                        class="btn btn-link-gradient expand btn-extra-large text-dark-gray text-dark-gray-hover ls-0px">Discover
                        destination<span class="bg-dark-gray"></span></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 position-relative offset-lg-1 offset-md-4 ps-0 sm-ps-15px md-mt-50px"
                data-anime='{ "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <img src="/landing/images/landing/girl-sunset.png" class="border-radius-6px md-w-100"
                    alt="">
                <img class="position-absolute left-minus-120px top-80px sm-top-0px sm-w-160px sm-left-0px"
                    src="/landing/images/landing/eagle.png" alt="" width="200px"
                    data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="pt-0">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-6 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fw-500 text-base-color text-uppercase d-inline-block">Authentic experiences</span>
                <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px">Gallery destination</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 justify-content-center mb-5 md-mb-3 xs-mb-40px"
            data-anime='{ "el": "childs", "scale":[0.9,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>

            <!-- start interactive banners item -->
            <div class="col mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="path_to_image.jpg" class="card-img-top" alt="Destination Image" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Best picture</h5>
                    </div>
                </div>
            </div>
            <!-- repeat the card as needed for other destinations -->

            <!-- end interactive banners item -->
        </div>
        <div class="row text-center"
            data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-12">
                <h4 class="alt-font text-dark-gray mb-0 ls-minus-1px fancy-text-style-4">World's hottest destinations for
                    <span class="fw-600" data-fancy-text='{ "effect": "wave", "direction": "up", "speed": 10, "string": ["mountain lovers.", "nature lovers.", "independent tours."], "duration": 2500 }'></span>
                </h4>
            </div>
        </div>
    </div>
</section>

<!-- end section -->
<!-- start parallax style-1 -->
<section class="position-relative overlap-height" data-parallax-background-ratio="0.5"
    style="background-image: url('/landing/images/landing/bird-sunset.png');">
    <div class="opacity-extra-medium bg-gradient-gulf-blue-sepia-brown"></div>
    <div class="container overlap-gap-section">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-8 col-lg-10 position-relative text-center parallax-scrolling-style-1"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fw-500 text-white text-uppercase mb-5px d-inline-block ls-1px">Finding the perfect
                    trips</span>
                <h1 class="text-white mx-auto alt-font fw-500 mb-40px ls-minus-2px">Get ready to explore and
                    discover your world.</h1>
                <a href="#explore"
                    class="section-link d-flex justify-content-center align-items-center mx-auto icon-box w-70px h-70px rounded-circle bg-base-color"><i
                        class="bi bi-arrow-down-short text-white icon-medium d-flex"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- end parallax style-1 -->
<!-- start section -->
@livewire('landingpage')
<!-- end section -->

<section id="explore"
    class="bg-very-light-gray background-position-center-bottom background-size-contain background-no-repeat pt-2 pb-6">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-6 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fw-500 text-base-color text-uppercase d-inline-block">Check your name</span>
                <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px">Blacklist climbers list</h2>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <input type="text" id="searchInput" class="form-control" placeholder="Search...">
            </div>
        </div>

        <!-- Table Section -->
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="table-grey">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Ktp</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendakiblacklist as $index => $pendaki)
                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $pendaki -> name}}</td>
                                <td>{{ $pendaki -> address}}</td>
                                <td>{{ $pendaki -> telp}}</td>
                                <td>{{ $pendaki -> ktp}}</td>
                                <td>{{ $pendaki -> status}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection