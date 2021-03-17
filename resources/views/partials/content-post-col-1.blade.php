<article {{ post_class('postCard -col-1', $post) }}>
  <div class="row">
    <div class="col-lg-6">
      <div class="postCard__image">
        <div class="ratio ratio-4:3 ">
          {!! wp_get_attachment_image( get_post_thumbnail_id($post), [400, 300] , false, [
            'class' => 'img-image img-image-ratio js-lazy',
          ]); !!}
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="postCard__content">
        <h3 class="postCard__title">
          {{ the_title() }}
        </h3>

        <div class="postCard__text">
          {{ trim(the_content(), 40) }}
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