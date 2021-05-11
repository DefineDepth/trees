@php
if ( isset($container_style) ) {
  $container_style = 'container';
} else {
  $container_style = 'container -fluid -p-left -p-right -row-normal';
}
@endphp

<section class="front-blog__col-3 swiper-section related-posts">
  <div class="{{ $container_style }}">
    <div class="row">
      <div class="col-12">
        <div class="sectionLink -pb">
          <div class="sectionLink__line"></div>
          <div class="sectionLink__arrow">
            <a href="{{ $insight_link }}">
              <span class="icon" data-feather="arrow-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h2 class="related-posts__title">
          Related Posts
        </h2>
      </div>
    </div>

    <div class="swiper swiper-container -section js-post">
      <div class="row y-space swiper-wrapper">
        @php $post_count = 0; @endphp
        @foreach ($posts as $post)
          @if ($post_count < 3)
            <div class="col-lg-4 col-md-6 swiper-slide">
              @include('partials.content-post-col-3', ['post' => $post])
            </div>
            @php $post_count++; @endphp
          @endif
        @endforeach
      </div>
    </div>
  </div>
</section>