import gsap from '../vendors/gsap.min.js'

export default class FrontPageText {
  constructor() {
    console.log('FrontPageText init');

    if (!document.querySelector('.headline')) return;

    const headline = document.querySelector('.headline');
    const container = document.querySelector('.headline__container');
    const items = document.querySelectorAll('.headline__container span');

    setInterval(() => {
      let active;
      let next;
      
      for (let i = 0; i < items.length; i++) {
        if (items[i].classList.contains('is-visible')) {
          active = items[i];
          if (items[i + 1]) {
            next = items[i + 1];
          } else {
            next = items[0];
          }
        }
      }

      gsap.timeline()
      .fromTo(active, {
        y: '0%',
      }, {
        ease: 'power3.out',
        duration: 0.8,
        y: '-100%',
      })
      .fromTo(next, {
        y: '100%',
      }, {
        ease: 'power3.out',
        duration: 0.8,
        y: '0%',
        onStart: () => {
          active.classList.remove('is-visible');
          next.classList.add('is-visible');
        },
      }, '<')
    }, 2000);
  }
}

