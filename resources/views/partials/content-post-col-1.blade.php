@php
$post = get_post($post);
@endphp
<article {{ post_class('postCard -col-1', $post) }}>
  <div class="row">
    <div class="col-lg-6">
      <div class="postCard__image">
        <div class="ratio ratio-3:2">
          {!! wp_get_attachment_image( get_post_thumbnail_id($post), [400, 300] , false, [
            'class' => 'img-image img-image-ratio lazyload',
            'data-src' => '{{ get_post_thumbnail_url($post) }}',
          ]); !!}
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-lg-6">
      <div class="postCard__content">
        @if ( get_the_category($post) )
          <div class="postCard__subtitle">
            <a href="#">
              {{ get_the_category($post)[0]->name }}
            </a>
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
          <a href="{{ get_permalink($post) }}">
            Insight
          </a>
        </div>
      </div>
    </div>
  </div>
</article>