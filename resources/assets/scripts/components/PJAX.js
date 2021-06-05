/* eslint-disable */

import barba from '@barba/core';
import gsap from 'gsap';

import common from '../routes/common';
import { routes } from '../main'

export default class PJAX {
  constructor() {
    this.init();
  }

  init() {
    if (!document.body.hasAttribute('data-barba')) return;

    return barba.init({
      sync: false,
      debug: true,
      logLevel: 'debug',
      timeout: 10000,
      prevent: ({ el }) => {
        // element doesn't has attribute
        if (!el.hasAttribute('data-barba')) return true;

        // element is anchor
        if (el.getAttribute('href').indexOf('#') > -1) return true;
      },

      transitions: [{
        name: 'generalTransition',

        leave: (data) => {
          return new Promise((resolve) => {
            const mainContent = data.current.container.querySelector('.js-barba-content');

            console.log('leave');

            gsap.timeline()
              .fromTo(mainContent, {
                opacity: 1,
              }, {
                opacity: 0,
                duration: 0.5,
                ease: 'power2.inOut',
                onComplete: () => {
                  resolve(true);
                },
              })
          });
        },

        after: (data) => {
          return new Promise((resolve) => {
            // APP.html.classList.remove('html-overflow-hidden');
            this.initNewPage(data);

            console.log('after');

            const mainContent = data.next.container.querySelector('.js-barba-content');

            gsap.timeline()
              .fromTo(mainContent, {
                opacity: 0,
              }, {
                opacity: 1,
                delay: 0.3,
                duration: 0.5,
                ease: 'power2.inOut',
                onComplete: () => {
                  resolve(true);
                },
              })
          });
        },
      }],
    });
  }

  initNewPage(data) {
    return new Promise((resolve) => {
      // Extract classes from datas
      const matches = /<body class="([^"]*)"/gi.exec(data.next.html);
      document.body.setAttribute('class', matches[1]);

      document.body.scrollTop = document.documentElement.scrollTop = 0;

      common.containerInit();
      routes.loadEvents(false);
      resolve(true);
    });
  }
}
