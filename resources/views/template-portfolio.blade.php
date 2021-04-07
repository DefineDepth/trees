{{--
  Template Name: Portfolio Template
--}}

@extends('layouts.app')

@section('content')


<section class="portfolio-header">
  <div class="container">
    <div class="row">
      <div class="col-xl-8">
        <h1 class="portfolio-header__title">
          We create multi-platform stories that connect brands with people. 
        </h1>

        <div class="portfolio-header__line"></div>
      </div>
    </div>
  </div>
</section>


<section class="portfolio-grid__section">
  <div class="container">
    
    @php
      $portfolio_grid_cells = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o',
      ];
    @endphp

    <div class="portfolio-grid">
      @foreach ($portfolio_grid_cells as $item)
        @if ( $item === 'g' )

          <div class="portfolio-grid__item cell-{{ $item }}">
            <div class="portfolio-grid__link ratio ratio-4:3">
              <div class="cta">
                <h5 class="cta_title">
                  Big Red Button
                </h5>
                <button class="cta_button">
                  DO IT
                </button>
              </div>
            </div>
          </div>

        @else
          <div class="portfolio-grid__item cell-{{ $item }}">
            <div class="portfolio-grid__link ratio ratio-4:3">
              <img class="img-image-ratio" src="@asset('images/grid-cell.jpg')">
            </div>
          </div>

        @endif
      @endforeach
    </div>

  </div>
</section>


@include('sections.instagram')


@endsection
