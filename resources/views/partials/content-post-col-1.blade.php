<article {{ post_class('postCard -col-1', $post) }}>
  <div class="row">
    <div class="col-lg-6">
      <div class="postCard__image">
        <div class="ratio ratio-4:3">
          {!! wp_get_attachment_image( get_post_thumbnail_id($post), [400, 300] , false, [
            'class' => 'img-image img-image-ratio js-lazy',
          ]); !!}
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-lg-6">
      <div class="postCard__content">
        <div class="postCard__subtitle">
          <a href="#">
            INDUSTRY INSIGHT
          </a>
        </div>

        <h3 class="postCard__title">
          {!! get_the_title($post) !!}
        </h3>

        <div class="postCard__text">
          {{ get_the_content($post) }}
        </div>

        <div class="postCard__category">
          <a href="#">
            Insight
          </a>
        </div>
      </div>
    </div>
  </div>
</article>