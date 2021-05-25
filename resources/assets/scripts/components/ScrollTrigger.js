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


    let proxy = { skew: 0 }
    let skewSetter = gsap.quickSetter(wrap, "skewY", "deg")
    let clamp = gsap.utils.clamp(-10, 10)

    ScrollTrigger.create({
      onUpdate: (self) => {
        let skew = clamp(self.getVelocity() / -600);
        // only do something if the skew is MORE severe. Remember, we're always tweening back to 0, so if the user slows their scrolling quickly, it's more natural to just let the tween handle that smoothly rather than jumping to the smaller skew.
        if (Math.abs(skew) > Math.abs(proxy.skew)) {
          proxy.skew = skew;
          gsap.to(proxy, {skew: 0, duration: 0.4, ease: "power3", overwrite: true, onUpdate: () => skewSetter(proxy.skew)});
        }
      },
    });

    // make the right edge "stick" to the scroll bar. force3D: true improves performance
    gsap.set(wrap, {transformOrigin: "right center", force3D: true});



    gsap.set(image, {
      scale: 1.2,
    })

    gsap.to(image, {
      xPercent: 20,
      ease: "none",
      scrollTrigger: {
        trigger: wrap,
        // start: "top bottom", // the default values
        // end: "bottom top",
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
