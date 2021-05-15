<section class="portfolio-page-header">
  <div data-parallax="0.6" class="portfolio-page-header__image">
    <img data-parallax-target src="@asset('images/pr-1/main/main.png')" alt="Project header image">
  </div>

  <div class="portfolio-page-header__container">
    <div class="row">
      <div class="col-12">
        <h1 class="portfolio-page-header__title">
          Pebblebee
        </h1>
        <div class="portfolio-page-header__line"></div>
      </div>
    </div>

    <div class="row portfolio-page-header__row">
      @for ($i = 0; $i < 3; $i++)
        <div class="col-auto">
          <div class="portfolio-page-header__info">
            <h4 class="title">Creative Director</h4>
            <p class="text">Phil Padilla</p>
          </div>
        </div>
      @endfor
    </div>
  </div>
</section>


<section class="portfolio-page-content">
  <div class="post-single-content">

    @php the_content() @endphp

  </div>
</section>
