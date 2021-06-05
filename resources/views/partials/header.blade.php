<header class="headerBar js-headerBar">
  <div class="headerBar__wrapper">
    <div class="container headerBar__container">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <div class="headerBar__menu">
            <button class="headerBar__menu__button js-menu-open">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
    
        <div class="col">
          <div class="headerBar__logo">
            <a data-barba href="{{ home_url('/') }}" class="headerBar__logo__wrap">
              <img class="logo" src="@asset('images/logo-light.svg')">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>


@include('partials.menu')
