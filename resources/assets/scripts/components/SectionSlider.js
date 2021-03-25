import Swiper from 'swiper/bundle';

export default class SectionSlider {
  constructor() {
    console.log('SectionSlider init');

    this.selector = '.swiper.swiper-container.-section';

    if (!document.querySelector(this.selector)) return;
    
    this.params = {
      spaceBetween: 60,
      slidesPerView: 2,
      init: false,
      autoHeight: true,
      breakpoints: {
        768: {
          spaceBetween: 60,
          slidesPerView: 1,
        },
      },
      // ...params,
    };

    this.sliderInstance = new Swiper(this.selector, this.params);
    if (document.querySelector('html').offsetWidth < 992) {
      this.sliderInstance.forEach(el => {
        el.init();
      });
    }

    window.addEventListener('resize', () => {
      if (document.querySelector('html').offsetWidth < 992) {

        if (this.sliderInstance[0].destroyed === true) {
          this.sliderInstance = new Swiper(this.selector, this.params);
          this.sliderInstance.forEach(el => {
            el.init();
            el.destroyed = false;
          });
        }

      } else {

        if (this.sliderInstance[0].destroyed !== true) {
          this.sliderInstance.forEach(el => {
            el.destroy(false, true);
            el.destroyed = true;
          });
        }

      }
    });
    
    return this.sliderInstance;
  }
}
