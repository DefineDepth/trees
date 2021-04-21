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
            WHO WE ARE
          </p>
          <h2 class="about-page-info__title">
            Empower people to energize positive change
          </h2>
          <div class="about-page-info__text">
            <p>Experienced. Award-winning. Humble. We’ve built our designer-owned agency with one primary focus: To create engaging and memorable human experiences with design, driven by strategy and purpose for an undeniable impact. We specialize in multi-platform stories that connect brands with people.</p>
            <p>We strive to play a meaningful role in society by producing purpose first products, services and experiences that empower people to energize a positive impact. Excited people do some pretty extraordinary things when they share a clear and compelling sense of purpose and vision.</p>
          </div>
        </div>
      </div>


      <div class="col-xl-8 offset-xl-4 col-lg-10 offset-lg-2">
        <div class="about-page-info__image">
          <img src="@asset('images/about-image.png')">
        </div>

        <div class="about-page-info__content">
          <p class="about-page-info__subtitle">
            WHO WE ARE
          </p>
          <h2 class="about-page-info__title">
            Empower people to energize positive change
          </h2>
          <div class="about-page-info__text">
            <p>Experienced. Award-winning. Humble. We’ve built our designer-owned agency with one primary focus: To create engaging and memorable human experiences with design, driven by strategy and purpose for an undeniable impact. We specialize in multi-platform stories that connect brands with people.</p>
            <p>We strive to play a meaningful role in society by producing purpose first products, services and experiences that empower people to energize a positive impact. Excited people do some pretty extraordinary things when they share a clear and compelling sense of purpose and vision.</p>
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
        <h2 class="about-page-team__title">Diverse team<br>of creators</h2>
      </div>

      <div class="col-lg-7">
        <div class="about-page-team__text">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
        </div>
      </div>
    </div>

    <div class="row about-page-team__grid">
      @for ($i = 0; $i < 4; $i++)
        <div class="col-lg-3 col-md-6">
          <div class="team-card">
            <div class="team-card__position">
              Creative director
            </div>
            <div class="team-card__image">
              <div class="ratio ratio-3:4 bg-white"></div>
            </div>
            <div class="team-card__name">Phil Padilla</div>
          </div>
        </div>
      @endfor
    </div>
  </div>
</section>


<section class="about-page-about__section bg-black">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-4">
        <h2 class="about-page-about__title">Outside of<br>the office</h2>
      </div>

      <div class="col-lg-7">
        <div class="about-page-about__text">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
        </div>
      </div>
    </div>


    <div class="about-page-about__inner">

      @for ($i = 0; $i < 3; $i++)
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="content">
              <p class="subtitle">Category</p>
              <h3 class="title">Great people lead to great ideas</h3>
              <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="image bg-grey">
              {{-- <img src="#" alt="image"> --}}
            </div>
          </div>
        </div>
      @endfor

    </div>


  </div>
</section>


<section class="about-page-cta__section bg-black">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-5">
        <h2 class="about-page-cta__title">
          This defines us. What you do next defines you.
        </h2>
      </div>

      <div class="col-auto offset-lg-1">
        <div class="about-page-cta__button">
          <button>See the work</button>
        </div>
      </div>
    </div>
  </div>
</section>


@include('sections.instagram')


@endsection
