@extends('layouts.portfolio')

@section('content')

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-' . get_post_type())
  @endwhile


  @include('sections.projects-nav', [
    'prev_project' => $prev_project = get_post( substr( $prev_project, 3 ) ),
    'next_project' => $next_project = get_post( substr( $next_project, 3 ) ),
  ] )

@endsection
