<section class="post-single__section">
  <article @php post_class('post-single__article') @endphp>
    <div class="post-single-header__mobile-image">
      <img src="{{ $post_image['url'] }}" alt="post image">
    </div>

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
              {!! $post_header_content !!}
            </div>
          </div>
        </div>

        <div class="col-xl-5 col-lg-6">
          <div class="post-single-header__right">
            <div class="post-single-header__image">
              <img src="{{ $post_image['url'] }}" alt="post image">
            </div>

            <div class="post-author -black">
              <div class="post-author__image">
                <img src="@asset('images/author.png')" alt="post author image">
              </div>
              <div class="post-author__content">
                <h4 class="post-author__name">Phillip Padilla</h4>
                <p class="post-author__position">Trees Digital <span>\</span> Chief Creative</p>
              </div>
              <div class="post-author__socials">
                <div class="item">
                  <i class="icon"></i>
                </div>
                <div class="item">
                  <i class="icon"></i>
                </div>
              </div>
            </div>

            @if ( $post_quote )
              <div class="post-quote -black">
                <p class="quote">
                  "{{ $post_quote }}"
                </p>
                <p class="author">
                  {{ $post_quote_author }}
                </p>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>


    <div class="post-single-content">
      @php the_content() @endphp

      <div class="">
        <div class="container -fluid -p-left container-md">
          <div class="row">
            <div class="col-auto">
              <div class="post-author -grey">
                <div class="post-author__image">
                  <img src="@asset('images/author.png')" alt="post author image">
                </div>
                <div class="post-author__content">
                  <h4 class="post-author__name">Phillip Padilla</h4>
                  <p class="post-author__position">Trees Digital <span>\</span> Chief Creative</p>
                </div>
                <div class="post-author__socials">
                  <div class="item">
                    <i class="icon"></i>
                  </div>
                  <div class="item">
                    <i class="icon"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="post-single-comments">

              @php
                $commenter = wp_get_current_commenter();
                $req = get_option( 'require_name_email' );
                $aria_req = ( $req ? " aria-required='true'" : '' );

                comment_form([
                  'fields' => [
                    'author' => '
                      <div class="form-group col-12">' .
                        '<input id="author" name="author" placeholder="' . esc_html__( 'Name', 'canetis' ) . ( $req ? '*' : '' ) . '" ' .
                        'type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req .' />
                      </div>
                    ',
                    
                    'email' => '
                      <div class="form-group col-md-6">' .
                        '<input id="email" name="email" placeholder="' . esc_html__( 'Email', 'canetis' ) . ( $req ? '*' : '' ) . '" ' .
                        'type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req .' />
                      </div>
                    ',

                    'url' => '
                      <div class="form-group col-md-6">' .
                        '<input id="url" name="website" placeholder="' . esc_html__( 'Website', 'canetis' ) . ( $req ? '*' : '' ) . '" ' .
                        'type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . $aria_req .' />
                      </div>
                    ',

                    'cookies' => '
                      <div class="form-checkbox col-12">
                        <label for="wp-comment-cookies-consent">
                          <span class="checkbox-wrap">
                            <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"/>
                            <span></span>
                          </span>'
                          . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'canetis' ) .
                        '</label>
                      </div>
                    ',
                  ],
                  'comment_field' =>
                    '<div class="form-group col-12">
                      <textarea id="comment" name="comment" placeholder="' . _x( 'Comment', 'noun', 'canetis' ) . '" cols="45" rows="6" aria-required="true"></textarea>
                    </div>'
                  ,
                  'class_form' => 'comment-form row',
                  'comment_notes_before' => '<div class="comment-notes col-12">' . esc_html__( 'Your email address will not be published.', 'canetis' ) . '</div>',
                  'submit_field' => '<div class="col-12">%1$s %2$s</div>',
                  'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="btn btn-outline-white text-white %3$s">%4$s</button>',
                  /* translators: %1$s is replaced with "string", %2$s is replaced with "string", %3$s is replaced with "string" */
                  'logged_in_as' => '<div class="logged-in-as col-12">' . sprintf( __( '<a href="%1$s">Logged in as %2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'canetis' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</div>',
                ]);
              @endphp

            </div>
          </div>
        </div>
      </div>
    </div>


  </article>
</section>
