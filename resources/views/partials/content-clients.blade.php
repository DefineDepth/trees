@php
$post = get_post($post);
@endphp
<div class="clients">
  <div class="clients__image">
    {!! wp_get_attachment_image( get_post_thumbnail_id($post), [400, null], false, [
      'class' => 'bg-image lazyload',
      'data-src' => '{{ get_post_thumbnail_url($post) }}',
    ]); !!}
  </div>

  <div class="clients__content">
    @if ( $post->client_text )
      <p class="clients__text">
        {{ $post->client_text }}
      </p>
    @endif

    @if ( $post->client_button_link['title'] )
      <div class="clients__button">
        @if ( $post->client_button_link['url'] )
          <a href="{{ $post->client_button_link['url'] }}" class="button -dash">
            {{ $post->client_button_link['title'] }}
          </a>
        @else
          <a href="#" class="button -dash">
            {{ $post->client_button_link['title'] }}
          </a>
        @endif
      </div>
    @endif
  </div>
</div>
