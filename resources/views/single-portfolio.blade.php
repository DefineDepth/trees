@extends('layouts.portfolio')

@section('content')

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-' . get_post_type())
  @endwhile

  @include('sections.projects-nav')

@endsection