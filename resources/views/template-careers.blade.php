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
            {{ $header['subtitle'] }}
          </p>
          <h1 class="careers-header__title">
            {!! $header['title'] !!}
          </h1>
          <div class="careers-header__text">
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
                {!! $careers_cards['title'] !!}
              </h4>
        
              <div class="careers-card__text">
                {!! $careers_cards['text'] !!}
              </div>
            </div>
      
            <div class="careers-card__link">
              <a class="button -dash" href="{{ $careers_cards['link']['url'] }}">{!! $careers_cards['link']['title'] !!}</a>
            </div>
          </div>
        </div>

        @foreach ($careers_cards['careers_repeater'] as $item)
          <div class="col-xl-4 col-lg-6">
            <div class="careers-card">
              <div class="careers-card__content">
                <h4 class="careers-card__title">
                  {!! $item['title'] !!}
                </h4>
          
                <div class="careers-card__text">
                  {!! $item['text'] !!}
                </div>
              </div>
        
              <div class="careers-card__link">
                <a class="button -dash" href="{{ $item['link']['url'] }}">{!! $item['link']['title'] !!}</a>
              </div>
            </div>
          </div>
        @endforeach
        
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
              @if ( $testimonials['author'] )
                <p>{!! $testimonials['author'] !!}</p>
              @endif
            </div>
          </div>

          <div class="testimonials__text">
            <p>
              @if ( $testimonials['content'] )
                {!! $testimonials['content'] !!}
              @endif
              
              @if ( $testimonials['link'] )
                <a href="{{ $testimonials['link']['url'] }}" class="testimonials__button button -dash">
                  {{ $testimonials['link']['title'] }}
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
