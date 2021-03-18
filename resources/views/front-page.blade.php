{{--
  Template Name: Home template
--}}

@extends('layouts.app')

@section('content')


<section class="front-header">
  <div class="container">
    <div class="row">
      <div class="col-12 cd-intro">
        @if ($hero_subtitle)
          <p class="front-header__subtitle">
            {{ $hero_subtitle }}
          </p>
        @endif

        @if ($hero_title)
          <h1 class="front-header__title headline js-headline">
            <span>{{ $hero_title }}</span>
            @if ( !empty( $hero_repeater ) )
              <span class="headline__container js-headline-container">
                @php $loop_count = 0; @endphp
                @foreach ($hero_repeater as $item)
                  @if ($loop_count === 0)
                    <span class="is-visible">{{ $item['text'] }}</span>
                  @else
                    <span>{{ $item['text'] }}</span>
                  @endif
                  @php $loop_count++; @endphp
                @endforeach
              </span>
            @endif
          </h1>
        @endif
      </div>
    </div>
  </div>
</section>


<section class="front-blog__col-3">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="sectionLink -pb">
          <div class="sectionLink__line"></div>
          <div class="sectionLink__arrow">
            <a href="#">
              <span class="icon" data-feather="arrow-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row y-space">
      @php $post_count = 0; @endphp
      @foreach ($posts_posts as $post)
        @if ($post_count < 3)
          <div class="col-lg-4 col-md-6">
            @include('partials.content-post-col-3', ['post' => $post])
          </div>
          @php $post_count++; @endphp
        @endif
      @endforeach
    </div>
  </div>
</section>


<section class="front-about">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="sectionLink -pb">
          <div class="sectionLink__line"></div>
          <div class="sectionLink__arrow">
            <a href="#">
              <span class="icon" data-feather="arrow-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="wrap">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-6">
          <div class="front-about__content">
            @if ( $about_subtitle )
              <p class="front-about__subtitle">
                {{ $about_subtitle }}
              </p>
            @endif
  
            @if ( $about_title )
              <h2 class="front-about__title">
                {{ $about_title }}
              </h2>
            @endif
            
            @if ( $about_text )
            <p class="front-about__text">
              {{ $about_text }}
            </p>
            @endif
  
            <div class="front-about__links">
              <p>Case studies</p>
              <p>About us</p>
              <p>At work</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="img-bg">
      <div class="ratio ratio-4:3">
        <img class="img-image img-image-ratio" src="{{ $about_image['url'] }}" alt="image">
      </div>
    </div>
  </div>
</section>


<section class="front-blog__col-1">
  <div class="container">

    @php $post_count_2 = 0; @endphp
    @foreach ($posts_posts as $post)
      @if ($post_count_2 > 2)
        <div class="row">
          <div class="col-12">
            <div class="sectionLink -pb-sm">
              <div class="sectionLink__line"></div>
              <div class="sectionLink__arrow">
                <a href="#">
                  <span class="icon" data-feather="arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        @include('partials.content-post-col-1')
        @endif
      @php $post_count_2++; @endphp
    @endforeach

  </div>
</section>


<section class="clients__section js-theme-dark" data-theme="dark">
  <div class="container">
    <div class="row">
      @for ($i = 0; $i < 4; $i++)
        <div class="col-lg-3 col-md-6">
          @include('partials.content-clients')
        </div>
      @endfor
    </div>
  </div>
</section>


<section class="testimonials js-theme-dark" data-theme="dark">
  <div class="container">
    <div class="row">
      <div class="col-lg-11">
        <div class="testimonials__content">
          <div class="testimonials__header">
            <div class="testimonials__stars">
              @for ($i = 0; $i < 5; $i++)
                <span class="icon" data-feather="star"></span>
              @endfor
            </div>
            <div class="testimonials__author">
              <p class="text-grey">Tom Pepe - CEO \ Timtam</p>
            </div>
          </div>

          <div class="testimonials__text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          </div>

          <a href="#" class="testimonials__button button -dash">
            Case Study
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="instagram__section bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="instagram__title">
          @trees on Instagram
        </h3>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="instagram__feed">
          <div class="ratio ratio-1:1 bg-black"></div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="instagram__feed">
          <div class="ratio ratio-1:1 bg-black"></div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="instagram__feed">
          <div class="ratio ratio-1:1 bg-black"></div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="instagram__feed">
          <div class="ratio ratio-1:1 bg-black"></div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
