import gsap from '../vendors/gsap.min.js'
import ScrollTrigger from '../util/ScrollTrigger'

gsap.registerPlugin(ScrollTrigger);

export default class ScrollTr {
  constructor() {
    if (!document.querySelector('.js-image-move')) return;

    console.log('ScrollTr init');

    const targets = document.querySelectorAll('.js-image-move');
    
    targets.forEach(el => {
      const lines = el.querySelector('.-lines');
      const circle = el.querySelector('.-circle');
      const colors = el.querySelector('.-colors');
      const image = el.querySelector('.-img');
      let imageDirection;

      if (el.classList.contains('js-image-left')) {
        imageDirection = 20;
      } else {
        imageDirection = -20;
      }

      gsap.set(image, {
        scale: 1.2,
      })

      gsap.to(image, {
        xPercent: imageDirection,
        ease: "none",
        scrollTrigger: {
          trigger: el,
          scrub: true,
        },
      }, "+=1200");

      gsap.to(lines, {
        yPercent: 50,
        ease: "none",
        scrollTrigger: {
          trigger: el,
          scrub: true,
        },
      });

      if (circle) {
        gsap.to(circle, {
          rotation: "360",
          ease: "none",
          duration: 14,
          repeat: -1,
        });
      }
    });
  }
}
