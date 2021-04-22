{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')


<section class="about-page-info__section">
  <div class="container">
    <div class="row">

      <div class="col-xl-8 col-lg-10">
        <div class="about-page-info__content">
          <p class="about-page-info__subtitle">
            {{ $header_first_block['header_first_subtitle'] }}
          </p>
          <h2 class="about-page-info__title">
            {{ $header_first_block['header_first_title'] }}
          </h2>
          <div class="about-page-info__text">
            {!! $header_first_block['header_first_text'] !!}
          </div>
        </div>
      </div>


      <div class="col-xl-8 offset-xl-4 col-lg-10 offset-lg-2">
        <div class="about-page-info__image">
          <img src="{{ $header_second_block['header_second_image']['url'] }}">
        </div>

        <div class="about-page-info__content">
          <p class="about-page-info__subtitle">
            {{ $header_second_block['header_second_subtitle'] }}
          </p>
          <h2 class="about-page-info__title">
            {{ $header_second_block['header_second_title'] }}
          </h2>
          <div class="about-page-info__text">
            {!! $header_second_block['header_second_text'] !!}
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="about-page-team__section bg-grey">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-4">
        <h2 class="about-page-team__title">
          {!! $team_title !!}
        </h2>
      </div>

      <div class="col-lg-7">
        <div class="about-page-team__text">
          {!! $team_text !!}
        </div>
      </div>
    </div>

    <div class="row about-page-team__grid">

      @foreach ($team_posts as $post)
        <div class="col-lg-3 col-md-6">
          @include('partials.content-teams')
        </div>
      @endforeach

    </div>
  </div>
</section>


<section class="about-page-about__section bg-black">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-4">
        <h2 class="about-page-about__title">
          {!! $values_title !!}
        </h2>
      </div>

      <div class="col-lg-7">
        <div class="about-page-about__text">
          {!! $values_text !!}
        </div>
      </div>
    </div>


    <div class="about-page-about__inner">
      <div class="row align-items-center -fluid inner-item">
        <div class="col-xl-7 col-lg-5 row__side -left -mobile-padding">
          <div class="image bg-grey">
            <img src="{{ $value_first['value_image']['url'] }}" alt="Value image">
          </div>
        </div>

        <div class="offset-xl-7 col-xl-5 offset-lg-5 col-lg-6">
          <div class="content">
            <p class="subtitle">
              {{ $value_first['value_subtitle'] }}
            </p>
            <h3 class="title">
              {!! $value_first['value_title'] !!}
            </h3>
            <div class="text">
              {!! $value_first['value_text'] !!}
            </div>
          </div>
        </div>
      </div>

      <div class="row align-items-center inner-item">
        <div class="col-xl-5 col-lg-6 order-2 order-lg-1">
          <div class="content">
            <p class="subtitle">
              {{ $value_second['value_subtitle'] }}
            </p>
            <h3 class="title">
              {!! $value_second['value_title'] !!}
            </h3>
            <div class="text">
              {!! $value_second['value_text'] !!}
            </div>
          </div>
        </div>

        <div class="col-xl-7 col-lg-6 order-1 order-lg-2">
          <div class="image bg-grey">
            <img src="{{ $value_second['value_image']['url'] }}" alt="Value image">
          </div>
        </div>
      </div>

      <div class="row align-items-center inner-item">
        <div class="col-xl-7 col-lg-6">
          <div class="image bg-grey">
            <img src="{{ $value_third['value_image']['url'] }}" alt="Value image">
          </div>
        </div>

        <div class="col-xl-5 col-lg-6">
          <div class="content">
            <p class="subtitle">
              {{ $value_third['value_subtitle'] }}
            </p>
            <h3 class="title">
              {!! $value_third['value_title'] !!}
            </h3>
            <div class="text">
              {!! $value_third['value_text'] !!}
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


<section class="about-page-cta__section bg-black">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-5">
        <h2 class="about-page-cta__title">
          {!! $cta_title !!}
        </h2>
      </div>

      <div class="col-auto offset-lg-1">
        <div class="about-page-cta__button">
          <a href="{{ $cta_button_link['url'] }}">{{ $cta_button_link['title'] }}</a>
        </div>
      </div>
    </div>
  </div>
</section>


@include('sections.instagram')


@endsection
