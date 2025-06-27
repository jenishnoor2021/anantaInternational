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
                        <h1>Our Products</h1>
                    </div>
                    <ul>
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="#">Our Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BLOG
        ================================================== -->
<section class="bg-light blog-section">
    <div class="container">
        <div class="mb-1-9 mb-md-5 text-center wow fadeInUp" data-wow-delay="200ms">
            <span class="text-primary display-30 pb-3 text-uppercase lh-1 font-weight-700 mb-1 d-block">All Products</span>
            <h2 class="ls-minus-2px display-5 font-weight-800 lh-1 mb-0">Our Products</h2>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="200ms">
            <div class="filtering col-sm-12 text-center">
                @foreach ($categories as $category)
                <span data-filter='' data-category="{{ $category->id }}" class="tab-item {{ $categoryId == $category->id ? 'active' : '' }}">{{ $category->title }}</span>
                @endforeach
            </div>
        </div>
        <div class="row mt-n2-2" id="productsContainer">
            @include('partials.products', ['products' => $products])
        </div>
        <div class="row mt-4" id="pagination">
            <div class="col-sm-12" style="display:flex;justify-content:center;">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div>

    </div>
</section>

@endsection

@section('page_script')
<script>
    $(document).ready(function() {
        let currentCategoryId = $('.tab-item.active').data('category');

        // Handle tab click
        $(document).on('click', '.tab-item', function() {
            currentCategoryId = $(this).data('category');
            $('.tab-item').removeClass('active');
            $(this).addClass('active');

            loadImages(1, currentCategoryId);
        });

        // Handle pagination click
        $(document).on('click', '#pagination a', function(e) {
            e.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            loadImages(page, currentCategoryId);
        });

        function loadImages(page, categoryId) {
            $.ajax({
                url: '{{ route("site.products") }}?page=' + page,
                type: 'GET',
                data: {
                    category_id: categoryId
                },
                success: function(response) {
                    $('#productsContainer').html(response.html);
                    $('#pagination').html(response.pagination);
                }
            });
        }
    });
</script>
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