<nav class="nav js-nav">
  <div class="nav__inner js-nav-inner">
    <div class="nav__bg js-nav-bg">
      <div class="nav__bg__left js-nav-bg-left"></div>
      <div class="nav__bg__right js-nav-bg-right"></div>
      <div class="nav__bg__colors js-nav-bg-colors">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div class="nav__container">
      <div class="nav__header js-nav-header">
        <div class="nav__header__buttons">
          <button type="button" class="nav-btn-close js-menu-close pointer-events-none">
            <i class="icon" data-feather="x"></i>
          </button>
  
          <button type="button" class="nav-form-close js-contact-close pointer-events-none">
            <i class="icon" data-feather="x"></i>
          </button>
        </div>
        
        <div class="nav-logo">
          <img src="@asset('images/logo-light.svg')">
        </div>
      </div>

      <div class="nav__content">
        <div class="nav__content__left">
          <div class="navList__wrap">
            <ul class="navList js-navList pointer-events-none {{ $nav_link_active }}">
              <li>
                <a class="insight-link" data-barba href="{{ $insight_link }}">Insight</a>
              </li>

              <li>
                <a class="services-link" data-barba href="{{ $services_link }}">What We Do</a>
              </li>

              <li>
                <a class="about-link" data-barba href="{{ $about_link }}">Who We Are</a>
              </li>

              <li>
                <a class="portfolio-link" data-barba href="{{ $portfolio_link }}">Case Studies</a>
              </li>

              <li>
                <a class="js-contact-open" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="nav-form js-nav-form pointer-events-none">
          <div class="nav-form__content js-form-content">
            <div class="nav-form__bg js-form-bg"></div>

            <div class="nav-form__header js-form-header">
              <h3 class="nav-form__title">Say hello to the Trees Digital team</h3>
              <a href="#" class="nav-form__link">hello@treesdigital.com</a>
            </div>

            <div class="nav-form__form js-form-form">
              @php echo do_shortcode('[ninja_form id=1]'); @endphp
            </div>
          </div>
        </div>

        <div class="nav__content__right">
          <div class="nav__content__right__mobile__bg js-nav-bg-right-mobile"></div>

          <div class="nav__info">
            <div class="nav__info__item js-navInfo-item">
              <h5 class="text-sm tracking-none fw-500">
                Email
              </h5>

              <div class="nav__info__content text-lg text-white mt-16">
                <a href="#">hello@treesdigital.com</a>
              </div>
            </div>

            <div class="nav__info__item js-navInfo-item">
              <div class="nav-social">
                <div class="nav-social__item">
                  <a href="#">Facebook</a>
                </div>
                <div class="nav-social__item">
                  <a href="#">Instagram</a>
                </div>
              </div>
            </div>

            <div class="nav__info__item js-navInfo-item">
              <div class="nav-copyright">
                <span class="icon" data-feather="heart"></span>
                <p>Made with love in Washington State</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>