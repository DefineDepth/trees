@php
$post = get_post($post);
@endphp
<article {{ post_class('postCard -col-3', $post) }}>
  <div class="postCard__image">
    <div class="ratio ratio-3:2">
      {!! wp_get_attachment_image( get_post_thumbnail_id($post), [400, 300] , false, [
        'class' => 'img-image img-image-ratio js-lazy',
      ]); !!}
    </div>
  </div>
  <h3 class="postCard__title">
    {!! get_the_title($post) !!}
  </h3>
  <div class="postCard__text">
    <p>
      {!! get_the_excerpt($post) !!}
    </p>
  </div>
</article>