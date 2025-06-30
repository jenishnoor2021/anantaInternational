@extends('layouts.front')

@section('content')

<!-- BANNER
        ================================================== -->
<section class="p-0 bg-img cover-background full-screen banner-style01 top-position1 left-overlay-secondary" data-overlay-dark="95" data-background="{{ asset('front_assets/img/banner/slide-04.jpg') }}">
    <div class="container d-flex flex-column position-relative z-index-9">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-10 col-xl-8 col-xxl-7 mt-5 mt-sm-0">
                <div class="section-title01">
                    <h1 class="display-1 font-weight-800 text-shadow text-white ls-minus-2px lh-1 wow fadeInUp" data-wow-delay="200ms">
                        <span>Fast and Safe </span>
                        <span class="text-primary">Transportation.</span>
                    </h1>
                    <p class="w-80 w-lg-70 font-weight-500 display-27 mb-4 text-white opacity5 d-none d-sm-block wow fadeInUp" data-wow-delay="350ms">We pride ourselves on providing best product quality and export services allover the globe.</p>
                </div>
                <div class="banner-button wow fadeInUp" data-wow-delay="500ms">
                    <a href="{{URL::to('/services')}}" class="button-arrow"><i class="ti-arrow-right"></i></a>
                    <div class="button-text">
                        <a href="{{URL::to('/services')}}" class="text-white text-primary-hover">Explore services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT US 
        ================================================== -->
<section class="about-style02">
    <div class="container">
        <div class="row align-items-center mt-n1-9">
            <div class="col-xl-5 mt-1-9">
                <div class="section-title02 mb-1-9 wow fadeInUp" data-wow-delay="200ms">
                    <span>About Us</span>
                    <h2 class="ls-minus-2px display-5 font-weight-800 lh-1 mb-1-9">We provide full range of transport</h2>
                </div>
                <p class="mb-4 wow fadeInUp" data-wow-delay="350ms">The efficiency and reliability of transport systems play a crucial role in connecting communities.</p>
                <div class="d-flex mb-1-9 wow fadeInUp" data-wow-delay="200ms">
                    <div class="flex-shrink-0 me-4">
                        <img src="{{ asset('front_assets/img/icons/icon-4.png') }}" alt="..." class="w-65px">
                    </div>
                    <div class="flex-grow-1">
                        <h3 class="mb-2 h5">Worldwide Service</h3>
                        <p class="mb-0">We’re always provide people a complete solution focused of any business.</p>
                    </div>
                </div>
                <div class="d-flex mb-2-5 wow fadeInUp" data-wow-delay="400ms">
                    <div class="flex-shrink-0 me-4">
                        <img src="{{ asset('front_assets/img/icons/icon-5.png') }}" alt="..." class="w-65px">
                    </div>
                    <div class="flex-grow-1">
                        <h3 class="mb-2 h5">Local Service</h3>
                        <p class="mb-0">We’re always provide people a complete solution focused of any business.</p>
                    </div>
                </div>
                <a href="{{URL::to('/about')}}" class="butn-style1 wow fadeInUp" data-wow-delay="200ms">Learn More</a>
            </div>
            <div class="col-xl-7 mt-1-9">
                <div class="ps-xl-4">
                    <div class="row">
                        <div class="col-md-6 col-lg-7 text-center text-md-start wow fadeInUp" data-wow-delay="200ms">
                            <div class="about-circle">
                                <img src="{{ asset('front_assets/img/content/about-03.jpg') }}" alt="...">
                                <div class="about-text rotating d-none d-md-block">
                                    <svg viewbox="0 0 200 200">
                                        <path id="textPath" d="M 85,0 A 85,85 0 0 1 -85,0 A 85,85 0 0 1 85,0" transform="translate(100,100)" fill="none" stroke-width="0"></path>
                                        <g font-size="20.8px">
                                            <text text-anchor="start">
                                                <textpath class="coloring" xlink:href="#textPath" startoffset="0%">ANANTA INTERNATIONAL - IMPORT & EXPORT</textpath>
                                            </text>
                                        </g>
                                    </svg>
                                    <div class="about-icon"><img src="{{ asset('front_assets/img/content/animated-logo.png') }}" alt="..." class="w-60px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 wow fadeInUp" data-wow-delay="350ms">
                            <div class="about-author">
                                <div class="author-img"><img src="{{ asset('front_assets/img/logos/logo.png') }}" alt="..."></div>
                                <!--<h5 class="text-white mb-0 font-weight-700">John R. Holland</h5>-->
                                <!--<span class="text-white d-block mb-3">CEO &amp; Founder</span>-->
                                <p class="text-white display-28">We pride ourselves on providing best product quality and export services allover the globe.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES
        ================================================== -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title01 mb-1-9 mb-md-5">
                    <h2 class="display-5 font-weight-800 mb-0">
                        <span>Logistics</span>
                        <span class="text-primary">Services</span>
                    </h2>
                </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
        <div class="vw-90 position-relative">
            <div class="service-carousel-two owl-carousel owl-theme">
                <div class="card-style04 border-radius-5">
                    <img src="{{ asset('front_assets/img/services/service-11.jpg') }}" alt="..." class="border-radius-5">
                    <div class="opacity-light bg-extra-dark-gray border-radius-5"></div>
                    <div class="card-overlay border-radius-5"></div>
                    <div class="card-content">
                        <div class="card-custom-1">
                            <span class="text-white opacity6 d-block mb-2 position-relative z-index-1">01</span>
                            <h5 class="font-weight-800 display-19 position-relative z-index-1 mb-0"><a href="{{URL::to('/services')}}" class="text-white text-primary-hover">Rail Freight</a></h5>
                            <span class="card-hover-icon">
                                <img src="{{ asset('front_assets/img/icons/icon-10.png') }}" alt="..." class="w-65px">
                            </span>
                        </div>
                        <div class="card-data align-items-end d-flex">
                            <div class="card-custom-2">
                                <p class="card-text">It must be aligned within a firm to have the most efficient effect.</p>
                                <a href="{{URL::to('/services')}}" class="btn btn-link-1 px-0">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-style04 border-radius-5">
                    <img src="{{ asset('front_assets/img/services/service-12.jpg') }}" alt="..." class="border-radius-5">
                    <div class="opacity-light bg-extra-dark-gray border-radius-5"></div>
                    <div class="card-overlay border-radius-5"></div>
                    <div class="card-content">
                        <div class="card-custom-1">
                            <span class="text-white opacity6 d-block mb-2 position-relative z-index-1">02</span>
                            <h5 class="font-weight-800 display-19 text-white position-relative z-index-1 mb-0"><a href="{{URL::to('/services')}}" class="text-white text-primary-hover">Air Freight</a></h5>
                            <span class="card-hover-icon">
                                <img src="{{ asset('front_assets/img/icons/icon-11.png') }}" alt="..." class="w-65px">
                            </span>
                        </div>
                        <div class="card-data align-items-end d-flex">
                            <div class="card-custom-2">
                                <p class="card-text">It must be aligned within a firm to have the most efficient effect.</p>
                                <a href="{{URL::to('/services')}}" class="btn btn-link-1 px-0">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-style04 border-radius-5">
                    <img src="{{ asset('front_assets/img/services/service-13.jpg') }}" alt="..." class="border-radius-5">
                    <div class="opacity-light bg-extra-dark-gray border-radius-5"></div>
                    <div class="card-overlay border-radius-5"></div>
                    <div class="card-content">
                        <div class="card-custom-1">
                            <span class="text-white opacity6 d-block mb-2 position-relative z-index-1">03</span>
                            <h5 class="font-weight-800 display-19 text-white position-relative z-index-1 mb-0"><a href="{{URL::to('/services')}}" class="text-white text-primary-hover">Ocean Freight</a></h5>
                            <span class="card-hover-icon">
                                <img src="{{ asset('front_assets/img/icons/icon-12.png') }}" alt="..." class="w-65px">
                            </span>
                        </div>
                        <div class="card-data align-items-end d-flex">
                            <div class="card-custom-2">
                                <p class="card-text">It must be aligned within a firm to have the most efficient effect.</p>
                                <a href="{{URL::to('/services')}}" class="btn btn-link-1 px-0">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-style04 border-radius-5">
                    <img src="{{ asset('front_assets/img/services/service-14.jpg') }}" alt="..." class="border-radius-5">
                    <div class="opacity-light bg-extra-dark-gray border-radius-5"></div>
                    <div class="card-overlay border-radius-5"></div>
                    <div class="card-content">
                        <div class="card-custom-1">
                            <span class="text-white opacity6 d-block mb-2 position-relative z-index-1">04</span>
                            <h5 class="font-weight-800 display-19 text-white position-relative z-index-1 mb-0"><a href="{{URL::to('/services')}}" class="text-white text-primary-hover">Road Freight</a></h5>
                            <span class="card-hover-icon">
                                <img src="{{ asset('front_assets/img/icons/icon-13.png') }}" alt="..." class="w-65px">
                            </span>
                        </div>
                        <div class="card-data align-items-end d-flex">
                            <div class="card-custom-2">
                                <p class="card-text">It must be aligned within a firm to have the most efficient effect.</p>
                                <a href="{{URL::to('/services')}}" class="btn btn-link-1 px-0">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-style04 border-radius-5">
                    <img src="{{ asset('front_assets/img/services/custom-packaging.jpg') }}" alt="..." class="border-radius-5">
                    <div class="opacity-light bg-extra-dark-gray border-radius-5"></div>
                    <div class="card-overlay border-radius-5"></div>
                    <div class="card-content">
                        <div class="card-custom-1">
                            <span class="text-white opacity6 d-block mb-2 position-relative z-index-1">05</span>
                            <h5 class="font-weight-800 display-19 text-white position-relative z-index-1 mb-0"><a href="{{URL::to('/services')}}" class="text-white text-primary-hover">Custom Packaging</a></h5>
                            <span class="card-hover-icon">
                                <img src="{{ asset('front_assets/img/icons/packaging.png') }}" alt="..." class="w-65px">
                            </span>
                        </div>
                        <div class="card-data align-items-end d-flex">
                            <div class="card-custom-2">
                                <p class="card-text">It must be aligned within a firm to have the most efficient effect.</p>
                                <a href="{{URL::to('/services')}}" class="btn btn-link-1 px-0">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COUNTER
        ================================================== -->
<section class="bg-img cover-background secondary-overlay" data-overlay-dark="8" data-background="{{ asset('front_assets/img/bg/bg-06.jpg') }}">
    <div class="container">
        <div class="row mt-n1-9">
            <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                <div class="counter-style01">
                    <div class="counter-icon"><img src="{{ asset('front_assets/img/icons/icon-14.png') }}" alt="..." class="w-55px"></div>
                    <div class="display-15 display-sm-10 lh-1 text-white font-weight-700">
                        <div class="odometer odometer-auto-theme" data-count="35">0</div>
                    </div>
                    <h5 class="mb-0 text-white">+ Years of Experience</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="350ms">
                <div class="counter-style01">
                    <div class="counter-icon"><img src="{{ asset('front_assets/img/icons/icon-15.png') }}" alt="..." class="w-55px"></div>
                    <div class="display-15 display-sm-10 lh-1 text-white font-weight-700">
                        <div class="odometer odometer-auto-theme" data-count="528">0</div>
                    </div>
                    <h5 class="mb-0 text-white">+ Cities Served Worldwide</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="500ms">
                <div class="counter-style01">
                    <div class="counter-icon"><img src="{{ asset('front_assets/img/icons/icon-16.png') }}" alt="..." class="w-55px"></div>
                    <div class="display-15 display-sm-10 lh-1 text-white font-weight-700">
                        <div class="odometer odometer-auto-theme" data-count="475">0</div>
                    </div>
                    <h5 class="mb-0 text-white">+ Satisfied Clients</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mt-1-9 wow fadeInUp" data-wow-delay="650ms">
                <div class="counter-style01">
                    <div class="counter-icon"><img src="{{ asset('front_assets/img/icons/icon-17.png') }}" alt="..." class="w-55px"></div>
                    <div class="display-15 display-sm-10 lh-1 text-white font-weight-700">
                        <div class="odometer odometer-auto-theme" data-count="45">0</div>
                    </div>
                    <h5 class="mb-0 text-white">+ Company We Help</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS
        ================================================== -->
<section class="testimonials-style01">
    <div class="container">
        <div class="row align-items-xxl-center position-relative z-index-9 mt-n1-9">
            <div class="col-lg-6 mt-1-9">
                <div class="ps-xl-14 position-relative">
                    <img src="{{ asset('front_assets/img/content/testimonial-01.jpg') }}" alt="...">
                    <div class="left-box d-none d-sm-block">
                        <div class="inner-box">
                            <h1>4.28</h1>
                            <div>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <span class="text-dark font-weight-700">2467 Reviews</span>
                            <div class="box-tag">Genuine Company</div>
                        </div>
                        <img src="{{ asset('front_assets/img/logos/logo.png') }}" alt="..." class="mb-4" style="width: 75%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 mt-1-9">
                <div class="section-title01 mb-1-6 mb-md-2-6">
                    <h2 class="display-5 font-weight-800 mb-md-0">
                        <span>Customers</span>
                        <span class="text-primary">Feedback</span>
                    </h2>
                </div>
                <div class="testimonial-carousel-two owl-theme owl-carousel">
                    @foreach($testomonial as $test)
                    <div class="mb-lg-2-5">
                        <p class="w-lg-85 mb-1-6">{{ $test->message }}</p>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <img src="{{ $test->file }}" alt="..." class="rounded-circle w-90px">
                            </div>
                            <div class="flex-grow-1">
                                <div class="display-27"><span class="font-weight-800">{{ $test->name }}</div>
                                <div>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US
        ================================================== -->
<section class="py-0 why-choose-style2">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-6 col-xl-6 d-none d-lg-block">
                <div class="bg-img cover-background h-100 overflow-visible">
                    <img src="{{ asset('front_assets/img/content/video-bg-img.jpg') }}" alt="..." class="mb-4" style="width: 100%;height: 100%;">
                </div>
            </div>
            <div class="col-lg-6 col-xl-6" style="background: #f5f5f5;">
                <div class="right-content">
                    <div class="section-title01 mb-1-6 mb-md-2-6 wow fadeInUp" data-wow-delay="200ms">
                        <h2 class="display-5 font-weight-800 mb-md-0">
                            <span>Why You</span>
                            <span class="text-primary">Choose Us</span>
                        </h2>
                    </div>
                    <p class="w-lg-95 mb-1-9 mb-md-2-2 wow fadeInUp" data-wow-delay="350ms">You can know the price for your transportation in advance. We offers intellgent concepts for road and tail and well as complex special transport services.We provide excellent service across the country.</p>
                    <ul class="list-unstyled list-style9 mb-2-1 mb-md-2-8 wow fadeInUp" data-wow-delay="500ms">
                        <li>Supply Chain Solutions.</li>
                        <li> End-to-End Transportation.</li>
                        <li>Warehousing & Distribution.</li>
                    </ul>
                    <div class="wow fadeInUp" data-wow-delay="650ms">
                        <a href="{{URL::to('/services')}}" class="butn-style1">View All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products
        ================================================== -->
<section class="bg-light our--products">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title01 mb-1-9 mb-md-5">
                    <h2 class="display-5 font-weight-800 mb-0">
                        <span class="text-primary">Our Products</span>
                    </h2>
                </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
    <div class="position-relative">
        <div class="service-carousel-two owl-carousel owl-theme">
            @foreach($products as $key=>$product)
            <div class="card-style04 border-radius-5">
                <img src="{{ $product->file }}" alt="..." class="border-radius-5">
                <div class="card-content">
                    <div class="card-custom-1">
                        <span class="text-white opacity6 d-block mb-2 position-relative z-index-1">{{$key+1}}</span>
                        <h5 class="font-weight-800 display-19 position-relative z-index-1 mb-0"><a href="{{URL::to('/products')}}" class="text-white text-primary-hover">{{$product->pname}}</a></h5>
                    </div>
                    <div class="card-data align-items-end">
                        <div class="card-custom-2 product_desc">
                            {!! $product->pdetail !!}
                        </div>
                        <!-- <span class="read_more" style="display: inline-block;">Read More</span> -->
                        <a href="{{URL::to('/products')}}" class="btn btn-link-1 px-0">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>

<!-- EXTRA
        ================================================== -->
<section class="bg-img cover-background md" data-background="{{ asset('front_assets/img/bg/bg-04.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="pt-16 pt-lg-18 pt-xl-22">
                    <div class="background-overlay"></div>
                    <div class="section-title01 mb-4 position-relative z-index-9">
                        <h2 class="display-5 font-weight-800 mb-md-0 text-white">
                            <span>We Are Proud to Excellence</span>
                            <span class="text-primary">Deliver Success</span>
                        </h2>
                    </div>
                    <p class="mb-1-9 opacity5 text-white wow fadeInUp" data-wow-delay="350ms">Our company has grown into a dynamic force in transportation across the world. Equipped with state-of-the-art technologies, warehouse services, carrier-partners and dedicated employees.</p>
                    <a href="{{URL::to('/contact')}}" class="butn-style1 wow fadeInUp" data-wow-delay="500ms">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR GALLERY
        ================================================== -->
<section>
    <div class="container">
        <div class="section-title01 mb-1-6 mb-md-2-6 text-center">
            <h2 class="display-5 font-weight-800 mb-md-0">
                <span>Our</span>
                <span class="text-primary">Gallery</span>
            </h2>
        </div>
        <div class="row portfolio-gallery-isotope mt-n2-9">
            @foreach($images as $image)
            <div class="col-md-6 col-lg-4 col-xxl-3 mt-1-9 mt-lg-2-9 warehouse wow fadeInUp" data-wow-delay="200ms" data-src="{{$image->file}}" data-sub-html="<h4 class='text-white'>Transfox Company #01</h4><p>Warehouse</p>">
                <div class="portfolio-style-01 h-100">
                    <div class="position-relative">
                        <div class="position-relative">
                            <img src="{{$image->file}}" alt="...">
                            <div class="portfolio-overlay">
                                <div class="portfolio-icon-box">
                                    <a href="portfolio-single.html"><i class="ti-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@section('page_script')
<script>
    (function($) {
        $(".read_more").click(function() {
            var TextValue = $(this).text();
            if (TextValue == "Read More") {
                $(this).text("Read Less");
                $(this).siblings(".product_desc").css({
                    'overflow': 'visible',
                    'max-height': '100%'
                });
            } else {
                $(this).text("Read More");
                $(this).siblings(".product_desc").css({
                    'overflow': 'hidden',
                    'max-height': '75px'
                });
            }
        });
    })(jQuery);
</script>
@endsection