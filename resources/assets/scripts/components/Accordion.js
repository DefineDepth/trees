// import { jarallax } from 'jarallax';

export default class Accordion {
  constructor() {
    const target = document.querySelectorAll(".js-accordion");
    if (!target) return;    
    console.log('Accordion init');

    for (let i = 0; i < target.length; i++) {
      const items = target[i].querySelectorAll('.js-accordion-item');

      for (let l = 0; l < items.length; l++) {
        items[l].addEventListener("click", (e) => {
          items[l].classList.toggle('is-active');
          const content = items[l].querySelector('.js-accordion-content');
  
          if (content.style.maxHeight) {
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          }
        });
      }
    }
  }
}
