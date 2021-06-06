{{--
  Template Name: Services Template
--}}

@extends('layouts.app')

@section('content')


<section class="services-page-info__section">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-lg-10">
        <div class="services-page-info__content">
          <p class="services-page-info__subtitle">
            {{ $header_first_block['subtitle'] }}
          </p>
          <h2 class="services-page-info__title">
            {!! $header_first_block['title'] !!}
          </h2>
          <div class="services-page-info__text">
            {!! $header_first_block['text'] !!}
          </div>
        </div>
      </div>
    </div>

    <div class="row align-items-center -fluid services-page-info__bottom">
      <div class="col-xl-5 col-lg-6 row__side -left -mobile-padding-sm">
        <div class="moving-image -right js-image-move js-image-right">
          <img class="-circle" src="@asset('images/front-about/circle.png')">

          <div class="front-about__image">
            <div class="ratio ratio-16:9 overflow-hidden">
              <img class="-img" src="{{ $header_second_block['image']['url'] }}" alt="Services header image">
            </div>
            <div class="-lines">
              <img src="@asset('images/front-about/lines-reverse.png')">
            </div>
            <div class="-colors">
              @for ($i = 0; $i < 5; $i++) <span></span> @endfor
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-7 offset-xl-5 col-lg-6 offset-lg-6">
        <div class="services-page-info__content">
          <p class="services-page-info__subtitle">
            {{ $header_second_block['subtitle'] }}
          </p>
          <h2 class="services-page-info__title">
            {!! $header_second_block['title'] !!}
          </h2>
          <div class="services-page-info__text">
            {!! $header_second_block['text'] !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="services-page-services__section bg-grey">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <p class="services-page-services__subtitle">
          {{ $services_subtitle }}
        </p>
        <h2 class="services-page-services__title">
          {!! $services_title !!}
        </h2>
      </div>
    </div>


    @foreach ($services_repeater as $item)
      <div class="services-page-services__content">
        <div class="row justify-content-between">
          <div class="col-lg-5">
            <h3 class="services-page-services__item__title">
              {!! $item['title'] !!}
            </h3>
          </div>
          <div class="col-lg-7">
            <div class="services-page-services__item__text">
              {!! $item['text'] !!}
            </div>
          </div>
        </div>
      </div>    
    @endforeach

  </div>
</section>


<section class="services-page-clients__section bg-black">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-4">
        <h2 class="services-page-clients__title">
          {!! $clients_title !!}
        </h2>
      </div>

      <div class="col-lg-7">
        <div class="services-page-clients__text">
          {!! $clients_text !!}
        </div>
      </div>
    </div>

    <div class="row services-page-clients__grid">
      @foreach ($clients_repeater as $image)
        <div class="col-xl-3 col-lg-4 col-6">
          <div class="services-page-clients__item">
            <div class="image">
              <img src="{{ $image['image']['url'] }}" alt="Client image">
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


@include('sections.instagram')


@endsection
