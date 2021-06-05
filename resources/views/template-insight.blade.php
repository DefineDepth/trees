{{--
  Template Name: Insight Template
--}}

@extends('layouts.app')

@section('content')


<section class="insight-header">
  <div class="container">
    <div class="row insight-header__gap">
      <div class="col-xl-7 col-lg-7">
        <p class="insight-header__subtitle">
          {!! $header['subtitle'] !!}
        </p>
        <h1 class="insight-header__title">
          {!! $header['title'] !!}
        </h1>
        <div class="insight-header__text">
          {!! $header['text'] !!}
        </div>
      </div>

      <div class="col-xl-5 col-lg-5">
        <div class="insight-header-quote insight-page">
          <p class="insight-header-quote__comment">
            “{!! $header['quote'] !!}”
          </p>
          <p class="insight-header-quote__author">
            {!! $header['quote_author'] !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="front-blog__col-1">
  <div class="container">
    @foreach ($posts as $post)
      @include('partials.content-post-col-1', ['post' => $post])
    @endforeach
  </div>
</section>


@include('sections.instagram')


@endsection
