{{--
  Template Name: Manifest Template
--}}

@extends('layouts.app')

@section('content')


<section class="post-single__section -manifest">
  <div class="post-single__article">
    <div class="container -fluid -p-left -p-right container-md">
      <div class="row post-single-header">
        <div class="col-xl-7 col-lg-6">
          <div class="post-single-header__left">
            <p class="post-single-header__category">
              {{ $header['subtitle'] }}
            </p>

            <h1 class="post-single-header__title">
              {!! $header['title'] !!}
            </h1>
            
            <div class="post-single-header__content">
              {!! $header['text'] !!}
            </div>
          </div>
        </div>

        <div class="col-xl-5 col-lg-6">
          <div class="post-single-header__right">
            <div class="post-single-header__image">
              <img src="{{ $header['image']['url'] }}" alt="Manifest image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="manifest-features__section">
  <div class="container">
    <div class="row no-gutters manifest-features__grid">

      @if ( $manifest_features )
        @foreach ($manifest_features['features_repeater'] as $item)
          <div class="col-lg-6">
            <div class="manifest-features__item">
              <h3 class="manifest-features__title">
                {!! $item['title'] !!}
              </h3>
              <p class="manifest-features__subtitle">
                {!! $item['text'] !!}
              </p>
            </div>
          </div>
        @endforeach
      @endif

    </div>
  </div>
</section>


<section class="manifest-cta__section">
  <div class="container">
    <div class="border">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-5">
          <h2 class="manifest-cta__title">
            {!! $manifest_cta['title'] !!}
          </h2>
        </div>
  
        <div class="col-auto offset-lg-1">
          <div class="manifest-cta__button">
            <a href="{{ $manifest_cta['link']['url'] }}">{!! $manifest_cta['link']['title'] !!}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="front-blog__col-3 swiper-section related-posts">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h2 class="related-posts__title -no-border">
          Related Posts
        </h2>
      </div>
    </div>

    <div class="swiper swiper-container -section js-post">
      <div class="row y-space swiper-wrapper">
        @php $post_count = 0; @endphp
        @foreach ($posts as $post)
          @if ($post_count < 3)
            <div class="col-lg-4 col-md-6 swiper-slide">
              @include('partials.content-post-col-3', ['post' => $post])
            </div>
            @php $post_count++; @endphp
          @endif
        @endforeach
      </div>
    </div>
  </div>
</section>


@include('sections.instagram')

@endsection
