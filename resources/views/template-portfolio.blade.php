{{--
  Template Name: Portfolio Template
--}}

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
    
    @php
      $portfolio_grid_cells = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o',
      ];

      // var_dump( $portfolio_controls['grid_repeater'] );

      $grid_projects = [];

      // foreach ($portfolio_controls['grid_repeater'] as $key => $value) {
      foreach ($portfolio_controls['grid_repeater'] as $single) {
        // $grid_projects[] = get_post( substr( $single['project'], 3 ) );
        $grid_projects[] = substr( $single['project'], 3 );
      }

      // var_dump( $grid_projects );
      
      $teststst = get_posts([
        'post_type' => 'portfolio',
        'include' => $grid_projects,
        // 'fields' => 'ids'
      ]) ?: [];

      var_dump( $teststst );

      

      // foreach ($arayrya as $single) {
      //   echo $single->post_title;
      // }

    @endphp

    <div class="portfolio-grid">
      @foreach ($portfolio_controls['grid_repeater'] as $key => $item)
        @if ( $key === 6 )

          <div class="portfolio-grid__item">
            <div class="portfolio-grid__link ratio ratio-4:3">
              <div class="cta">
                @if ( $portfolio_controls['grid_button_title'] )
                  <h5 class="cta_title">
                    {{ $portfolio_controls['grid_button_title'] }}
                  </h5>
                @endif

                @if ( $portfolio_controls['grid_button']['title'] )
                  <a href="{{ $portfolio_controls['grid_button']['url'] }}" class="cta_button">
                    {{ $portfolio_controls['grid_button']['title'] }}
                  </a>
                @endif
              </div>
            </div>
          </div>

        @else

        @php
          $some_grid_item = get_post( substr( $item['project'], 3 ) );
        @endphp
        
          <div class="portfolio-grid__item">
            <a href="{{ get_permalink( $some_grid_item->ID ) }}" data-parallax="0.8" class="portfolio-grid__link ratio ratio-4:3">
              <img
                data-parallax-target
                class="img-image-ratio"
                src="{{ get_the_post_thumbnail( $some_grid_item->ID ) }}"
              >
            </a>
          </div>

        @endif
      @endforeach
    </div>

  </div>
</section>


@include('sections.instagram')


@endsection
