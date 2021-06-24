{{--
  Template Name: Portfolio Template
--}}

@php
  $grid_projects = [];

  foreach ($portfolio_controls['grid_repeater'] as $key => $single) {
    if ( $key === 6 ) {
      $grid_projects[] = 'cta_section';
    }

    $grid_projects[] = get_post( substr( $single['project'], 3 ) );
  }
@endphp

@extends('layouts.app')

@section('content')


<section class="portfolio-header">
  <div class="container">
    <div class="row">
      <div class="col-xl-8">
        @if ( $portfolio_controls['title'] )
          <h1 class="portfolio-header__title">
            {!! $portfolio_controls['title'] !!}
          </h1>
        @endif

        <div class="portfolio-header__line"></div>
      </div>
    </div>
  </div>
</section>


<section class="portfolio-grid__section">
  <div class="container">
    <div class="portfolio-grid">
      @foreach ($grid_projects as $item)
        @if ( $item === 'cta_section' )

          <div class="portfolio-grid__item">
            <div class="portfolio-grid__link ratio ratio-4:3">
              <div class="cta">
                @if ( $portfolio_controls['grid_button_title'] )
                  <h5 class="cta_title">
                    {!! $portfolio_controls['grid_button_title'] !!}
                  </h5>
                @endif

                {{-- @if ( $portfolio_controls['grid_button']['title'] )
                  <a href="{{ $portfolio_controls['grid_button']['url'] }}" class="cta_button">
                    {{ $portfolio_controls['grid_button']['title'] }}
                  </a>
                @endif --}}
              </div>
            </div>
          </div>

        @else
      
          <div class="portfolio-grid__item">
            <a href="{{ get_permalink( $item->ID ) }}" data-parallax="0.8" class="portfolio-grid__link ratio ratio-4:3">
              <img
                data-parallax-target
                class="img-image-ratio"
                src="{{ get_the_post_thumbnail_url( $item->ID ) }}"
              >

              <div class="portfolio-grid__item__content">
                <div class="portfolio-grid__item__title">
                  <h4>{{ get_the_title( $item->ID ) }}</h4>
                </div>
                <div class="portfolio-grid__item__link">
                  <p>Some link title</p>
                </div>
              </div>
            </a>
          </div>

        @endif
      @endforeach
    </div>
  </div>
</section>


@include('sections.instagram')


@endsection
