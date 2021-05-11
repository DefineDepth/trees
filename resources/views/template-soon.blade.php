{{--
  Template Name: Coming Soon Template
--}}

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class( 'body-theme' ) @endphp>

    @php do_action('get_header') @endphp
    {{-- @include('partials.header') --}}

    <div class="wrap" role="document">
      <div class="content">
        <main class="main">

          <section class="coming-soon">
            <div class="colors">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="logo">
              <svg width="773" height="175" viewBox="0 0 773 175" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                <path d="M135.597 3.36279V38.218H89.0001V171.636H46.5969V38.218H0V3.36279H135.597Z" fill="black"/>
                <path d="M280.398 104.973C280.125 105.238 280.227 105.204 279.942 105.473C275.7 109.316 270.904 112.499 265.716 114.915L290.019 171.644H243.846L222.326 121.645H194.477V171.644H152.066V3.37354H233.171C275.08 3.37354 297.762 28.3771 297.762 62.751V64.4879L280.398 104.973ZM228.246 36.5366H194.478V88.9456H228.246C245.999 88.9456 255.362 78.6118 255.362 63.2197C255.362 47.1115 245.991 36.5366 228.242 36.5366H228.246Z" fill="black"/>
                <path d="M314.016 3.36279H439.006V37.7378H356.43V69.2287H431.619V103.608H356.43V137.267H439.258V171.637H364.11L314.019 54.4525L314.016 3.36279Z" fill="black"/>
                <path d="M457.168 3.36279H582.155V37.7378H499.582V69.2287H574.768V103.608H499.582V137.267H582.41V171.637H494.328L457.188 84.8954L457.168 3.36279Z" fill="black"/>
                <path d="M670.979 174.998C629.56 174.998 601.705 155.772 601.705 121.868V117.308H642.383V120.671C642.383 134.858 651.751 143.508 671.228 143.508C688.744 143.508 700.321 136.535 700.321 123.561C700.619 120.034 699.558 116.528 697.357 113.757C695.156 110.987 691.98 109.162 688.479 108.655L645.334 98.0779C618.467 91.5708 604.664 80.0575 604.664 52.6469C604.664 19.2271 629.069 0.000976562 669.99 0.000976562C708.692 0.000976562 733.346 20.4389 733.346 51.2043V55.2941H694.148V52.4109C694.148 41.1127 687.739 31.7308 669.983 31.7308C655.194 31.7308 645.822 36.7767 645.822 48.8004C645.586 52.0674 646.601 55.3019 648.662 57.8475C650.723 60.3932 653.675 62.0593 656.919 62.5078L702.782 74.5211C730.387 81.7349 741.479 96.6375 741.479 119.953C741.486 153.604 710.915 174.998 670.979 174.998Z" fill="black"/>
                <path d="M761.33 2.35137C763.68 2.40581 765.963 3.15277 767.891 4.49877C769.819 5.84476 771.307 7.72998 772.169 9.91815C773.031 12.1063 773.228 14.5001 772.736 16.7999C772.244 19.0997 771.085 21.2032 769.403 22.8468C767.721 24.4904 765.592 25.6012 763.282 26.0398C760.972 26.4785 758.584 26.2256 756.417 25.3129C754.249 24.4002 752.4 22.8682 751.099 20.9088C749.799 18.9494 749.105 16.6498 749.105 14.2979C749.049 11.184 750.231 8.17499 752.392 5.93287C754.553 3.69074 757.516 2.39901 760.629 2.34194C760.856 2.33777 761.098 2.34198 761.33 2.35137ZM761.33 25.1191C763.464 25.0962 765.543 24.4424 767.307 23.2398C769.07 22.0372 770.438 20.3398 771.239 18.3611C772.04 16.3823 772.237 14.2108 771.807 12.12C771.377 10.0291 770.338 8.11245 768.82 6.61112C767.303 5.10979 765.376 4.0909 763.281 3.6829C761.186 3.27491 759.017 3.49596 757.048 4.31821C755.078 5.14047 753.396 6.52718 752.213 8.30375C751.029 10.0803 750.398 12.1673 750.398 14.302C750.349 15.6749 750.572 17.0441 751.052 18.3311C751.532 19.6182 752.262 20.7979 753.198 21.8028C754.135 22.8077 755.26 23.6181 756.51 24.1877C757.76 24.7573 759.11 25.0749 760.482 25.1223C760.763 25.1359 761.046 25.1316 761.33 25.1191V25.1191ZM762.116 15.5995H759.302V19.2643H757.552V8.50049H762.515C763.421 8.43103 764.316 8.72343 765.007 9.31355C765.697 9.90367 766.125 10.7433 766.197 11.6486C766.206 11.7824 766.208 11.9165 766.203 12.0505C766.2 12.7736 765.977 13.4787 765.563 14.0719C765.15 14.665 764.566 15.1182 763.889 15.3709L766.139 19.2643H764.103L762.116 15.5995ZM761.946 14.1381C763.689 14.1381 764.402 13.3501 764.402 12.0505C764.402 10.751 763.613 9.90961 761.946 9.90961H759.302V14.1361L761.946 14.1381Z" fill="black"/>
                </g>
                <defs>
                <clipPath id="clip0">
                <rect width="773" height="175" fill="white"/>
                </clipPath>
                </defs>
              </svg>
            </div>
            <div class="title">We're under construction.<br>Check back for an update soon.</div>
          </section>

        </main>
      </div>
    </div>

    @php do_action('get_footer') @endphp
    @php wp_footer() @endphp

  </body>
</html>