<header class="headerBar js-headerBar">
  <div class="headerBar__wrapper">
    <div class="headerBar__container">
      <div class="headerBar__menu">
        <button class="headerBar__menu__button js-menu-open">
          <span></span>
          <span></span>
        </button>
      </div>
  
      <div class="headerBar__logo">
        {{-- <img src="@asset('images/logo.png')"> --}}
        <a href="{{ home_url('/') }}" class="headerBar__logo__wrap">
          <img class="logo" src="@asset('images/logo.svg')">
          <img class="logo-light" src="@asset('images/logo-light.svg')">
        </a>
      </div>
    </div>
  </div>

  @include('partials.menu')
</header>
