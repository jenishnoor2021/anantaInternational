@foreach ($products as $product)
<div class="col-md-6 col-lg-4 mt-2-2 rice wow fadeInUp" data-wow-delay="200ms">
  <article class="card card-style05 h-100">
    <div class="blog-img position-relative overflow-hidden">
      <img src="{{$product->file}}" class="radius-top" alt="...">
    </div>
    <div class="card-body position-relative pt-1-9 pb-1-9 pb-xl-2-6 px-1-9 px-xl-2-4">
      <a href="#" class="display-31">Best Quality</a>
      <h3 class="h4 mb-0 mt-1 mb-2">{{$product->pname}}</h3>
      <div class="product_desc">
        {!! $product->pdetail !!}

        <h3>✅ Key Features:</h3>
        {!! $product->feature !!}
      </div>
      <span class="read_more" style="display: inline-block;">Read More</span>
    </div>
  </article>
</div>
@endforeach

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