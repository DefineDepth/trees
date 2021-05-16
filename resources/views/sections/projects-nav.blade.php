<section class="projects-nav">
  <div class="projects-nav__bg__wrap">
    <div class="row projects-nav__row">

      <div class="col-lg-6">
        <a href="{{ get_permalink( $prev_project->ID ) }}" class="projects-nav__content -prev">
          <div class="projects-nav__bg">
            <img src="{{ get_the_post_thumbnail_url( $prev_project->ID ) }}" alt="Prev project image">
          </div>

          <div class="projects-nav__arrow">
            <i class="icon" data-feather="arrow-left-circle"></i>
          </div>

          <div class="projects-nav__info">
            <div class="projects-nav__subtitle">Prev</div>
            <h3 class="projects-nav__title">{{ get_the_title( $prev_project->ID ) }}</h3>
          </div>
        </a>
      </div>

      <div class="col-lg-6">
        <a href="{{ get_permalink( $next_project->ID ) }}" class="projects-nav__content -next">
          <div class="projects-nav__bg">
            <img src="{{ get_the_post_thumbnail_url( $next_project->ID ) }}" alt="Next project image">
          </div>

          <div class="projects-nav__arrow">
            <i class="icon" data-feather="arrow-right-circle"></i>
          </div>

          <div class="projects-nav__info">
            <div class="projects-nav__subtitle">Next</div>
            <h3 class="projects-nav__title">{{ get_the_title( $next_project->ID ) }}</h3>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>
