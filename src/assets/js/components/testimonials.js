/**
 * Yeah, so I could have used a slider library for the testimonials but I didn't. Sounded more fun to create something. You're welcome @JordanSkomer
 *
 * @author EvanAgee
 */

let testimonials = {
  init: function() {
    if (!testimonials.container()) {
      return false;
    }

    testimonials.setupClick();
    testimonials.setActiveItem(testimonials.listParent().querySelectorAll("*")[0]);
  },

  setupClick: function() {
    let navArrow = document.querySelectorAll(".testimonial__list__nav__item");

    for (let i = 0; i < navArrow.length; i++) {
      navArrow[i].addEventListener('click', testimonials.clickHandler)
    }
  },

  clickHandler: function(event) {
    let navItem = event.target.closest('.testimonial__list__nav__item');

    if (!navItem) {
      return false;
    }

    let direction = 'next';

    if (navItem.classList.contains('testimonial__list__nav__item--prev') ) {
      direction = 'prev';
    }

    testimonials.displayNextOrPrev(direction);
  },

  displayNextOrPrev: function(direction) {
    if (!direction) {
      return false;
    }

    let allItems = testimonials.listParent().querySelectorAll('.testimonial__list__item');
    let activeItem = testimonials.getActiveItem();
    activeItem.classList.remove('-active');

    let nextItem = null;

    if (direction === 'next') {
      if (activeItem.nextElementSibling) {
        nextItem = activeItem.nextElementSibling
      } else {
        nextItem = allItems[0];
      }
    } else {
      if (activeItem.previousElementSibling) {
        nextItem = activeItem.previousElementSibling
      } else {
        nextItem = allItems[(allItems.length - 1)];
      }
    }

    return testimonials.setActiveItem(nextItem);
  },

  getActiveItem: function() {
    return document.querySelector('.testimonial__list__item.-active');
  },

  setActiveItem: function(el) {
    if (!el) {
      return false;
    }

    testimonials.container().style.minHeight = el.offsetHeight+'px';
    return el.classList.add('-active')
  },

  container: function() {
    return document.querySelector('#eversight-testimonials');
  },

  listParent: function() {
    return document.querySelector('.testimonial__list__items');
  }
};

document.addEventListener('DOMContentLoaded', testimonials.init);
