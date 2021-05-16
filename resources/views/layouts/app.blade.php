@php
if ( !is_user_logged_in() ) {
  wp_redirect( 'http://treesdigital.com/?page_id=4689' );
}
@endphp

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class( 'body-theme' ) @endphp>

    @php do_action('get_header') @endphp

    @include('partials.header')

    <div class="wrap" role="document">
      <div class="content">
        
        <main class="main">
          @yield('content')
        </main>

        {{-- @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif --}}

      </div>
    </div>

    @php do_action('get_footer') @endphp

    @include('partials.footer')

    @php wp_footer() @endphp

  </body>
</html>
