import gsap from '../vendors/gsap.min.js'
import ScrollTrigger from '../util/ScrollTrigger'

gsap.registerPlugin(ScrollTrigger);

export default class ScrollTr {
  constructor() {
    // if (!document.querySelector('[data-parallax]')) return;

    console.log('ScrollTr init');

    const wrap = document.querySelector('.js-image-move');
    const lines = wrap.querySelector('.-lines');
    const circle = wrap.querySelector('.-circle');
    const colors = wrap.querySelector('.-colors');
    const image = wrap.querySelector('.-img');

    gsap.to(image, {
      xPercent: 20,
      ease: "none",
      scrollTrigger: {
        trigger: wrap,
        // start: "top bottom", // the default values
        // end: "bottom top",
        scrub: true,
      },
    });

    gsap.to(lines, {
      yPercent: 50,
      ease: "none",
      scrollTrigger: {
        trigger: wrap,
        scrub: true,
      },
    });

    gsap.to(circle, {
      rotation: "360",
      ease: "none",
      duration: 14,
      repeat: -1,
    });
    
  }
}
