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