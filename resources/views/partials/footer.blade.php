@php
if ( isset($container_style) ) {
  $container_style = 'container -fluid -p-left -p-right -row-normal';
} else {
  $container_style = 'container';
}
@endphp

<footer class="footer__section {{ $footer_scheme }}">
  <div class="{{ $container_style }}">
    <div class="row">
      <div class="col-12">

        <div class="footer__cta">
          <div class="footer__circle ratio ratio-1:1"></div>
          <a href="{{ $footer_url }}" class="footer__content">
            <h2 class="footer__title">
              {{ $footer_title }}
            </h2>
            <h2 class="footer__title -rollover">
              {{ $footer_title_rollover }}
            </h2>
          </a>
        </div>

        <div class="footer__bottom">
          <p class="footer__copyright">
            <span class="icon" data-feather="heart"></span>
            Made with love in Washington State
          </p>
          <div class="footer__socials">
            <div class="footer__socials__item">
              <a href="#">Facebook</a>
            </div>
            <div class="footer__socials__item">
              <a href="#">Instagram</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
