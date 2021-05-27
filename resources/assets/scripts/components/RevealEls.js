// import gsap from '../vendors/gsap.min.js'
// import ScrollTrigger from '../util/ScrollTrigger'
// import '@animxyz/core'

import sal from 'sal.js';

// gsap.registerPlugin(ScrollTrigger);

export default class RevealEls {
  constructor() {
    console.log('RevealEls init');

    this.instance = sal({
      threshold: 0.4,
      // once: false,
    });
  }

  instanceUpdate() {
    console.log("SAL IS UPDATED");
    this.instance.update();
  }
}
