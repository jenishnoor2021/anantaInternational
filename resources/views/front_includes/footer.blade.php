<div class="container pt-2-9 pt-lg-7">
    <div class="row mb-2-9">
        <div class="col-md-6 col-lg-4 mb-2-2 mb-lg-0">
            <div class="pe-md-5">
                <div class="section-title01 mb-1-9">
                    <div class="footer-logo text-center text-md-start mx-auto mx-lg-0">
                        <a href="{{URL::to('/')}}"><img src="{{ asset('front_assets/img/logos/logo.png') }}" alt="..."></a>
                    </div>
                </div>
                <p class="mb-1-6" style="color:#000;">We pride ourselves on providing best product quality and export services allover the globe.</p>
                <ul class="social-icon-style3 list-unstyled mb-0">
                    <li><a href="{{$facebook}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="{{$twitter}}"><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href="{{$linkdin}}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="{{$instagram}}"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-2-2 mb-lg-0">
            <div class="ps-md-1-9 ps-xxl-7 pe-lg-1-9 pe-xl-6">
                <div class="section-title01 mb-1-9">
                    <h3 class="h4">Company</h3>
                </div>
                <ul class="list-unstyled footer-link list-style6 mb-0">
                    <li>
                        <a href="{{URL::to('/about')}}" style="color: #000;">About Us</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/services')}}" style="color: #000;">Services</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/products')}}" style="color: #000;">Products</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/faq')}}" style="color: #000;">FAQs</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/contact')}}" style="color: #000;">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-2-2 mb-lg-0">
            <div class="ps-md-1-9 ps-xxl-7 pe-lg-1-9 pe-xl-6">
                <div class="section-title01 mb-1-9">
                    <h3 class="h4">Contact Us</h3>
                </div>
                <ul class="list-unstyled footer-link list-style6 mb-0">
                    <li><a href="#" style="color: #000;"><span style="color: #1b3d72;"><b>Address:</b> </span>{{ $company_address }}</a></li>
                    <li><a href="mailto:anantainternational03@gmail.com" style="color: #000;"><span style="color: #1b3d72;"><b>Mail:</b> </span>{{ $company_email }}</a></li>
                    <li><a href="tel:{{ $company_contact }}" style="color: #000;"><span style="color: #1b3d72;"><b>Phone:</b> </span>{{ $company_contact }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row border-top border-color-light-white align-items-center justify-content-center pt-1-6 pb-1-9" style="border-color:#1b3d72 !important;">
        Copyright @2025 ANANTA INTERNATIONAL All Rights Reserved
    </div>
</div>