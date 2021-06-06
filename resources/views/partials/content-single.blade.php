<section class="post-single__section">
  @if ( $post_header_content['post_lines'] )
    <div class="post-single-header__lines">
      <span></span>
      <span></span>
      <span></span>
    </div>
  @endif
  
  <article @php post_class('post-single__article') @endphp>
    <div class="container -fluid -p-left -p-right container-md">
      <div class="row post-single-header">
        <div class="col-xl-7 col-lg-6">
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
              {!! $post_header_content['content'] !!}
            </div>
          </div>
        </div>

        <div class="col-xl-5 col-lg-6">
          <div class="post-single-header__right">
            <div class="post-single-header__image">
              <img src="{{ $post_header_content['image']['url'] }}" alt="post image">
            </div>

            <div class="post-author {{ $post_header_content['header_style'] }}">
              <div class="post-author__image">
                <img src="@asset('images/author.png')" alt="post author image">
              </div>
              <div class="post-author__content">
                <h4 class="post-author__name">Phillip Padilla</h4>
                <p class="post-author__position">Trees Digital <span>\</span> Chief Creative</p>
              </div>
              <div class="post-author__socials">
                <a href="#" class="item">
                  <i class="icon fab fa-pinterest-p"></i>
                </a>
                <a href="#" class="item">
                  <i class="icon fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>

            @if ( $post_header_content['quote'] )
              <div class="post-quote {{ $post_header_content['header_style'] }}">
                <p class="quote">
                  "{!! $post_header_content['quote'] !!}"
                </p>
                <p class="author">
                  {!! $post_header_content['quote_author'] !!}
                </p>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>


    <div class="post-single-content">
      @php the_content() @endphp

      <div class="content-bottom">
        <div class="container -fluid {{ $post_header_content['comments_container'] }} container-md">
          <div class="row justify-content-{{ $post_header_content['comments_align'] }}">
            <div class="col-xl-{{ $post_header_content['comments_column'] }}">
              <div class="row">
                <div class="col-md-auto col-12">
                  <div class="post-author -grey -post-bottom">
                    <div class="post-author__image">
                      <img src="@asset('images/author.png')" alt="post author image">
                    </div>
                    <div class="post-author__content">
                      <h4 class="post-author__name">Phillip Padilla</h4>
                      <p class="post-author__position">Trees Digital <span>\</span> Chief Creative</p>
                    </div>
                    <div class="post-author__socials">
                      <a href="#" class="item">
                        <i class="icon fab fa-pinterest-p"></i>
                      </a>
                      <a href="#" class="item">
                        <i class="icon fab fa-linkedin-in"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="post-single-comments">
                    @php comments_template('/partials/comments.blade.php') @endphp
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>
