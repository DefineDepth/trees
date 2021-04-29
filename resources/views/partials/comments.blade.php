@php
if (post_password_required()) {
  return;
}
@endphp

<div id="comments" class="post-single-comments">
  @if (have_comments())
    <ul class="comment-list">
      {!! wp_list_comments(
        array(
          'style'       => 'ul',
          'short_ping'  => true,
          'walker'      => new Trees_Walker_Comment(),
        )
      ); !!}
    </ul>

    @if (get_comment_pages_count() > 1 && get_option('page_comments'))
      <nav>
        <ul class="pager">
          @if (get_previous_comments_link())
            <li class="previous">@php previous_comments_link(__('&larr; Older comments', 'sage')) @endphp</li>
          @endif
          @if (get_next_comments_link())
            <li class="next">@php next_comments_link(__('Newer comments &rarr;', 'sage')) @endphp</li>
          @endif
        </ul>
      </nav>
    @endif
  @endif

  @if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
    <div class="alert alert-warning">
      {{ __('Comments are closed.', 'sage') }}
    </div>
  @endif
  
  <div class="row">
    <div class="col-12">
      <div class="reply-form">
        @php comment_form([
          'comment_field' =>
            '
            <p class="comment-form-comment">
              <label for="comment">Comment</label>
              <textarea
                id="comment"
                name="comment"
                placeholder="' . _x( 'Comment', 'noun', 'trees' ) . '"
                rows="3"
                maxlength="65525"
                required="required"
              ></textarea>
            </p>
            '
          ,
        ]) @endphp
      </div>
    </div>
  </div>
</div>
