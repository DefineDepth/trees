import { jarallax } from 'jarallax';

export default class Parallax {
  constructor() {
    if (!document.querySelector('[data-parallax]')) return;

    console.log('Parallax init');

    const target = document.querySelectorAll('[data-parallax]');

    target.forEach(el => {
      const value = el.getAttribute('data-parallax');

      jarallax(el, {
        speed: value,
        imgElement: '[data-parallax-target]',
      });
    });
  }
}
