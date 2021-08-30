@php
$post = get_post($post);
@endphp
<a href="{{ get_permalink($post) }}">
  <article {{ post_class('postCard -col-3', $post) }}>
    <div class="postCard__image">
      {!! wp_get_attachment_image( get_post_thumbnail_id($post), [400, 300] , false, [
        'class' => 'lazyload',
        'data-src' => '{{ get_post_thumbnail_url($post) }}',
      ]); !!}
    </div>

    <h3 class="postCard__title">
      {!! get_the_title($post) !!}
    </h3>
  </article>
</a>