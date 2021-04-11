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


<section class="about-page-services__section">
  <div class="container">

    @for ($i = 0; $i < 3; $i++)
      <div class="about-page-services__content">
        <div class="row">
          <div class="col-lg-4">
            <h3 class="about-page-services__title">
              Brand<br>
              Development
            </h3>
          </div>
          <div class="col-lg-7">
            <div class="about-page-services__text">
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
