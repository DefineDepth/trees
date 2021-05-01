// import Swiper from 'swiper/bundle';
import Swiper from 'swiper/swiper-bundle.min.js';

export default class PortfolioImageSlider {
  constructor() {
    console.log('PortfolioImageSlider init');

    if (!document.querySelector('.js-portfolio-image-slider')) return;

    const target = document.querySelectorAll('.js-portfolio-image-slider');

    target.forEach(el => {
      if (el.classList.contains('js-slider-col-1')) {
        this.sliderInstance = new Swiper(el, {
          spaceBetween: 30,
          slidesPerView: 1,
          centeredSlides: true,
          autoHeight: true,
          pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
          },
          breakpoints: {
            768: {
              spaceBetween: 80,
              slidesPerView: 2,
            },
          },
        });
      }

      if (el.classList.contains('js-slider-col-4')) {
        this.sliderInstance = new Swiper(el, {
          spaceBetween: 30,
          slidesPerView: 1,
          centeredSlides: true,
          autoHeight: true,
          pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
          },
          breakpoints: {
            768: {
              spaceBetween: 80,
              slidesPerView: 4,
            },
          },
        });
      }

      // const counter = el.querySelector('.swiper-pagination-counter');
      const total = el.querySelector('.swiper-pagination-total');
      const numOfSlides = this.sliderInstance.slides.length
      const prefixTotal = numOfSlides >= 10 ? '0' : '00';
      total.innerHTML = prefixTotal + numOfSlides
    });
  }
}
