@php
if ( !is_user_logged_in() ) {
  wp_redirect( 'http://treesdigital.com/?page_id=4689' );
}
@endphp

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class( 'body-theme' ) @endphp data-barba="wrapper">

    <div class="barba-container" role="document" data-barba="container">
      <div class="content js-barba-content">

        @php do_action('get_header') @endphp
        @include('partials.header')
        
        <main class="main">
          @yield('content')
        </main>

        {{-- @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif --}}

        @php do_action('get_footer') @endphp
        @include('partials.footer')
        @php wp_footer() @endphp

      </div>
    </div>

  </body>
</html>
