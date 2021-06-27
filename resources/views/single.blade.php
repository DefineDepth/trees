@extends('layouts.app')

@section('content')

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-' . get_post_type())
  @endwhile

  @include('sections.newsletter', ['section_class' => '-border-top'])
  @include('sections.related-posts')
  @include('sections.instagram')

@endsection
