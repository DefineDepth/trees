import gsap from '../vendors/gsap.min.js'
import ScrollTrigger from '../util/ScrollTrigger'

gsap.registerPlugin(ScrollTrigger);

export default class ScrollTr {
  constructor() {
    if (!document.querySelector('.js-image-move')) return;

    console.log('ScrollTr init');

    const wrap = document.querySelector('.js-image-move');
    const lines = wrap.querySelector('.-lines');
    const circle = wrap.querySelector('.-circle');
    const colors = wrap.querySelector('.-colors');
    const image = wrap.querySelector('.-img');

    gsap.set(image, {
      scale: 1.2,
    })

    gsap.to(image, {
      xPercent: 20,
      ease: "none",
      scrollTrigger: {
        trigger: wrap,
        scrub: true,
      },
    }, "+=1200");

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
