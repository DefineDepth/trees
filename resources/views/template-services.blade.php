{{--
  Template Name: Services Template
--}}

@extends('layouts.app')

@section('content')


<section class="services-page-services__section">
  <div class="container">
    @for ($i = 0; $i < 6; $i++)
      <div class="services-page-services__content">
        <div class="row">
          <div class="col-lg-4">
            <h3 class="services-page-services__title">
              Brand<br>
              Development
            </h3>
          </div>
          <div class="col-lg-7">
            <div class="services-page-services__text">
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
