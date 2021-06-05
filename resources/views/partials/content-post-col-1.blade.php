@php
$post = get_post($post);
@endphp
<article {{ post_class('postCard -col-1', $post) }}>
  <a class="postCard__link" href="{{ get_permalink($post) }}">
    <div class="row">
      <div class="col-12">
        <div class="sectionLink -pb-sm">
          <div class="sectionLink__line"></div>
          <div class="sectionLink__arrow">
            {{-- <a href="{{ get_permalink($post) }}"> --}}
              <i class="icon" data-feather="arrow-right"></i>
              {{-- <img src="@asset('images/arrow.svg')" alt="arrow icon" class="icon"> --}}
            {{-- </a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-7">
        <div class="postCard__image" data-sal="slide-right">
          <div class="ratio ratio-3:2">
            {!! wp_get_attachment_image( get_post_thumbnail_id($post), [400, 300] , false, [
              'class' => 'img-image img-image-ratio lazyload',
              'data-src' => '{{ get_post_thumbnail_url($post) }}',
            ]); !!}
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-5">
        <div class="postCard__content">
          @if ( get_the_category($post) )
            <div class="postCard__subtitle">
              <span>
                {{ get_the_category($post)[0]->name }}
              </span>
            </div>
          @endif

          <h3 class="postCard__title">
            {!! get_the_title($post) !!}
          </h3>

          <div class="postCard__text">
            <p>
              {!! get_the_excerpt($post) !!}
            </p>
          </div>

          <div class="postCard__category">
            <span>
              Insight
            </span>
          </div>
        </div>
      </div>
    </div>
  </a>
</article>