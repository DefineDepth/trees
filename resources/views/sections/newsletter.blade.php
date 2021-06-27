@php
if ( isset($container_style) ) {
  $container_style = 'container -fluid -p-left -p-right -row-normal container-md';
} else {
  $container_style = 'container';
}
@endphp

<section class="newsletter {{ $section_class }}">
  <div class="{{ $container_style }}">
    <div class="row justify-content-center text-center">
      <div class="col-12">
        <div class="newsletter__content">
          <h3 class="newsletter__title">
            Join our newsletter today, no funny stuff.
          </h3>

          <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-5856" method="post" data-id="5856" data-name="Some form">
            <div class="mc4wp-form-fields">
              <div class="mc4wp-form-single">
                <input type="email" name="EMAIL" placeholder="Enter email…" required="">
                <input type="submit" value="GO">
              </div>
            </div>

            <label style="display: none !important;">
              Leave this field empty if you're human:
              <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
            </label>

            <input type="hidden" name="_mc4wp_timestamp" value="1624720436">
            <input type="hidden" name="_mc4wp_form_id" value="5856">
            <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">

            <div class="mc4wp-response"></div>
          </form>

          {{-- @php echo do_shortcode("[mc4wp_form id='5856']"); @endphp --}}
        </div>
      </div>
    </div>
  </div>
</section>
