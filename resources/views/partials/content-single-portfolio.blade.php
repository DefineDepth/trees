<section class="portfolio-page-header">
  <div data-parallax="0.6" class="portfolio-page-header__image">
    <img data-parallax-target src="{{ get_the_post_thumbnail_url() }}" alt="Project header image">
  </div>

  <div class="portfolio-page-header__container">
    <div class="row">
      <div class="col-12">
        <h1 class="portfolio-page-header__title">
          {{ get_the_title() }}
        </h1>
        <div class="portfolio-page-header__line"></div>
      </div>
    </div>

    <div class="row portfolio-page-header__row">
      @foreach ($info_repeater as $item)
        <div class="col-auto">
          <div class="portfolio-page-header__info">
            <h4 class="title">{{ $item['title'] }}</h4>

            @if ( $item['link']['url'] === '#' )
              <p class="text">{{ $item['link']['title'] }}</p>
            @else
              <a class="text" href="{{ $item['link']['url'] }}">{{ $item['link']['title'] }}</a>
            @endif
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


<section class="portfolio-page-content">
  <div class="post-single-content">

    @php the_content() @endphp

  </div>
</section>
