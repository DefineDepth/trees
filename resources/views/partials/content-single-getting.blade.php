<section class="post-single__section">
  <article @php post_class('post-single__article') @endphp>
    <div class="container">
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

            <div class="post-author -black">
              <img src="@asset('images/author.png')" alt="post author image">
              <div class="post-author__content">
                <h4 class="post-author__name">Phillip Padilla</h4>
                <p class="post-author__position">Trees Digital \ Chief Creative</p>
              </div>
              <div class="post-author__socials"></div>
            </div>

            <div class="post-quote">
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
    </div>


    <div class="post-single__content">

      <div class="post-single-block post-single-block__img-text-right">
        <div class="row">
          <div class="image">
            <img src="@asset('images/post-1/1.png')" alt="post author image">
          </div>
          <div class="text-content">
            <h2>From the balcony above</h2>
            <p>The obvious answer is take a vacation, but as leaders this is not always feasible. We man up, and push through. I personally solve it with micro separation. Some of the best work I have ever completed was late into the night, after a day away in the mountains. For a very long time I have been using the term ‘I need to get into the trees’ to describe the desperate need to refresh, be human, and clear my personal creative roadblocks. When you can be human, you can connect with your thoughts. Space, and better yet perspective, is what you need most.</p>
            <p>My family and I live in the Pacific Northwest, where the outdoors whispers your name from the hills. When I do make it out there, my primary focus is separation, to breathe some fresh air, and get a sweat going. It opens my mind, and it feels good to be a person for a little while. I don’t start thinking about work right away, I avoid those thoughts in the parking lot, knowing I’ll circle back once I get to my destination. The way I see it, separation is key to reflection. It is the ability to watch the dance floor from the balcony above, instead of continuously dancing in circles on the dance floor below.</p>
          </div>
        </div>
      </div>

      <div class="post-single-block post-single-block__img-text-left post-pt-180">
        <div class="row">
          <div class="text-content">
            <h2>Identify roadblock enablers</h2>
            <p>For a mental refresh, it’s important to get out of the one-track mind that typically wolly-bops us over the head when consumed by a large project. Particularly when there is a lot of information to process, sometimes slack will not STOP, and it can become a roadblock enabler. Take a break from all of the coffee, and drink plenty of water, (*proven studies show that dehydration magnifies stress. It’s called sipping stress away… and they’re not referring to booze).</p>
          </div>
          <div class="image">
            <img src="@asset('images/post-1/2.png')" alt="post author image">
          </div>
        </div>
      </div>

      <div class="post-single-block post-single-block__img-text-right post-pt-180">
        <div class="row">
          <div class="image">
            <img src="@asset('images/post-1/3.png')" alt="post author image">
          </div>
          <div class="text-content">
            <h2>Visual Mind Mapping</h2>
            <p>I work through designs and user flows in my head, some call it mind mapping. I have a very strong sense of visualization, and it allows me to do my job as I multi-task through my day, or down a trail. It also allows me to approach each project with a well thought out visual strategy. The real goal of ‘getting into the trees’ is returning with a revised game plan. Don’t make the mistake of returning to your desk in the same boat as you left it. Clear your head, gain the separation you need, and revisit the issue with a refreshed, simplistic, higher level perspective. Take this same methodology with you through every weekend, and you’ll hit the ground running on Monday.</p>
          </div>
        </div>
      </div>

      <div class="post-single-block post-single-block__img-text-left post-pt-180">
        <div class="row">
          <div class="text-content">
            <h2>Into the trees</h2>
            <p>Over the years, I have harnessed the ability to ‘get into the trees’ - to micro separate quite well. I can now achieve the desired effects by simply mowing my lawn or doing a little bit of gardening. I have high confidence in my creative process, it has done me very well throughout my career. It has morphed into its own creature of a process, with jaw dropping pace, and is constantly being innovated with tech and creative perspective. This reflection is the key to the dance floor balcony perspective that often holds the higher level solution we seek.</p>
            <p>When I’m not at the desk, you can find me spending time with my family. Or perhaps, out in the trees, searching for client solutions in a refreshing, noise and distraction free environment.</p>
            <p>‘Into the trees’, is where I go to connect and feel human. Some of my best work comes from it. It does wonders for the creative perspective.</p>
            <p>‘Into the trees’. </p>
            <p>Sadly, a price for this domain could not be reached.</p>
            <p>________</p>
            <p><b>What is your ‘into the trees’? What do you do to avoid creative roadblocks?</b></p>
          </div>
          <div class="image">
            <img src="@asset('images/post-1/4.png')" alt="post author image">
          </div>
        </div>
      </div>


      <div class="post-single-block post-single-block__info-left post-pt-100">
        <div class="row">
          <div class="content">
            <div class="post-author col-lg-11 -grey">
              <img src="@asset('images/author.png')" alt="post author image">
              <div class="post-author__content">
                <h4 class="post-author__name">Phillip Padilla</h4>
                <p class="post-author__position">Trees Digital \ Chief Creative</p>
              </div>
              <div class="post-author__socials"></div>
            </div>
          </div>
        </div>
      </div>
      

    </div>

  </article>
</section>
