<div class="navbar-default border-bottom border-color-light-white">

    <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
        <div class="row align-items-center">
            <div class="col-12 col-lg-12">
                <div class="menu_area alt-font">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="navbar-header navbar-header-custom">
                            <!-- start logo -->
                            <a href="{{URL::to('/')}}" class="navbar-brand"><img id="logo" src="{{ asset('front_assets/img/logos/logo.png') }}" alt="logo"></a>
                            <!-- end logo -->
                        </div>

                        <div class="navbar-toggler"></div>

                        <!-- start menu area -->
                        <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                <a href="{{URL::to('/')}}">Home</a>
                            </li>
                            <li class="{{ Request::is('/about') ? 'active' : '' }}">
                                <a href="{{URL::to('/about')}}">About Us</a>
                            </li>
                            <li class="{{ Request::is('/services') ? 'active' : '' }}"><a href="{{URL::to('/services')}}">Services</a></li>
                            <li class="{{ Request::is('/products') ? 'active' : '' }}"><a href="{{URL::to('/products')}}">Products</a></li>
                            <li class="{{ Request::is('/contact') ? 'active' : '' }}"><a href="{{URL::to('/contact')}}">Contact</a></li>
                        </ul>
                        <!-- end menu area -->

                        <!-- start attribute navigation -->
                        <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                            <ul>
                                <li class="d-none d-xl-inline-block"><a href="{{URL::to('/contact')}}" class="butn-style1 md text-white"><span>Get Quote</span></a></li>
                            </ul>
                        </div>
                        <!-- end attribute navigation -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>