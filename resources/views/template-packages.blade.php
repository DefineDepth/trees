{{--
  Template Name: Packages Template
--}}

@extends('layouts.app')

@section('content')


<section class="packages-header__section">
  <div class="container">
    <div class="row packages-header__grid">
      <div class="col-xl-7 col-lg-9">
        <div class="packages-header__content">
          <p class="packages-header__subtitle">
            {{-- {{ $header['subtitle'] }} --}}
            SMALL BUSINESS PACKAGES
          </p>
          <h1 class="packages-header__title">
            {{-- {!! $header['title'] !!} --}}
            Brand identity pricing packages
          </h1>
          <div class="packages-header__text">
            {{-- {!! $header['text'] !!} --}}
            Pricing can be a wide spectrum when it comes to brand identity. Another agency or creative firm might charge $30,000 to $250,000, depending on who they are and the scope of the project. The truth is, not all businesses need to investment that much, particularly a sole-proprietor. We’ve created brand identities for businesses and entrepreneurs alike, for over 15 years.
          </div>
        </div>
      </div>

      <div class="col-xl-5">
        <div class="packages-header__image">
          <img src="@asset('images/ocean.png')" alt="Packages Header Image">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="packages-clients__section">
  <div class="container">
    <div class="row">
      @for ($i = 0; $i < 12; $i++)
        <div class="packages-clients__item">
          <img src="@asset('images/brand-logo.png')" alt="Client">
        </div>
      @endfor
    </div>
  </div>
</section>


<section class="about-page-team__section">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-4">
        <h2 class="about-page-team__title">
          Brand Identity Pricing Packages
        </h2>
      </div>

      <div class="col-lg-7">
        <div class="about-page-team__text">
          Brand identity is the special sauce that makes your business unique and different from every other business. It typically includes visual elements, such as a color palette, design methods, logo variations, typography, iconography and more. It’s how a business presents itself to the public and distinguishes the business in consumers’ minds. Below is few suggested pricing packages for small businesses.
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


@include('sections.instagram')


@endsection
