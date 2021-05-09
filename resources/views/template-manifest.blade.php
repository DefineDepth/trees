{{--
  Template Name: Manifest Template
--}}

@extends('layouts.app')

@section('content')


<section class="post-single__section">
  <article @php post_class('post-single__article') @endphp>
    <div class="container -fluid -p-left -p-right container-md">
      <div class="row post-single-header">
        <div class="col-xl-7 col-lg-6">
          <div class="post-single-header__left">
            <p class="post-single-header__category">
              NEW PERSPECTIVE
            </p>

            <h1 class="post-single-header__title">
              The Trees Manifesto
            </h1>
            
            <div class="post-single-header__content">
              <p>Our industry is broken; disconnected salesmen, mediocre work, penny chasers, and $5 logos. To us dedicated design contributors, it’s embarrassing. This is our attempt to right the ship.</p>
              <p>At Trees, we are a creative team, hyper focused on crafting movements and disruption in the business landscape. We shape brand identities, outside perception, campaigns, and solutions for innovative products for our partners. Storytelling is what we do best, it crafts human experiences, and builds brands that demand attention. Pull up a chair.</p>
              <p>We’re small but mighty, and big fans of values. They say a lot about who you are, and these are ours. They mean a lot to us, and they are the bedrock to why we retain great people – clients, team members, and partners. Is passion a two way street? It should be.</p>
            </div>
          </div>
        </div>

        <div class="col-xl-5 col-lg-6">
          <div class="post-single-header__right">
            <div class="post-single-header__image">
              <img src="@asset('images/grid-cell.jpg')" alt="post image">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="post-single-content">
      @php the_content() @endphp

      <div class="content-bottom">
        <div class="container -fluid -p-left -p-right container-md">
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


<section class="about-page-cta__section bg-black">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-5">
        <h2 class="about-page-cta__title">
          {{-- {!! $cta_title !!} --}}
          This defines us. What you do next defines you.
        </h2>
      </div>

      <div class="col-auto offset-lg-1">
        <div class="about-page-cta__button">
          {{-- <a href="{{ $cta_button_link['url'] }}">{{ $cta_button_link['title'] }}</a> --}}
          <a href="{{ $cta_button_link['url'] }}">HIT US UP</a>
        </div>
      </div>
    </div>
  </div>
</section>


@include('sections.related-posts')
@include('sections.instagram')

@endsection
