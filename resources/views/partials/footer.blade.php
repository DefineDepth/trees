@php
if ( isset($container_style) ) {
  $container_style = 'container';
} else {
  $container_style = 'container -fluid -p-left -p-right -row-normal';
}
@endphp

<footer class="footer__section {{ $footer_scheme }}">
  <div class="{{ $container_style }}">
    <div class="row">
      <div class="col-12">
        <div class="footer__cta">
          <div class="footer__circle ratio ratio-1:1"></div>
          <h2 class="footer__title">
            Want to see what we’re working on?
          </h2>
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
