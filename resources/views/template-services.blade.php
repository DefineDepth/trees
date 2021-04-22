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
      <div class="col-xl-5 col-lg-6 row__side -left">
        <div class="services-page-info__image ratio ratio-3:2">
          <img src="{{ $header_second_block['image']['url'] }}" alt="Services header image">
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
          Some
        </p>
        <h2 class="services-page-services__title">
          Some
        </h2>
      </div>
    </div>

    @for ($i = 0; $i < 6; $i++)
      <div class="services-page-services__content">
        <div class="row">
          <div class="col-lg-4">
            <h3 class="services-page-services__item__title">
              Brand<br>Development
            </h3>
          </div>
          <div class="col-lg-7">
            <div class="services-page-services__item__text">
              <p>Deep understanding of packaging, people and consumers, and the retail landscape they maneuver. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            </div>
          </div>
        </div>
      </div>
    @endfor
  </div>
</section>


@include('sections.instagram')


@endsection
