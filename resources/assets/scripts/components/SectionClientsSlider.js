import Swiper from 'swiper/bundle';

export default class SectionClientsSlider {
  constructor() {
    console.log('SectionClientsSlider init');

    this.selector = '.swiper.swiper-container.-section.js-clients';

    if (!document.querySelector(this.selector)) return;
    
    this.params = {
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
      // ...params,
    };

    this.sliderInstance = new Swiper(this.selector, this.params);
    this.sliderInstance.destroyed = true;

    if (document.querySelector('html').offsetWidth < 992) {
      console.log('inited');
      this.sliderInstance.init();
      this.sliderInstance.destroyed = false;
    }

    window.addEventListener('resize', () => {
      if (document.querySelector('html').offsetWidth < 992) {

        if (this.sliderInstance.destroyed === true) {
          this.sliderInstance = new Swiper(this.selector, this.params);
          this.sliderInstance.init();
          this.sliderInstance.destroyed = false;
        }

      } else {

        if (this.sliderInstance.destroyed === false) {
          this.sliderInstance.destroy(false, true);
          this.sliderInstance.destroyed = true;
        }

      }
    });
    
    return this.sliderInstance;
  }
}
