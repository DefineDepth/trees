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


<section class="front-blog__col-3 swiper-section">
  <div class="container">
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

    <div class="swiper swiper-container -section js-post">
      <div class="row x-gap-20 y-space swiper-wrapper">
        @php $post_count = 0; @endphp
        @foreach ($posts as $post)
          @if ($post_count < 3)
            <div class="col-lg-4 col-md-6 swiper-slide" data-sal="slide-up">
              @include('partials.content-post-col-3', ['post' => $post])
            </div>
            @php $post_count++; @endphp
          @endif
        @endforeach
      </div>
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
            <a href="{{ $about_link }}">
              <span class="icon" data-feather="arrow-right"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="test-row row align-items-center justify-content-between -fluid inner-item">
      <div class="col-xl-6 col-lg-6 order-2 order-lg-1">
        <div class="front-about__content">
          <p class="front-about__subtitle">
            {{ $about_subtitle }}
          </p>
          <h3 class="front-about__title">
            {{ $about_title }}
          </h3>
          <div class="front-about__text">
            {{ $about_text }}
          </div>
          <div class="front-about__links">
            @foreach ($about_links_repeater as $item)
              <a href="{{ $item['link']['url'] }}">{{ $item['link']['title'] }}</a>
            @endforeach
          </div>
        </div>
      </div>
  
      <div class="col-xl-6 col-lg-6 row__side -right -mobile-padding order-1 order-lg-2">
        <div class="moving-image -left js-image-move js-image-left">
          <img class="-circle" src="@asset('images/front-about/circle.png')">

          <div class="front-about__image ratio ratio-2:1 overflow-hidden">
            <img class="-img" src="{{ $about_image['url'] }}" alt="About image">
            <img class="-lines" src="@asset('images/front-about/lines.png')">
            <div class="-colors">
              @for ($i = 0; $i < 5; $i++) <span></span> @endfor
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="front-blog__col-1">
  <div class="container">
    @php $post_count_2 = 0; @endphp
    @foreach ($posts as $post)
      @if ($post_count_2 > 2)
        @include('partials.content-post-col-1', ['post' => $post])
      @endif
      @php $post_count_2++; @endphp
    @endforeach
  </div>
</section>


<section class="clients__section -border swiper-section">
  <div class="container slider-container">   
    <div class="swiper swiper-container -section js-clients">
      <div class="row clients-gap y-space swiper-wrapper">
        @php
          $loop = new WP_Query( array(
            'post_type' => 'client',
            'posts_per_page' => 4
          ) ); 
        @endphp
        @foreach ($loop->posts as $post)
          <div class="col-xl-3 col-lg-4 col-md-6 swiper-slide">
            @include('partials.content-clients')
          </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="container">
    <div class="border"></div>
  </div>
</section>


<section class="testimonials">
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
              @if ( $testimonials_author )
                <p>{!! $testimonials_author !!}</p>
              @endif
            </div>
          </div>

          <div class="testimonials__text">
            <p>
              @if ( $testimonials_content )
                {!! $testimonials_content !!}
              @endif
              
              @if ( $testimonials_link )
                <a href="{{ $testimonials_link['url'] }}" class="testimonials__button button -dash">
                  {{ $testimonials_link['title'] }}
                </a>
              @endif
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@include('sections.instagram')


@endsection
