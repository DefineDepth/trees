<section class="post-single__section">
  <div class="container">
    <article @php post_class('post-single__article') @endphp>

      <div class="row post-single-header">
        <div class="col-xl-7">
          <div class="post-single-header__left">
            <p class="post-single-header__category">
              {{ get_the_category($post)[0]->name }}
            </p>

            <h1 class="post-single-header__title">
              {!! get_the_title() !!}
            </h1>

            <p class="post-single-header__excerpt">
              {!! get_the_excerpt() !!}
            </p>
            
            <div class="post-single-header__content">
              {!! $post_header_content !!}
            </div>
          </div>
        </div>

        <div class="col-xl-5">
          <div class="post-single-header__right">
            <div class="post-single-header__image">
              <img src="{{ $post_image['url'] }}" alt="post image">
            </div>

            <div class="post-single-header__author">
              <img src="@asset('images/author.png')" alt="post author image">
              <div class="content">
                <h4 class="name">Phillip Padilla</h4>
                <p class="position">Trees Digital \ Chief Creative</p>
              </div>
              <div class="socials"></div>
            </div>

            <div class="post-single-header__quote">
              <p class="quote">
                "{{ $post_quote }}"
              </p>
              <p class="author">
                {{ $post_quote_author }}
              </p>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-12">
          <div class="post-single__content">

            {{-- @php the_content() @endphp --}}


          </div>
        </div>
      </div>

    </article>
  </div>
</section>
