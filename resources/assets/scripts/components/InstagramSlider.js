import Swiper from 'swiper/bundle';

export default class InstagramSlider {
  constructor() {
    console.log('InstagramSlider init');

    this.selector = '.swiper.swiper-container.-instagramSlider';

    if (!document.querySelector(this.selector)) return;
    
    this.params = {
      spaceBetween: 10,
      slidesPerView: 1,
      autoHeight: true,
      breakpoints: {
        992: {
          spaceBetween: 20,
          slidesPerView: 3,
        },
        768: {
          spaceBetween: 10,
          slidesPerView: 2,
        },
      },
      // ...params,
    };

    this.sliderInstance = new Swiper(this.selector, this.params);
    
    return this.sliderInstance;
  }
}
