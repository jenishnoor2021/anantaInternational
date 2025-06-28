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
                        <h1>Contact Us</h1>
                    </div>
                    <ul>
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT FORM
        ================================================== -->
<section>
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-7">
                <div class="p-2-2 p-lg-2-9 box-shadow-style1 h-100">
                    <div class="mb-1-6 mb-md-1-9 wow fadeInUp" data-wow-delay="200ms">
                        <span class="text-primary display-30 pb-3 text-uppercase lh-1 font-weight-700 mb-1 d-block">Contact Us</span>
                        <h2 class="ls-minus-2px display-5 font-weight-800 lh-1 mb-0">Get in touch</h2>
                    </div>

                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="mdi mdi-check-all me-2"></i>
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form class="wow fadeInUp" data-wow-delay="200ms" action="/contactstore" method="post" name="contactForm" enctype="multipart/form-data" onclick="" id="contactForm">
                        @csrf
                        <div class="quform-elements">
                            <div class="row">

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="name">Your Name <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="name" type="text" name="name" placeholder="Your name here" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="email">Your Email <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="email" type="text" name="email" placeholder="Your email here" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="contact">Contact Number</label>
                                        <div class="quform-input">
                                            <input class="form-control" id="contact" type="text" name="contact" placeholder="Your phone here" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Textarea element -->
                                <div class="col-md-12">
                                    <div class="quform-element form-group">
                                        <label for="message">Message <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Textarea element -->

                                <!-- Begin Captcha element -->
                                <!-- <div class="col-md-12">
                                    <div class="quform-element">
                                        <div class="form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="quform-captcha">
                                                <div class="quform-captcha-inner">
                                                    <img src="{{ asset('front_assets/quform/images/captcha/courier-new-light.png') }}" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- End Captcha element -->

                                <div id="form-spinner" style="display: none;" class="text-center mt-3">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Sending...</span>
                                    </div>
                                </div>

                                <!-- Begin Submit button -->
                                <div class="col-md-12">
                                    <div class="quform-submit-inner">
                                        <button class="butn-style1 border-0" type="submit" id="submitBtn">Send Message</button>
                                    </div>
                                    <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                </div>
                                <!-- End Submit button -->

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 bg-img cover-background secondary-overlay" data-overlay-dark="9" data-background="{{ asset('front_assets/img/content/contact-image.jpg') }}">
                <div class="p-1-9 p-lg-2-9 position-relative z-index-1 h-100">
                    <h2 class="ls-minus-2px h1 font-weight-800 lh-1 mb-3 text-white wow fadeInUp" data-wow-delay="200ms">Our contact detail</h2>
                    <p class="mb-2-2 text-white display-sm-28 wow fadeInUp" data-wow-delay="350ms">Need any consultations contact with us</p>
                    <div class="d-flex mb-4 pb-3 border-bottom border-color-light-white wow fadeInUp" data-wow-delay="500ms">
                        <div class="flex-shrink-0 mt-2">
                            <i class="fas fa-phone-alt text-primary fs-2"></i>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <h3 class="h5 text-white">Phone Number</h3>
                            <span class="text-white d-block mb-1">{{ $company_contact }}</span>
                            <span class="text-white">{{ $company_contact }}</span>
                        </div>
                    </div>
                    <div class="d-flex mb-4 pb-3 border-bottom border-color-light-white wow fadeInUp" data-wow-delay="650ms">
                        <div class="flex-shrink-0 mt-2">
                            <i class="far fa-envelope-open text-primary fs-2"></i>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <h3 class="h5 text-white">Email Address</h3>
                            <span class="text-white d-block mb-1">{{ $company_email }}</span>
                            <span class="text-white">{{ $company_email }}</span>
                        </div>
                    </div>
                    <div class="d-flex mb-4 pb-3 border-bottom border-color-light-white wow fadeInUp" data-wow-delay="800ms">
                        <div class="flex-shrink-0 mt-2">
                            <i class="fas fa-map-marker-alt text-primary fs-2"></i>
                        </div>
                        <div class="flex-grow-1 ms-4">
                            <h3 class="h5 text-white">Loaction</h3>
                            <address class="text-white d-block mb-0 w-md-80 w-xl-70">{{ $company_address }}</address>
                        </div>
                    </div>
                    <ul class="contact-social-icons wow fadeInUp" data-wow-delay="950ms">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAP
        ================================================== -->
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3720.211453052685!2d72.85844227526093!3d21.18375738050465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjHCsDExJzAxLjUiTiA3MsKwNTEnMzkuNyJF!5e0!3m2!1sen!2sin!4v1751037865130!5m2!1sen!2sin" class="map-h500" id="gmap_canvas" loading="lazy"></iframe>
</div>

@endsection

@section('page_script')
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        const submitBtn = document.getElementById('submitBtn');
        const spinner = document.getElementById('form-spinner');

        // Disable button & show spinner
        submitBtn.disabled = true;
        spinner.style.display = 'block';
    });
</script>
@endsection