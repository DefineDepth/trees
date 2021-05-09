{{--
  Template Name: Work Canna Template
--}}

@extends('layouts.app')

@section('content')


<section class="portfolio-header">
  <div class="container">
    <div class="row">
      <div class="col-xl-8">
        {{-- @if ( $portfolio_controls['title'] ) --}}
          <h1 class="portfolio-header__title">
            {{-- {!! $portfolio_controls['title'] !!} --}}
            360° branding systems built for the cannabis industry
          </h1>
        {{-- @endif --}}

        <div class="portfolio-header__line"></div>
      </div>
    </div>
  </div>
</section>


<section class="canna-grid__section">
  <div class="container">
    <div class="row canna-grid__grid">
      
      @for ($i = 0; $i < 7; $i++)
        <div class="col-lg-6 canna-grid__item">
          <a href="{{ get_permalink( $some_grid_item->ID ) }}" class="canna-grid__link">
            <span class="canna-grid__number">001</span>

            <div data-parallax="0.8" class="canna-grid__image ratio ratio-4:3">
              <img data-parallax-target class="img-image-ratio" src="@asset('images/grid-cell.jpg')">
            </div>

            <div class="canna-grid__title">
              <h4>Wicked Delights</h4>
            </div>
          </a>
        </div>
      @endfor

    </div>
  </div>
</section>


@include('sections.instagram')


@endsection
