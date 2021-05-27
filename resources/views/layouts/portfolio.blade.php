@php
if ( !is_user_logged_in() ) {
  wp_redirect( 'http://treesdigital.com/?page_id=4689' );
}
@endphp

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class( 'body-theme' ) @endphp data-barba="wrapper">

    @php do_action('get_header') @endphp

    @include('partials.header')

    <div class="barba-container" role="document" data-barba="container">
      <div class="content">
        
        <main class="main">
          @yield('content')
        </main>

      </div>
    </div>

    @php wp_footer() @endphp

    <noscript>
      <style type="text/css">
        [data-sal|='fade'] {
          opacity: 1;
        }
    
        [data-sal|='slide'],
        [data-sal|='zoom'] {
          opacity: 1;
          transform: none;
        }
    
        [data-sal|='flip'] {
          transform: none;
        }
      </style>
    </noscript>

  </body>
</html>
