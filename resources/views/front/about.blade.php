@extends('layouts.front')

@section('content')

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section top-position1 bg-img cover-background left-overlay-secondary" data-overlay-dark="9" data-background="{{ asset('front_assets/img/bg/bg-01.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-start">
                    <div class="position-relative">
                        <h1>About Us</h1>
                    </div>
                    <ul>
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
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
            <div class="col-xl-5 mt-1-9 order-2 order-lg-1">
                <div class="section-title02 mb-1-9 wow fadeInUp" data-wow-delay="200ms">
                    <span>About Us</span>
                    <h2 class="ls-minus-2px display-5 font-weight-800 lh-1 mb-1-9">We provide full range of transport</h2>
                </div>
                <p class="mb-4 wow fadeInUp" data-wow-delay="350ms">The efficiency and reliability of transport systems play a crucial role in connecting communities.</p>
                <div class="d-flex mb-1-9 wow fadeInUp" data-wow-delay="500ms">
                    <div class="flex-shrink-0 me-4">
                        <img src="{{ asset('front_assets/img/icons/icon-4.png') }}" alt="..." class="w-65px">
                    </div>
                    <div class="flex-grow-1">
                        <h3 class="mb-2 h5">Worldwide Service</h3>
                        <p class="mb-0">We’re always provide people a complete solution focused of any business.</p>
                    </div>
                </div>
                <div class="d-flex mb-2-5 wow fadeInUp" data-wow-delay="650ms">
                    <div class="flex-shrink-0 me-4">
                        <img src="{{ asset('front_assets/img/icons/icon-5.png') }}" alt="..." class="w-65px">
                    </div>
                    <div class="flex-grow-1">
                        <h3 class="mb-2 h5">Local Service</h3>
                        <p class="mb-0">We’re always provide people a complete solution focused of any business.</p>
                    </div>
                </div>
                <a href="#" class="butn-style3 wow fadeInUp" data-wow-delay="800ms">Learn More</a>
            </div>
            <div class="col-xl-7 mt-1-9 order-1 order-lg-2">
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
                                    <div class="about-icon"><img src="{{ asset('front_assets/img/icons/icon-6.png') }}" alt="..." class="w-60px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 wow fadeInUp" data-wow-delay="350ms">
                            <div class="about-author">
                                <div class="author-img"><img src="{{ asset('front_assets/img/logos/logo.png') }}" alt="..."></div>
                                <!-- <h5 class="text-white mb-0 font-weight-700">John R. Holland</h5>
                                <span class="text-white d-block mb-3">CEO &amp; Founder</span> -->
                                <p class="text-white display-28">We pride ourselves on providing best transport services available allover the world.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT US 
        ================================================== -->
<section class="about-style03 pt-0">
    <div class="container">
        <div class="row align-items-xl-center mt-n1-9">
            <div class="col-lg-6 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                <img src="{{ asset('front_assets/img/content/mission.jpg') }}" alt="..." class="border-radius-5">
            </div>
            <div class="col-lg-6 mt-1-9">
                <div class="pe-lg-1-9">
                    <div class="section-title02 mb-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <span>ANANTA INTERNATIONAL</span>
                        <h2 class="ls-minus-2px display-5 font-weight-800 lh-1 mb-1-9">Our Mission</h2>
                    </div>
                    <div class="d-flex align-items-sm-center mb-1-6 wow fadeInUp" data-wow-delay="350ms">
                        <div class="flex-shrink-0 arrow-circle">
                            <i class="ti-check display-30 display-lg-28 text-primary font-weight-900"></i>
                        </div>
                        <div class="flex-grow-1">
                            <p class="mb-0 w-xl-70 w-xxl-55">Is always more than our expectation due to your support.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-sm-center mb-1-6 mb-sm-2-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="flex-shrink-0 arrow-circle">
                            <i class="ti-check display-30 display-lg-28 text-primary font-weight-900"></i>
                        </div>
                        <div class="flex-grow-1">
                            <p class="mb-0 w-xl-70 w-xxl-55"> We guarantee trusted service for us to grow more around the world.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT US 
        ================================================== -->
<section class="about-style03 pt-0">
    <div class="container">
        <div class="row align-items-xl-center mt-n1-9">
            <div class="col-lg-6 mt-1-9 order-2 order-lg-1">
                <div class="pe-lg-1-9">
                    <div class="section-title02 mb-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <span>ANANTA INTERNATIONAL</span>
                        <h2 class="ls-minus-2px display-5 font-weight-800 lh-1 mb-1-9">Our Vission</h2>
                    </div>
                    <div class="d-flex align-items-sm-center mb-1-6 wow fadeInUp" data-wow-delay="350ms">
                        <div class="flex-shrink-0 arrow-circle">
                            <i class="ti-check display-30 display-lg-28 text-primary font-weight-900"></i>
                        </div>
                        <div class="flex-grow-1">
                            <p class="mb-0 w-xl-70 w-xxl-55">Is always more than our expectation due to your support.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-sm-center mb-1-6 mb-sm-2-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="flex-shrink-0 arrow-circle">
                            <i class="ti-check display-30 display-lg-28 text-primary font-weight-900"></i>
                        </div>
                        <div class="flex-grow-1">
                            <p class="mb-0 w-xl-70 w-xxl-55"> We guarantee trusted service for us to grow more around the world.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-1-9 order-1 order-lg-2 wow fadeInUp" data-wow-delay="200ms">
                <img src="{{ asset('front_assets/img/content/vission.jpg') }}" alt="..." class="border-radius-5">
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

<!-- OUR GALLERY
        ================================================== -->
<section>
    <div class="container">
        <div class="section-title01 mb-1-6 mb-md-2-6 text-center">
            <h2 class="display-5 font-weight-800 mb-md-0">
                <span>Our</span>
                <span class="text-primary">Certificate</span>
            </h2>
        </div>
        <div class="row portfolio-gallery-isotope mt-n2-9">
            @foreach($certificates as $key=>$certificat)
            <div class="col-md-6 col-lg-4 col-xxl-3 mt-1-9 mt-lg-2-9 warehouse wow fadeInUp" data-wow-delay="200ms" data-src="{{ $certificat->file }}" data-sub-html="<h4 class='text-white'>Transfox Company #01</h4><p>Warehouse</p>">
                <div class="portfolio-style-01 h-100">
                    <div class="position-relative">
                        <div class="position-relative">
                            <img src="{{ $certificat->file }}" alt="...">
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