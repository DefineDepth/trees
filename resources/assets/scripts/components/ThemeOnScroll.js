// import APP from '../util/global';
// import ScrollMagic from 'scrollmagic'
import gsap from '../vendors/gsap.min.js'
import ScrollTrigger from '../vendors/ScrollTrigger.min.js'

export default class ThemeOnScroll {
  constructor() {
    console.log('ThemeOnScroll init');

    const darkContainer = document.querySelectorAll('.js-theme-dark');
    // console.log(darkContainer);

    darkContainer.forEach(el => {
      gsap.timeline({
        scrollTrigger: {
          trigger: el,
          scrub: 1,

          onEnter: () => {
            console.log("onEnter");
            document.querySelector('.body-theme').classList.add('dark-theme');
          },
          onEnterBack: () => {
            console.log("onEnter");
            document.querySelector('.body-theme').classList.add('dark-theme');
          },
          onLeave: () => {
            console.log("onLeave");
            document.querySelector('.body-theme').classList.remove('dark-theme');
          },
          onLeaveBack: () => {
            console.log("onLeave");
            document.querySelector('.body-theme').classList.remove('dark-theme');
          },
          start: "top center",
          end: "bottom center",
        },
      });
    });
  }
}

