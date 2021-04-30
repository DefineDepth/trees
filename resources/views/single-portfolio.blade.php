@extends('layouts.portfolio')

@section('content')

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-' . get_post_type())
    {{-- @include('partials.content-single-portfolio') --}}
  @endwhile

  {{-- This is for test - remove it later --}}
  @include('sections.projects-nav')

@endsection
