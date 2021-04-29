@php
$post = get_post($post);
@endphp
<div class="team-card">
  <div class="team-card__position">{{ $post->team_position }}</div>

  <div class="team-card__image">
    @if ( get_post_thumbnail_id($post) )
      <div class="ratio ratio-3:4">
        {!! wp_get_attachment_image( get_post_thumbnail_id($post), [400, null], false, [
          'class' => 'bg-image lazyload',
          'data-src' => '{{ get_post_thumbnail_url($post) }}',
        ]); !!}
      </div>    
    @else
      <div class="ratio ratio-3:4 bg-white"></div>
    @endif
  </div>

  <div class="team-card__name">{{ get_the_title($post) }}</div>
</div>
