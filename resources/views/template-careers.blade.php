{{--
  Template Name: Careers Template
--}}

@extends('layouts.app')

@section('content')


<section class="careers-header__section">
  <div class="container">

    <div class="row careers-header__grid">
      <div class="col-xl-9 col-lg-9">
        <div class="careers-header__content">
          <p class="careers-header__subtitle">
            {{-- CAREERS --}}
            {{ $header['subtitle'] }}
          </p>
          <h1 class="careers-header__title">
            {{-- Want to join the team?<br>
            Help us make something good. --}}
            {!! $header['title'] !!}
          </h1>
          <div class="careers-header__text">
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> --}}
            {!! $header['text'] !!}
          </div>
        </div>
      </div>

      <div class="col-xl-2 col-lg-auto">
        <div class="careers-header-openings">
          <h4 class="careers-header-openings__title">
            {!! $header['openings_title'] !!}
          </h4>
          <ul class="careers-header-openings__list">
            @foreach ($header['openings_repeater'] as $item)
              <li>{!! $item['text'] !!}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>


    <div class="careers-header__grid__cards">
      <div class="row">

        <div class="col-xl-4 col-lg-6">
          <div class="careers-card -black">
            <div class="careers-card__colors">
              @for ($i = 0; $i < 5; $i++) <span></span> @endfor
            </div>

            <div class="careers-card__image">
              <img src="@asset('images/logo-light.svg')" alt="Card image">
            </div>

            <div class="careers-card__content">
              <h4 class="careers-card__title">
                Talent Hunt
              </h4>
        
              <div class="careers-card__text">
                <p>We’re always on the lookout for talented, creative humans. Drop us a note with your link, and who knows what could happen. Right?</p>
              </div>
            </div>
      
            <div class="careers-card__link">
              <a class="button -dash" href="#">Send Us Your Link</a>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-lg-6">
          <div class="careers-card">
            <div class="careers-card__content">
              <h4 class="careers-card__title">
                Senior Designer
              </h4>
        
              <div class="careers-card__text">
                <p> art as a vehicle for storytelling and community expression. Our projects are defined by a devotion to craft, narrative and championing arts enduring ability to tell powerful stories, tearing up the rule book on both the traditional art world model and accepted notions.</p>
              </div>
            </div>
      
            <div class="careers-card__link">
              <a class="button -dash" href="#">Let’s Go</a>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-lg-6">
          <div class="careers-card">
            <div class="careers-card__content">
              <h4 class="careers-card__title">
                Senior Designer
              </h4>
        
              <div class="careers-card__text">
                <p> art as a vehicle for storytelling and community expression. Our projects are defined by a devotion to craft, narrative and championing arts enduring ability to tell powerful stories, tearing up the rule book on both the traditional art world model and accepted notions.</p>
              </div>
            </div>
      
            <div class="careers-card__link">
              <a class="button -dash" href="#">Let’s Go</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>

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
