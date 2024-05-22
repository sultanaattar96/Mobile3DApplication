document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  // Sticky header on scroll
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    window.addEventListener('scroll', () => {
      window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
    });
  }

  // Mobile nav toggle
  const mobileNavToggleButton = document.querySelector('.mobile-nav-toggle');
  if (mobileNavToggleButton) {
    mobileNavToggleButton.addEventListener('click', function(event) {
      event.preventDefault();
      mobileNavToggle();
    });
  }

  function mobileNavToggle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleButton.classList.toggle('bi-list');
    mobileNavToggleButton.classList.toggle('bi-x');
  }

  // Hide mobile nav on same-page/hash links
  document.querySelectorAll('#navbar a').forEach(navbarLink => {
    if (!navbarLink.hash) return;
    let section = document.querySelector(navbarLink.hash);
    if (!section) return;

    navbarLink.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToggle();
      }
    });
  });

  // Toggle mobile nav dropdowns
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');
  navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    });
  });

  // Scroll top button
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const toggleScrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    };
    window.addEventListener('load', toggleScrollTop);
    window.addEventListener('scroll', toggleScrollTop);
    scrollTop.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // Hero Slider
  var swiper = new Swiper(".sliderFeaturedPosts", {
    spaceBetween: 0,
    speed: 500,
    centeredSlides: true,
    loop: true,
    slideToClickedSlide: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".custom-swiper-button-next",
      prevEl: ".custom-swiper-button-prev",
    },
  });

  // Open and close the search form
  const searchOpen = document.querySelector('.js-search-open');
  const searchClose = document.querySelector('.js-search-close');
  const searchWrap = document.querySelector(".js-search-form-wrap");

  document.addEventListener('DOMContentLoaded', () => {
    const searchOpen = document.querySelector('.js-search-open');
    const searchWrap = document.querySelector('.js-search-form-wrap');
  
    if (searchOpen && searchWrap) {
      searchOpen.addEventListener('click', (e) => {
        e.preventDefault();
        searchWrap.classList.add('active');
      });
    }
  });
  

  searchClose.addEventListener("click", (e) => {
    e.preventDefault();
    searchWrap.classList.remove("active");
  });

  // Initiate glightbox
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  // Animation on scroll function and init
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aos_init);
});
