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
                        <h1>Faqs</h1>
                    </div>
                    <ul>
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="#">Faqs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ACCORDION
        ================================================== -->
<section class="position-relative bg-light">
    <div class="container">
        <div class="row align-items-center mt-n1-9">
            <div class="col-lg-12 mt-1-9">
                <div class="pe-xl-6">
                    <div class="mb-1-9 mb-md-5 wow fadeInUp" data-wow-delay="200ms">
                        <span class="text-primary display-30 pb-3 text-uppercase lh-1 font-weight-700 mb-1 d-block">FAQs</span>
                        <h2 class="ls-minus-2px display-5 font-weight-800 lh-1 mb-0">Frequently Asked Questions</h2>
                    </div>
                    <div id="accordion" class="accordion-style">
                        @php
                        $p = 1;
                        @endphp
                        @foreach ($faqs as $faq)
                        <div class="card mb-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="card-header" id="heading{{$p}}">
                                <h5 class="mb-0">
                                    <button class="btn btn-link " data-bs-toggle="collapse" data-bs-target="#collapse{{$p}}" aria-expanded="true" aria-controls="collapse{{$p}}">{{$faq->title}}</button>
                                </h5>
                            </div>
                            <div id="collapse{{$p}}" class="collapse {{$p == 1 ?'show' : ''}}" aria-labelledby="heading{{$p}}" data-bs-parent="#accordion">
                                <div class="card-body">
                                    {{$faq->body}}
                                </div>
                            </div>
                        </div>
                        @php
                        $p += 1;
                        @endphp
                        @endforeach
                        <div class="card mb-4 wow fadeInUp" data-wow-delay="350ms">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How can i track my shipments?</button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                <div class="card-body">
                                    We are committed to providing our customers with exceptional service while offering our employees the best training. There are many variations of passages of lorem ipsum is simply free text.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4 wow fadeInUp" data-wow-delay="500ms">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What is included in your services?</button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-bs-parent="#accordion">
                                <div class="card-body">
                                    We are committed to providing our customers with exceptional service while offering our employees the best training. There are many variations of passages of lorem ipsum is simply free text.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInUp" data-wow-delay="650ms">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How can i safely use files?</button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-bs-parent="#accordion">
                                <div class="card-body">
                                    We are committed to providing our customers with exceptional service while offering our employees the best training. There are many variations of passages of lorem ipsum is simply free text.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection