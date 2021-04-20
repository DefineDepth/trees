@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
    @if ( get_the_title() == 'Getting into the trees' )
      @include('partials.content-single-getting')
    @elseif ( get_the_title() == 'Does your brand convey purpose to outside eyes?' )
      @include('partials.content-single-does')
    @elseif ( get_the_title() == 'The Creative Process' )
      @include('partials.content-single-the')
    @else
      @include('partials.content-single-' . get_post_type())
    @endif

  @endwhile

  @include('sections.instagram')
@endsection
