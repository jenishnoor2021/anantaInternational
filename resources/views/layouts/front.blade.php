<!DOCTYPE html>
<html lang="en">

<head>
    @include('front_includes.head')

    @yield('page_style')
</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- ======= Header ======= -->
        <header class="header-style3">
            @include('front_includes.header')
        </header>


        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- end main content-->

        <footer style="background: #f5f5f5;color: #000;">
            @include('front_includes.footer')
        </footer>

    </div>

    <!-- SCROLL TO TOP
    ================================================== -->
    <div class="scroll-top-percentage"><span id="scroll-value"></span></div>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="{{ asset('front_assets/js/jquery.min.js') }}"></script>

    <!-- popper js -->
    <script src="{{ asset('front_assets/js/popper.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('front_assets/js/bootstrap.min.js') }}"></script>

    <!-- scroll -->
    <script src="{{ asset('front_assets/js/jquery.scrollbar.min.js') }}"></script>

    <!-- jquery -->
    <script src="{{ asset('front_assets/js/core.min.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('front_assets/js/main.js') }}"></script>

    <!-- form plugins js -->
    <script src="{{ asset('front_assets/quform/js/plugins.js') }}"></script>

    <!-- form scripts js -->
    <script src="{{ asset('front_assets/quform/js/scripts.js') }}"></script>

    <!-- all js include end -->

    @yield('page_script')

</body>

</html>