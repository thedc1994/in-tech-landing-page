'use strict';

/* exported extend, ready */
let extend = function(out) {
  out = out || {};

  for (let i = 1; i < arguments.length; i++) {
    if (!arguments[i]) {
      continue;
    }

    for (let key in arguments[i]) {
      if (Object.prototype.hasOwnProperty.call(arguments[i], key)) {
        out[key] = arguments[i][key];
      }
    }
  }

  return out;
};

function ready(fn) {
  if (document.readyState !== 'loading') {
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

ready(() => {

  // detect Mac OS X

  if (navigator.platform.toUpperCase().indexOf('MAC') >= 0) {
    document.getElementsByTagName('html')[0].classList.add('mac');
  }


  // set select default

  const elSelects = document.querySelectorAll('select');
  Array.prototype.forEach.call(elSelects, function(el) {
    setSelectDefault(el);
    el.addEventListener('change', () => {
      setSelectDefault(el);
    });
  });

  function setSelectDefault (el) {
    if (el.value === el[0].value) {
      el.classList.add('form-select-default');
    } else {
      el.classList.remove('form-select-default');
    }
  }


  // accordion store

  const accordionStore = document.getElementById('accordion-store');

  if (accordionStore) {
    const collapseStoreEl = [].slice.call(accordionStore.querySelectorAll('.collapse'));

    collapseStoreEl.map(function (el) {
      el.addEventListener('shown.bs.collapse', function () {
        accordionStore.classList.add('open');
      });

      el.addEventListener('hide.bs.collapse', function () {
        accordionStore.classList.remove('open');
      });
    });
  }


  // tab wheel

  const navWheel = document.getElementById('nav-wheel');

  if (navWheel) {
    const navWheelToggle = navWheel.querySelectorAll('[data-bs-toggle="tab"]');

    Array.prototype.forEach.call(navWheelToggle, function(el, i) {
      el.addEventListener('shown.bs.tab', () => {
        navWheel.dataset.active = i + 1;
      });
    });
  }
});


// --------------------------
// navbar-toggle
// --------------------------

/* global ready */
ready(() => {
  'use strict';

  if (window.innerWidth < 992) {
    const navbarCollapse = document.getElementById('navbar-collapse'),
      navbarToggle = document.getElementById('navbar-toggle'),
      navbarDropdownToggle = navbarCollapse.querySelectorAll('.dropdown-toggle'),
      navbarOverlay = document.createElement('div');
    let closeNavbar;

    navbarOverlay.classList.add('navbar-overlay');
    navbarCollapse.insertAdjacentElement('afterend', navbarOverlay);
    navbarOverlay.addEventListener('click', () => {
      closeNavbar();
    });

    navbarDropdownToggle.forEach((el) => {
      el.addEventListener('click', (e) => {
        e.preventDefault();

        const elNavbarDropdownMenu = el.nextElementSibling;
        el.parentNode.classList.toggle('show');

        if (!elNavbarDropdownMenu.classList.contains('show')) {
          elNavbarDropdownMenu.classList.add('show');
          elNavbarDropdownMenu.style.height = 'auto';
          const height = elNavbarDropdownMenu.clientHeight + 'px';
          elNavbarDropdownMenu.style.height = '0';

          setTimeout(() => {
            elNavbarDropdownMenu.style.height = height;
          }, 0);

          setTimeout(() => {
            elNavbarDropdownMenu.style.height = '';
          }, 300);
        } else {
          elNavbarDropdownMenu.style.height = 'auto';
          elNavbarDropdownMenu.style.height = elNavbarDropdownMenu.clientHeight + 'px';

          setTimeout(() => {
            elNavbarDropdownMenu.style.height = '0';
          }, 0);

          setTimeout(() => {
            elNavbarDropdownMenu.classList.remove('show');
          }, 300);

          // elNavbarDropdownMenu.addEventListener('transitionend', () => {
          //   elNavbarDropdownMenu.classList.remove('show');
          // }, {once: true});
        }
      });
    });

    navbarToggle.addEventListener('click', (e) => {
      e.preventDefault();
      navbarToggle.classList.toggle('is-active');
      navbarCollapse.classList.toggle('show');
    });

    document.getElementById('navbar-close').addEventListener('click', () => {
      closeNavbar();
    });

    closeNavbar = function() {
      const event = document.createEvent('HTMLEvents');
      event.initEvent('click', true, false);
      navbarToggle.dispatchEvent(event);
    };
  }
});


// --------------------------
// headroom
// --------------------------

/* global ready, extend, Headroom */
ready(() => {
  'use strict';

  const elHeadroom = document.querySelectorAll('[data-plugin="headroom"]');
  Array.prototype.forEach.call(elHeadroom, (el) => {
    let defaults = {};
    let options = extend({}, defaults, JSON.parse(el.getAttribute('data-options')));

    const headroom = new Headroom(el, options);
    headroom.init();
  });
});


// --------------------------
// perfect scrollbar
// --------------------------

/* global ready, extend, PerfectScrollbar */
ready(() => {
  'use strict';

  if (window.innerWidth >= 992) {
    const elPerfectScrollbar = document.querySelectorAll('[data-plugin="perfect-scrollbar"]');
    Array.prototype.forEach.call(elPerfectScrollbar, (el) => {
      let defaults = {};
      let options = extend({}, defaults, JSON.parse(el.getAttribute('data-options')));

      new PerfectScrollbar(el, options);
    });
  }
});


// --------------------------
// swiper
// --------------------------

/* global ready, extend, Swiper */
ready(() => {
  'use strict';

  const elSwiper = document.querySelectorAll('[data-plugin="swiper"]');
  Array.prototype.forEach.call(elSwiper, (el) => {
    let defaults = {
      navigation: {
        nextEl: el.querySelector(':scope > .swiper-buttons > .swiper-button-next'),
        prevEl: el.querySelector(':scope > .swiper-buttons > .swiper-button-prev')
      },
      pagination: {
        el: el.querySelector('.swiper-pagination'),
        clickable: true
      }
    };
    let options = extend({}, defaults, JSON.parse(el.getAttribute('data-options')));

    new Swiper(el, options);
  });
});


// --------------------------
// swiper
// --------------------------

/* global ready, extend, Swiper */
ready(() => {
  'use strict';

  const elSwiperCoverflow = document.querySelectorAll('[data-plugin="swiper-coverflow"]');
  Array.prototype.forEach.call(elSwiperCoverflow, (el) => {
    let defaults = {
      navigation: {
        nextEl: el.querySelector(':scope > .swiper-buttons > .swiper-button-next'),
        prevEl: el.querySelector(':scope > .swiper-buttons > .swiper-button-prev')
      },
      pagination: {
        el: el.querySelector('.swiper-pagination'),
        clickable: true
      },
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      loop: true,
      slideToClickedSlide: true,
      // allowTouchMove: false,
      // autoplay: {
      //   delay: 5000
      // },
      coverflowEffect: {
        rotate: 0,
        depth: 220,
        modifier: 1,
        // slideShadows : false
      },
      breakpoints: {
        576: {
          effect: 'coverflow',
          coverflowEffect: {
            stretch: 266
          }
        },
        768: {
          coverflowEffect: {
            stretch: 360
          }
        },
        992: {
          coverflowEffect: {
            stretch: 234
          }
        },
        1260: {
          coverflowEffect: {
            stretch: 280
          }
        }
      }
    };
    let options = extend({}, defaults, JSON.parse(el.getAttribute('data-options')));

    new Swiper(el, options);
  });
});


// --------------------------
// stickybits
// --------------------------

/* global ready, extend, stickybits */
ready(() => {
  'use strict';

  const elStickybits = document.querySelectorAll('[data-plugin="stickybits"]');
  Array.prototype.forEach.call(elStickybits, (el) => {
    let defaults = {
      useStickyClasses: true,
      stickyBitStickyOffset: 56
    };
    let options = extend({}, defaults, JSON.parse(el.getAttribute('data-options')));

    stickybits(el, options);
  });
});


// --------------------------
// swiper
// --------------------------

/* global ready, SmoothScroll */
// ready(() => {
//   'use strict';
//
//   new SmoothScroll('[data-plugin="smooth-scroll"]', {
//     offset: '104'
//   });
// });