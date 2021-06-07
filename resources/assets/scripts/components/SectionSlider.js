import Swiper from 'swiper/bundle';

export default class SectionSlider {
  constructor() {
    if (!document.querySelector('.js-section-slider')) return;
    console.log('SectionSlider init');

    const targets = document.querySelectorAll('.js-section-slider');

    targets.forEach(el => {
      this.sliderInstanceInit(el);
    });
  }

  sliderInstanceInit(selector) {
    const sliderSelector = selector;
    
    let params = {
      spaceBetween: 40,
      slidesPerView: 1,
      init: false,
      autoHeight: true,
      breakpoints: {
        768: {
          spaceBetween: 40,
          slidesPerView: 2,
        },
      },
      pagination: {
        el: selector.querySelector('.swiper-pagination'),
        type: 'bullets',
      },
      // ...params,
    };

    let sliderInstance = new Swiper(sliderSelector, params);
    sliderInstance.destroyed = true;

    if (document.querySelector('html').offsetWidth < 992) {
      sliderInstance.init();
      sliderInstance.destroyed = false;
    }

    window.addEventListener('resize', () => {
      if (document.querySelector('html').offsetWidth < 992) {

        if (sliderInstance.destroyed === true) {
          sliderInstance = new Swiper(sliderSelector, params);
          sliderInstance.init();
          sliderInstance.destroyed = false;
        }

      } else {

        if (sliderInstance.destroyed === false) {
          sliderInstance.destroy(false, true);
          sliderInstance.destroyed = true;
        }

      }
    });
    
    return sliderInstance;
  }
}
