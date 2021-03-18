<article {{ post_class('postCard -col-3', $post) }}>
  <div class="postCard__image">
    <div class="ratio ratio-4:3">
      {!! wp_get_attachment_image( get_post_thumbnail_id($post), [400, 300] , false, [
        'class' => 'img-image img-image-ratio js-lazy',
      ]); !!}
    </div>
  </div>
  <div class="postCard__content">
    <h3 class="postCard__title">
      {{ get_the_title($post) }}
    </h3>
    <div class="postCard__text">
      {{ get_the_excerpt($post) }}
    </div>
  </div>
</article>