{{--
  Template Name: Work Canna Template
--}}

@php
  $grid_projects = [];

  foreach ($portfolio_controls['grid_repeater'] as $key => $single) {
    if ( $key === 6 ) {
      $grid_projects[] = 'cta_section';
      continue;
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
        <h1 class="portfolio-header__title">
          {!! $portfolio_controls['title'] !!}
        </h1>

        <div class="portfolio-header__line"></div>
      </div>
    </div>
  </div>
</section>


<section class="canna-grid__section">
  <div class="container">
    <div class="row canna-grid__grid">
      @foreach ($grid_projects as $key => $item)
        <div class="col-lg-6 canna-grid__item">
          <a href="{{ get_permalink( $item->ID ) }}" class="canna-grid__link">
            <span class="canna-grid__number">00{{ $key + 1 }}</span>

            <div data-parallax="0.8" class="canna-grid__image ratio ratio-16:9">
              <img data-parallax-target class="img-image-ratio" src="{{ get_the_post_thumbnail_url( $item->ID ) }}">
            </div>

            <div class="canna-grid__title">
              <h4>{{ get_the_title( $item->ID ) }}</h4>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>


@include('sections.instagram')


@endsection
