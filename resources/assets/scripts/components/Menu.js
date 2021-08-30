import ScrollMagic from 'scrollmagic'
import gsap from '../vendors/gsap.min.js'

export default class Menu {
  constructor() {
    this.init()
  }

  init() {
    console.log('Menu');

    this.navMenu();
    this.bindEvents();
  }

  navMenu() {
    const btnOpen = document.querySelector('.js-menu-open');
    const btnClose = document.querySelector('.js-menu-close');

    const inner = document.querySelector('.js-nav-inner');
    const background = document.querySelector('.js-nav-bg');
    const bgLeft = document.querySelector('.js-nav-bg-left');
    const bgRight = document.querySelector('.js-nav-bg-right');
    const bgRightMobile = document.querySelector('.js-nav-bg-right-mobile');
    const bgColors = document.querySelector('.js-nav-bg-colors');

    const header = document.querySelector('.js-nav-header');
    const listLinks = document.querySelector('.js-navList');
    const infoItems = document.querySelectorAll('.js-navInfo-item');

    
    btnOpen.addEventListener('click', () => {
      gsap.timeline()
        .set(listLinks, { opacity: 0 })
        .set(background, { opacity: 1 })

        .fromTo(bgLeft, {
          scaleX: 0,
        }, {
          scaleX: 1,
          duration: 0.5,
          ease: "power3.inOut",
          onStart: () => {
            inner.classList.add('is-active');
            background.classList.add('is-active');
          },
        })
        
        .fromTo(header, {
          y: '16px',
          opacity: 0,
        }, {
          ease: "power3.out",
          duration: 0.8,
          y: '0px',
          opacity: 1,
        }, '>-0.2')

        .fromTo(listLinks, {
          y: '24px',
          opacity: 0,
        }, {
          ease: 'power3.out',
          stagger: 0.1,
          duration: 1.0,
          y: '0px',
          opacity: 1,
        }, '>-0.6')

        .fromTo([bgRight, bgRightMobile], {
          scaleY: 0,
        }, {
          scaleY: 1,
          duration: 0.5,
          ease: "power3.inOut",
        }, '<')
        .fromTo(bgColors, {
          scaleY: 0,
        }, {
          scaleY: 1,
          duration: 0.2,
          ease: "power3.inOut",
        }, '<')
        .fromTo(infoItems, {
          opacity: 0,
          y: '34px',
        }, {
          ease: "power3.out",
          stagger: 0.08,
          duration: 0.8,
          opacity: 1,
          y: '0px',
          onComplete: () => {
            listLinks.classList.remove('pointer-events-none');
            btnClose.classList.remove('pointer-events-none');
          },
        }, '>-0.2')

    })


    btnClose.addEventListener('click', () => {
      gsap.timeline()
        .fromTo(header, {
          y: '0',
          opacity: 1,
        }, {
          ease: "power3.out",
          duration: 0.8,
          y: '-16px',
          opacity: 0,
          onStart: () => {
            listLinks.classList.add('pointer-events-none');
            btnClose.classList.add('pointer-events-none');
          },
        })

        .fromTo(listLinks, {
          y: '0px',
          opacity: 1,
        }, {
          ease: 'power3.out',
          stagger: 0.15,
          duration: 1.2,
          y: '-24px',
          opacity: 0,
        }, '>-0.7')
        .fromTo(infoItems, {
          opacity: 1,
          y: '0px',
        }, {
          ease: "power3.out",
          stagger: 0.08,
          duration: 1.0,
          opacity: 0,
          y: '-34px',
        }, '<')

        .fromTo(bgColors, {
          scaleY: 1,
        }, {
          scaleY: 0,
          duration: 0.4,
          ease: "power3.inOut",
        }, '>-0.8')
        .fromTo([bgRight, bgRightMobile], {
          scaleY: 1,
        }, {
          scaleY: 0,
          duration: 0.5,
          ease: "power3.inOut",
        }, '<')
        .fromTo(bgLeft, {
          scaleX: 1,
        }, {
          scaleX: 0,
          duration: 0.5,
          ease: "power3.inOut",
          onComplete: () => {
            inner.classList.remove('is-active');
            background.classList.remove('is-active');
          },
        }, '>-0.2')
        
    })
  }

  bindEvents() {
    const btnBrandContactMenuOpen = document.querySelectorAll('.js-open-brand-contact');
    const btnContactMenuOpen = document.querySelector('.js-nav-menu-form-open');
    // const btnContactOpen = document.querySelectorAll('.js-nav-menu-form-open');
    const btnContactCloseMain = document.querySelector('.js-nav-menu-form-close-main');
    const btnContactCloseBrand = document.querySelector('.js-nav-menu-form-close-brand');
    const btnContactClose = document.querySelectorAll('.js-nav-menu-form-close');

    const mainContact = this.mainContact();
    const brandContact = this.brandContact();

    btnContactMenuOpen.addEventListener('click', () => {
      mainContact.fromMenuOpen();
    })

    if (btnBrandContactMenuOpen) {
      btnContactCloseBrand.addEventListener('click', () => {
        brandContact.close(() => {
          btnContactCloseMain.classList.remove('d-none');
          btnContactCloseBrand.classList.add('d-none');
          btnContactCloseBrand.classList.add('pointer-events-none');
        });
      })

      btnBrandContactMenuOpen.forEach(el => {
        el.addEventListener('click', () => {
          brandContact.open(() => {
            btnContactCloseMain.classList.add('d-none');
            btnContactCloseBrand.classList.remove('d-none');
            btnContactCloseBrand.classList.remove('pointer-events-none');
          });
        })
      });
    }

    btnContactClose.forEach(el => {
      el.addEventListener('click', () => {
        mainContact.close();
      })
    });
  }

  mainContact() {
    const inner = document.querySelector('.js-nav-inner');
    const background = document.querySelector('.js-nav-bg');
    const bgLeft = document.querySelector('.js-nav-bg-left');
    const bgRight = document.querySelector('.js-nav-bg-right');
    const bgRightMobile = document.querySelector('.js-nav-bg-right-mobile');
    const bgColors = document.querySelector('.js-nav-bg-colors');

    const header = document.querySelector('.js-nav-header');
    const listLinks = document.querySelector('.js-navList');
    const infoItems = document.querySelectorAll('.js-navInfo-item');

    const btnContactOpen = document.querySelector('.js-nav-menu-form-open');
    const btnContactClose = document.querySelector('.js-nav-menu-form-close');

    const contactFormWrap = document.querySelector('.js-nav-menu-form');
    const contactContent = document.querySelector('.js-form-content');
    const contactBg = document.querySelector('.js-form-bg');
    const contactHeader = document.querySelector('.js-form-header');
    const contactForm = document.querySelector('.js-form-form-main');
    const contactFormBrand = document.querySelector('.js-form-form-brand');

    gsap.timeline()
      .set(contactBg, { scaleX: 0 })
      .set(btnContactClose, { opacity: 0 })
      .set(contactHeader, { opacity: 0 })
      .set(contactForm, { opacity: 0 })

    const fromMenuOpen = () => {
      gsap.timeline()
        .to(contactBg, {
          ease: "power3.inOut",
          duration: 0.6,
          scaleX: 1,
          onStart: () => {
            btnContactOpen.classList.add('pointer-events-none');
          },
        }, '<')
        .fromTo(btnContactClose, {
          y: '24px',
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 1,
          y: '0px',
        }, '>-0.2')
        .fromTo(contactHeader, {
          y: '24px',
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 1,
          y: '0px',
        }, '>-0.4')
        .fromTo(contactForm, {
          y: '24px',
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 1,
          y: '0px',
          onComplete: () => {
            contactFormWrap.classList.remove('pointer-events-none');
            btnContactClose.classList.remove('pointer-events-none');
          },
        }, '>-0.4')
    }

    const open = () => {
      gsap.timeline()
        .set(listLinks, { opacity: 0 })
        .set(background, { opacity: 1 })

        .fromTo(bgLeft, { scaleX: 0 }, {
          ease: "power3.inOut", duration: 0.7, scaleX: 1,
          onStart: () => {
            inner.classList.add('is-active');
            background.classList.add('is-active');
            btnContactOpen.classList.add('pointer-events-none');
          },
        })

        .to(contactBg, { ease: "power3.inOut", duration: 0.7, scaleX: 1 }, '<')

        .fromTo(btnContactClose, { y: '24px' }, {
          ease: "power3.out", duration: 0.6, opacity: 1, y: '0px',
        }, '>-0.2')

        .fromTo([bgRight, bgRightMobile], { scaleY: 0 }, {
          ease: "power3.inOut", duration: 0.5, scaleY: 1,
        }, '<')

        .fromTo(bgColors, { scaleY: 0 }, {
          ease: "power3.inOut", duration: 0.2, scaleY: 1,
        }, '<')

        .fromTo(infoItems, { opacity: 0, y: '34px' }, {
          ease: "power3.out", duration: 0.8, stagger: 0.08, opacity: 1, y: '0px',
          onComplete: () => {
            listLinks.classList.remove('pointer-events-none');
            // btnClose.classList.remove('pointer-events-none');
          },
        }, '>-0.2')

        .fromTo(contactHeader, { y: '24px' }, {
          ease: "power3.out", duration: 0.6, opacity: 1, y: '0px',
        }, '>-0.4')

        .fromTo(contactForm, { y: '24px' }, {
          ease: "power3.out", duration: 0.6, opacity: 1, y: '0px',
          onComplete: () => {
            contactFormWrap.classList.remove('pointer-events-none');
            btnContactClose.classList.remove('pointer-events-none');
          },
        }, '>-0.4')
    }

    const close = () => {
      gsap.timeline()
        .fromTo(btnContactClose, {
          y: '0',
          opacity: 1,
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 0,
          y: '-24px',
          onStart: () => {
            contactFormWrap.classList.add('pointer-events-none');
            btnContactClose.classList.add('pointer-events-none');
          },
        })
        .fromTo(contactHeader, {
          y: '0',
          opacity: 1,
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 0,
          y: '-24px',
        }, '>-0.4')
        .fromTo(contactForm, {
          y: '0',
          opacity: 1,
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 0,
          y: '-24px',
        }, '>-0.4')

        .to(contactBg, {
          ease: "power3.inOut",
          duration: 0.6,
          scaleX: 0,
          onComplete: () => {
            btnContactOpen.classList.remove('pointer-events-none');
          },
        }, '>-0.2')

        // .to(btnClose, {
        //   ease: "power3.out",
        //   duration: 0.4,
        //   opacity: 1,
        //   onComplete: () => {
        //     btnClose.classList.remove('pointer-events-none');
        //     btnContactOpen.classList.remove('pointer-events-none');
        //   },
        // }, '<')
    }

    return {
      fromMenuOpen,
      open,
      close,
    }
  }

  brandContact() {
    const inner = document.querySelector('.js-nav-inner');
    const background = document.querySelector('.js-nav-bg');
    const bgLeft = document.querySelector('.js-nav-bg-left');
    const bgRight = document.querySelector('.js-nav-bg-right');
    const bgRightMobile = document.querySelector('.js-nav-bg-right-mobile');
    const bgColors = document.querySelector('.js-nav-bg-colors');

    const header = document.querySelector('.js-nav-header');
    const listLinks = document.querySelector('.js-navList');
    const infoItems = document.querySelectorAll('.js-navInfo-item');

    const btnContactOpen = document.querySelector('.js-nav-menu-form-open');
    const btnContactClose = document.querySelector('.js-nav-menu-form-close');

    const contactFormWrap = document.querySelector('.js-nav-menu-form');
    const contactContent = document.querySelector('.js-form-content');
    const contactBg = document.querySelector('.js-form-bg');
    const contactHeader = document.querySelector('.js-form-header');
    const contactFormMain = document.querySelector('.js-form-form-main');
    const contactForm = document.querySelector('.js-form-form-brand');

    gsap.timeline()
      .set(contactBg, { scaleX: 0 })
      .set(btnContactClose, { opacity: 0 })
      .set(contactHeader, { opacity: 0 })
      .set(contactForm, { opacity: 0 })

    const fromMenuOpen = () => {
      gsap.timeline()
        .to(contactBg, {
          ease: "power3.inOut",
          duration: 0.6,
          scaleX: 1,
          onStart: () => {
            btnContactOpen.classList.add('pointer-events-none');
          },
        }, '<')
        .fromTo(btnContactClose, {
          y: '24px',
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 1,
          y: '0px',
        }, '>-0.2')
        .fromTo(contactHeader, {
          y: '24px',
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 1,
          y: '0px',
        }, '>-0.4')
        .fromTo(contactForm, {
          y: '24px',
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 1,
          y: '0px',
          onComplete: () => {
            contactFormWrap.classList.remove('pointer-events-none');
            btnContactClose.classList.remove('pointer-events-none');
          },
        }, '>-0.4')
    }

    const open = (callback) => {
      contactFormMain.classList.add('d-none');
      contactForm.classList.remove('d-none');

      gsap.timeline()
        .set(listLinks, { opacity: 0 })
        .set(background, { opacity: 1 })

        .fromTo(bgLeft, { scaleX: 0 }, {
          ease: "power3.inOut", duration: 0.7, scaleX: 1,
          onStart: () => {
            inner.classList.add('is-active');
            background.classList.add('is-active');
            btnContactOpen.classList.add('pointer-events-none');
          },
        })

        .to(contactBg, { ease: "power3.inOut", duration: 0.7, scaleX: 1 }, '<')

        .fromTo(btnContactClose, { y: '24px' }, {
          ease: "power3.out", duration: 0.6, opacity: 1, y: '0px',
        }, '>-0.2')

        .fromTo([bgRight, bgRightMobile], { scaleY: 0 }, {
          ease: "power3.inOut", duration: 0.5, scaleY: 1,
        }, '<')

        .fromTo(bgColors, { scaleY: 0 }, {
          ease: "power3.inOut", duration: 0.2, scaleY: 1,
        }, '<')

        .fromTo(infoItems, { opacity: 0, y: '34px' }, {
          ease: "power3.out", duration: 0.8, stagger: 0.08, opacity: 1, y: '0px',
          onComplete: () => {
            listLinks.classList.remove('pointer-events-none');
            // btnClose.classList.remove('pointer-events-none');
          },
        }, '>-0.2')

        .fromTo(contactHeader, { y: '24px' }, {
          ease: "power3.out", duration: 0.6, opacity: 1, y: '0px',
        }, '>-0.4')

        .fromTo(contactForm, { y: '24px' }, {
          ease: "power3.out", duration: 0.6, opacity: 1, y: '0px',
          onComplete: () => {
            contactFormWrap.classList.remove('pointer-events-none');
            btnContactClose.classList.remove('pointer-events-none');
          },
        }, '>-0.4')

      callback();
    }

    const close = (callback) => {
      gsap.timeline()
        .fromTo(btnContactClose, {
          y: '0',
          opacity: 1,
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 0,
          y: '-24px',
          onStart: () => {
            contactFormWrap.classList.add('pointer-events-none');
            btnContactClose.classList.add('pointer-events-none');
          },
        })
        .fromTo(contactHeader, {
          y: '0',
          opacity: 1,
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 0,
          y: '-24px',
        }, '>-0.4')
        .fromTo(contactForm, {
          y: '0',
          opacity: 1,
        }, {
          ease: "power3.out",
          duration: 0.6,
          opacity: 0,
          y: '-24px',
        }, '>-0.4')

        .to(contactBg, {
          ease: "power3.inOut",
          duration: 0.6,
          scaleX: 0,
          onComplete: () => {
            btnContactOpen.classList.remove('pointer-events-none');
          },
        }, '>-0.2')

        .to(infoItems, {
          ease: "power3.out", duration: 0.8, stagger: 0.08, opacity: 0, y: '34px',
        }, '>-0.2')

        .fromTo([bgRight, bgRightMobile], { scaleY: 1 }, {
          ease: "power3.inOut", duration: 0.5, scaleY: 0,
        }, '<')

        .fromTo(bgColors, { scaleY: 1 }, {
          ease: "power3.inOut", duration: 0.2, scaleY: 0,
        }, '<')

        .fromTo(bgLeft, { scaleX: 1 }, {
          ease: "power3.inOut", duration: 0.7, scaleX: 0,
          onStart: () => {
            inner.classList.add('is-active');
            background.classList.add('is-active');
            btnContactOpen.classList.add('pointer-events-none');
          },
        }, '>-0.4')


        callback();
    }

    return {
      fromMenuOpen,
      open,
      close,
    }
  }
}
