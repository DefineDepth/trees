{{--
  Template Name: Insight Template
--}}

@extends('layouts.app')

@section('content')


<section class="insight-header">
  <div class="container">
    <div class="row insight-header__gap">
      <div class="col-xl-8 col-lg-7">
        <p class="insight-header__subtitle">
          Industry insight
        </p>
        <h1 class="insight-header__title">
          A perspective based on experience
        </h1>
        <p class="insight-header__text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

      <div class="col-xl-4 col-lg-5">
        <div class="insight-header-quote">
          <p class="insight-header-quote__comment">
            “I admire anybody who has the guts to write anything at all.”
          </p>
          <p class="insight-header-quote__author">
            E.B. White <span>\</span> Author of Charlotte’s Web
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="front-blog__col-1">
  <div class="container">
    @foreach ($posts as $post)
      <div class="post-item">
        <div class="row">
          <div class="col-12">
            <div class="sectionLink -pb-sm">
              <div class="sectionLink__line"></div>
              <div class="sectionLink__arrow">
                <a href="#">
                  <span class="icon" data-feather="arrow-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        @include('partials.content-post-col-1', ['post' => $post])
      </div>
    @endforeach
  </div>
</section>


@include('sections.instagram')


@endsection
