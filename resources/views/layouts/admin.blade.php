<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            @include('includes.topbar')
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            @include('includes.sidebar')
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('includes.content_footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        @include('includes.right-sidebar')
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @include('includes.footer')
    <script src="{{asset('front_assets/js/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector: '#pdetail, #feature',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            height: 500,
            valid_styles: {
                '*': 'color,font-family,font-size,font-weight,background-color,text-decoration'
            },
            setup: function(editor) {
                editor.on('PreProcess', function(e) {
                    const spans = e.node.querySelectorAll('span[style]');
                    spans.forEach(span => {
                        span.style.lineHeight = '';
                        span.style.whiteSpace = '';
                        if (span.getAttribute('style').trim() === '') {
                            span.removeAttribute('style');
                        }
                    });
                });
            }
        });
    </script>