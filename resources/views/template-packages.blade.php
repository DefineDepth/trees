{{--
  Template Name: Packages Template
--}}

@extends('layouts.app')

@section('content')


<section class="packages-header__section">
  <div class="container">
    <div class="row align-items-center packages-header__grid">
      <div class="col-xl-7 col-lg-9">
        <div class="packages-header__content">
          <p class="packages-header__subtitle">
            {{ $header['subtitle'] }}
          </p>
          <h1 class="packages-header__title">
            {!! $header['title'] !!}
          </h1>
          <div class="packages-header__text">
            {!! $header['text'] !!}
          </div>
        </div>
      </div>

      <div class="col-xl-5">
        <div class="packages-header__image">
          <img src="{{ $header['image']['url'] }}" alt="Packages Header Image">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="packages-clients__section">
  <div class="container">
    <div class="row packages-clients__grid">
      @foreach ($clients['clients_repeater'] as $item)
        <div class="col-lg-3 col-md-6">
          <div class="packages-clients__item ratio ratio-1:1" data-sal="slide-up">
            <img src="{{ $item['image']['url'] }}" alt="Client">
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


<section class="packages-options__section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <h2 class="packages-options__title">
          {!! $packages['title'] !!}
        </h2>
      </div>

      <div class="col-xl-6 offset-lg-1 col-lg-7">
        <div class="packages-options__text">
          {!! $packages['text'] !!}
        </div>
      </div>
    </div>
  </div>

  <div class="container packages-options__container">
    <div class="packages-options__grid">
      <div class="row justify-content-center">
        @foreach ($packages['packages_repeater'] as $item)
          <div class="col-xl-10">
            <div class="package__item">
              <h4 class="package__title">
                {!! $item['title'] !!}
              </h4>
              <div class="package__text">
                {!! $item['text'] !!}
              </div>

              @if ($item['features_repeater'])
                <div class="package-features js-accordion">
                  @foreach ($item['features_repeater'] as $feature)
                    <div class="package-features__item js-accordion-item">
                      <div class="package-features__header">
                        <div class="package-features__icon">
                          <i class="icon" data-feather="plus"></i>
                        </div>
                        <h5 class="package-features__title">
                          {!! $feature['title'] !!}
                        </h5>
                      </div>

                      <div class="package-features__content js-accordion-content">
                        {!! $feature['text'] !!}
                      </div>
                    </div>
                  @endforeach
                </div>
              @endif

              @if ($item['price'])
                <h3 class="package__price">{!! $item['price'] !!}</h3>
              @endif

              <div class="package__button">
                <a href="{!! $item['link']['url'] !!}">{!! $item['link']['title'] !!}</a>
                @if ($item['timeline'])
                  <span class="package__button__timeline">{!! $item['timeline'] !!}</span>
                @endif
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>


@include('sections.instagram')


@endsection
