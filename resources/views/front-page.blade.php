{{--
  Template Name: Home template
--}}

@extends('layouts.app')

@section('content')


<section class="front-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="front-header__subtitle">
          Design perspective –
        </p>

        <h1 class="front-header__title">
          Let's talk design.
        </h1>
      </div>
    </div>
  </div>
</section>


<section class="front-blog__col-3">
  <div class="container">
    <div class="row">
      @php
        $post_count = 0;
      @endphp
      @while ( have_posts() && $post_count < 3 ) @php the_post() @endphp
        <div class="col-lg-4 col-md-6">
          @include('partials.content-post-col-3')
        </div>
        @php $post_count++; @endphp
      @endwhile
    </div>
  </div>
</section>


<section class="front-about">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6">
        <div class="front-about__content">
          <p class="front-about__subtitle">
            About us
          </p>

          <h2 class="front-about__title">
            Lorem ipsum diem dolor sit amet
          </h2>

          <p class="front-about__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
          </p>

          <div class="front-about__tags">
            <p>Case studies</p>
            <p>About us</p>
            <p>At work</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="front-about__image">
          <div class="ratio ratio-4:3 bg-black"></div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="front-blog__col-1">
  <div class="container">
    @while ( have_posts() ) @php the_post() @endphp
      @include('partials.content-post-col-1')
    @endwhile
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
                <span class="icon icon-star-1"></span>
              @endfor
            </div>
            <div class="testimonials__author">
              <p>Tom Pepe - CEO \ Timtam</p>
            </div>
          </div>

          <div class="testimonials__text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          </div>

          <a href="#" class="testimonials__button">
            Case Study
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="instagram-feed">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>instagram</h1>
      </div>
    </div>
  </div>
</section>


@endsection
