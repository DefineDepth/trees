@php
if ( isset($container_style) ) {
  $container_style = 'container -fluid -p-left -p-right -row-normal';
} else {
  $container_style = 'container';
}
@endphp

<section class="instagram__section md:bg-grey {{ $section_class }}">
  <div class="{{ $container_style }}">
    <div class="instagram__inner bg-grey">
      <div class="row">
        <div class="col-12">
          <h3 class="instagram__title">
            @trees on Instagram
          </h3>
        </div>
      </div>
  
      <div class="swiper swiper-container -instagramSlider">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <a href="#" class="instagram__feed">
              <div class="ratio ratio-1:1">
                <img src="@asset('images/instagram/Trees - social 1.png')" class="img-image img-image-ratio">
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="#" class="instagram__feed">
              <div class="ratio ratio-1:1">
                <img src="@asset('images/instagram/Trees - social 2.png')" class="img-image img-image-ratio">
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="#" class="instagram__feed">
              <div class="ratio ratio-1:1">
                <img src="@asset('images/instagram/Trees - social 3.png')" class="img-image img-image-ratio">
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="#" class="instagram__feed">
              <div class="ratio ratio-1:1">
                <img src="@asset('images/instagram/Trees - social 4.png')" class="img-image img-image-ratio">
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="#" class="instagram__feed">
              <div class="ratio ratio-1:1">
                <img src="@asset('images/instagram/Trees - social 5.png')" class="img-image img-image-ratio">
              </div>
            </a>
          </div>

          <div class="swiper-slide">
            <a href="#" class="instagram__feed">
              <div class="ratio ratio-1:1">
                <img src="@asset('images/instagram/Trees - social 6.png')" class="img-image img-image-ratio">
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>