

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
                <a class="js-nav-menu-form-open" href="#">Contact</a>
              </li>
            </ul>
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

    
    <div class="nav-form pointer-events-none js-nav-menu-form">
      <div class="nav-form__content js-form-content">
        <div class="nav-form__bg js-form-bg"></div>

        <div class="nav-form__close">
          <button type="button" class="nav-form-close pointer-events-none js-nav-menu-form-close">
            <i class="icon" data-feather="x"></i>
          </button>
        </div>

        <div class="nav-form__header js-form-header">
          <h3 class="nav-form__title">Say hello to the Trees Digital team</h3>
          <a href="#" class="nav-form__link">hello@treesdigital.com</a>
        </div>

        <div class="nav-form__form js-form-form">
          {{-- @php echo do_shortcode('[ninja_form id=1]'); @endphp --}}

          <div class="nav-form__form js-form-form" style="opacity: 1; transform: translate(0px, 0px);">
            <div id="nf-form-1-cont" class="nf-form-cont" aria-live="polite" aria-labelledby="nf-form-title-1" aria-describedby="nf-form-errors-1" role="form">
              <span id="nf-form-title-1" class="nf-form-title"></span>
              <div class="nf-form-wrap ninja-forms-form-wrap">
                <div class="nf-response-msg"></div>
                <div class="nf-debug-msg"></div>
                <div class="nf-before-form">
                  <nf-section> </nf-section>
                </div>
                <div class="nf-form-layout">
                  <form>
                    <div>
                      <div class="nf-before-form-content">
                        <nf-section>
                          <div class="nf-form-fields-required">Fields marked with an <span class="ninja-forms-req-symbol">*</span>
                            are required</div>
          
                        </nf-section>
                      </div>
                      <div class="nf-form-content ">
                        <nf-fields-wrap>
                          <nf-field>
                            <div id="nf-field-6-container" class="nf-field-container listradio-container  label-above  list-container">
                              <div class="nf-before-field">
                                <nf-section>
          
                                </nf-section>
                              </div>

                              <div class="nf-field">
                                <div id="nf-field-6-wrap" class="field-wrap listradio-wrap list-wrap list-radio-wrap" data-field-id="6">

                                  <div class="nf-field-label">
                                    <label for="nf-field-6" id="nf-label-field-6" class="">
                                      Brand Packages <span class="ninja-forms-req-symbol">*</span>
                                    </label>
                                  </div>
          
                                  <div class="nf-field-element">
                                    <ul aria-describedby="nf-error-6">
                                      <li>
                                        <input type="radio" id="nf-field-6-0" name="nf-field-6" class="ninja-forms-field nf-element nf-checked" value="logo-package" checked="checked" aria-labelledby="nf-label-class-field-6-0" required="">
                                        <label for="nf-field-6-0" id="nf-label-class-field-6-0" class="nf-checked-label">
                                          Logo Package
                                        </label>
                                      </li>
          
                                      <li>
                                        <input type="radio" id="nf-field-6-1" name="nf-field-6" class="ninja-forms-field nf-element " value="standard-package" aria-labelledby="nf-label-class-field-6-1" required="">
                                        <label for="nf-field-6-1" id="nf-label-class-field-6-1" class="">
                                          Standard Package
                                        </label>
                                      </li>
          
                                      <li>
                                        <input type="radio" id="nf-field-6-2" name="nf-field-6" class="ninja-forms-field nf-element " value="custom-identity-package" aria-labelledby="nf-label-class-field-6-2" required="">
                                        <label for="nf-field-6-2" id="nf-label-class-field-6-2" class="">
                                          Custom Identity Package
                                        </label>
                                      </li>
                                    </ul>
                                  </div>
          
                                </div>
                              </div>

                              <div class="nf-after-field">
                                <nf-section>
          
                                  <div class="nf-input-limit"></div>
          
                                  <div id="nf-error-6" class="nf-error-wrap nf-error" role="alert"></div>
          
          
                                </nf-section>
                              </div>
                            </div>
                          </nf-field>
                          <nf-field>
                            <div id="nf-field-1-container" class="nf-field-container textbox-container  label-above ">
                              <div class="nf-before-field">
                                <nf-section>
          
                                </nf-section>
                              </div>
                              <div class="nf-field">
                                <div id="nf-field-1-wrap" class="field-wrap textbox-wrap" data-field-id="1">
          
          
          
                                  <div class="nf-field-label"><label for="nf-field-1" id="nf-label-field-1" class="">Hello, my
                                      name is <span class="ninja-forms-req-symbol">*</span> </label></div>
          
          
                                  <div class="nf-field-element">
                                    <input type="text" value="" class="ninja-forms-field nf-element"
                                      placeholder="Enter your name here" id="nf-field-1" name="nf-field-1" aria-invalid="false"
                                      aria-describedby="nf-error-1" aria-labelledby="nf-label-field-1" required="">
                                  </div>
          
          
                                </div>
                              </div>
                              <div class="nf-after-field">
                                <nf-section>
          
                                  <div class="nf-input-limit"></div>
          
                                  <div id="nf-error-1" class="nf-error-wrap nf-error" role="alert"></div>
          
          
                                </nf-section>
                              </div>
                            </div>
                          </nf-field>
                          <nf-field>
                            <div id="nf-field-2-container" class="nf-field-container email-container  label-above ">
                              <div class="nf-before-field">
                                <nf-section>
          
                                </nf-section>
                              </div>
                              <div class="nf-field">
                                <div id="nf-field-2-wrap" class="field-wrap email-wrap" data-field-id="2">
          
          
          
                                  <div class="nf-field-label"><label for="nf-field-2" id="nf-label-field-2" class="">Here is my
                                      email <span class="ninja-forms-req-symbol">*</span> </label></div>
          
          
                                  <div class="nf-field-element">
                                    <input type="email" value="" class="ninja-forms-field nf-element" id="nf-field-2" name="email"
                                      autocomplete="email" placeholder="Enter your email here" aria-invalid="false"
                                      aria-describedby="nf-error-2" aria-labelledby="nf-label-field-2" required="">
                                  </div>
          
          
                                </div>
                              </div>
                              <div class="nf-after-field">
                                <nf-section>
          
                                  <div class="nf-input-limit"></div>
          
                                  <div id="nf-error-2" class="nf-error-wrap nf-error" role="alert"></div>
          
          
                                </nf-section>
                              </div>
                            </div>
                          </nf-field>
                          <nf-field>
                            <div id="nf-field-3-container" class="nf-field-container textarea-container  label-above ">
                              <div class="nf-before-field">
                                <nf-section>
          
                                </nf-section>
                              </div>
                              <div class="nf-field">
                                <div id="nf-field-3-wrap" class="field-wrap textarea-wrap" data-field-id="3">
          
          
          
                                  <div class="nf-field-label"><label for="nf-field-3" id="nf-label-field-3" class="">Let’s talk
                                      design <span class="ninja-forms-req-symbol">*</span> </label></div>
          
          
                                  <div class="nf-field-element">
                                    <textarea id="nf-field-3" name="nf-field-3" aria-invalid="false" aria-describedby="nf-error-3"
                                      class="ninja-forms-field nf-element" placeholder="Enter your details here"
                                      aria-labelledby="nf-label-field-3" required=""></textarea>
                                  </div>
          
          
                                </div>
                              </div>
                              <div class="nf-after-field">
                                <nf-section>
          
                                  <div class="nf-input-limit"></div>
          
                                  <div id="nf-error-3" class="nf-error-wrap nf-error" role="alert"></div>
          
          
                                </nf-section>
                              </div>
                            </div>
                          </nf-field>
                          <nf-field>
                            <div id="nf-field-4-container"
                              class="nf-field-container submit-container  label-above  textbox-container">
                              <div class="nf-before-field">
                                <nf-section>
          
                                </nf-section>
                              </div>
                              <div class="nf-field">
                                <div id="nf-field-4-wrap" class="field-wrap submit-wrap textbox-wrap" data-field-id="4">
                                  <div class="nf-field-label"></div>
                                  <div class="nf-field-element">
                                    <input id="nf-field-4" class="ninja-forms-field nf-element " type="button" value="Send">
                                  </div>
                                  <div class="nf-error-wrap"></div>
                                </div>
                              </div>
                              <div class="nf-after-field">
                                <nf-section>
          
                                  <div class="nf-input-limit"></div>
          
                                  <div id="nf-error-4" class="nf-error-wrap nf-error" role="alert"></div>
          
          
                                </nf-section>
                              </div>
                            </div>
                          </nf-field>
                        </nf-fields-wrap>
                      </div>
                      <div class="nf-after-form-content">
                        <nf-section>
          
                          <div id="nf-form-errors-1" class="nf-form-errors" role="alert">
                            <nf-errors></nf-errors>
                          </div>
                          <div class="nf-form-hp">
                            <nf-section>
                              <label for="nf-field-hp-1" aria-hidden="true">
                                If you are a human seeing this field, please leave it empty.
                                <input id="nf-field-hp-1" name="nf-field-hp" class="nf-element nf-field-hp" type="text" value="">
                              </label>
                            </nf-section>
                          </div>
                        </nf-section>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="nf-after-form">
                  <nf-section>
          
                  </nf-section>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</nav>