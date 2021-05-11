@php
if ( isset($container_style) ) {
  $container_style = 'container';
} else {
  $container_style = 'container -fluid -p-left -p-right -row-normal';
}
@endphp

<section class="instagram__section">
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
          @for ($i = 0; $i < 6; $i++)
            <div class="swiper-slide">
              <div class="instagram__feed">
                <div class="ratio ratio-1:1">
                  <img src="@asset('images/insta.png')" class="img-image img-image-ratio">
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
</section>