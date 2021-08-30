import Swiper from 'swiper/swiper-bundle.min.js';

export default class PortfolioImageSlider {
  constructor() {
    if (!document.querySelector('.js-portfolio-image-slider')) return;

    const target = document.querySelectorAll('.js-portfolio-image-slider');

    target.forEach(el => {
			const cols = (el.getAttribute('data-slider-cols')) ? el.getAttribute('data-slider-cols') : 2;

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
					992: {
						spaceBetween: 80,
						slidesPerView: cols,
					},
					768: {
						spaceBetween: 80,
						slidesPerView: ((cols >= 2) ? 2 : 1),
					},
				},
			});

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
    });
  }
}
