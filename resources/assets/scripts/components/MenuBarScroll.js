import ScrollMagic from 'scrollmagic'

export default class MenuBarScroll {
  constructor() {
    console.log('MenuBarScroll init');

    const headerBar = document.querySelector('.js-headerBar');
  
    new ScrollMagic.Scene({
      offset: '2px',
    })
      .setClassToggle(headerBar, 'is-pinned')
      .addTo(new ScrollMagic.Controller());
  }
}

