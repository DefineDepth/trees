<section class="posts-page__section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <article @php post_class('posts-page__article') @endphp>
          <div class="posts-page__header">
            <p class="posts-page__category">
              {{ get_the_category($post)[0]->name }}
            </p>

            <h1 class="posts-page__title">
              {!! get_the_title() !!}
            </h1>

            <p class="posts-page__excerpt">
              {!! get_the_excerpt() !!}
            </p>

            {{-- <p class="posts-page__excerpt">
              {{ $post_quote }}
            </p> --}}
            
            {{-- @include('partials/entry-meta') --}}
          </div>
        
          <div class="posts-page__content">
            {!! $post_header_content !!}
          </div>
          
          <div class="posts-page__content">
            @php the_content() @endphp
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
