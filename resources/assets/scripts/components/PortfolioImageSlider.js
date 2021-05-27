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

      const counter = el.querySelector('.js-slider-pagination-count');
      const total = el.querySelector('.swiper-pagination-total');
      const numOfSlides = this.sliderInstance.slides.length
      const prefixTotal = numOfSlides >= 10 ? '0' : '00';
      total.innerHTML = prefixTotal + numOfSlides;

      this.sliderInstance.on('slideChangeTransitionEnd', function () {
        const realIndex = this.activeIndex + 1;
        const prefixTotal = realIndex >= 10 ? '0' : '00';
        counter.innerHTML = prefixTotal + realIndex;
      });


      // renderSliderCounter(
      //   this.sliderInstance,
      //   el.querySelector('.js-slider-pagination'),
      //   'test-slide-class',
      //   'js-slider-pagination-total'
      // );


      // function renderSliderCounter(sliderMain, sliderCounter, slideClass, elTotal) {
      //   if (!sliderMain.slides.length) return;
    
      //   let numOfSlides = sliderMain.slides.length;
      //   let startSlides = 1;
      //   let prefixCurrent = '00';
      //   let prefixTotal = numOfSlides >= 10 ? '0' : '00';
    
      //   const counter = new Swiper(sliderCounter, {
      //     direction: 'vertical',
      //     simulateTouch: false,
      //   });
    
      //   counter.removeAllSlides();
    
      //   for (let i = startSlides; i <= numOfSlides; i++) {
      //     if (i >= 10) {
      //       prefixCurrent = '0';
      //     }
    
      //     counter.appendSlide('<div class="swiper-slide"><div class="' + slideClass + '">' + prefixCurrent + i + '</div></div>');
      //   }
    
      //   $(elTotal).html(prefixTotal + numOfSlides);
      //   sliderMain.controller.control = counter;
      //   counter.controller.control = sliderMain;
      // }
    });
  }
}
