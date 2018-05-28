/**
 * Handles the show/hide of the mobile
 *
 * @author EvanAgee
 */

let modal = () => {
  let body = document.querySelector('body');
  let modalTriggers = body.querySelectorAll('.js-modal-trigger, .modal__overlay, .modal__contents__close');
  let modalContentOptions = document.querySelectorAll('.modal__contents > .modal__content__option');

  for (let i = 0; i < modalTriggers.length; i++) {
    modalTriggers[i].addEventListener('click', function(event) {
      event.preventDefault();

      if (typeof event.target.classList !== "undefined" && event.target.classList.contains('modal__contents')) {
        return false;
      }

      let modalContent = '#modal-demo';

      // Set modal content by data attribute OR rel attribute
      if (event.target.getAttribute('data-modal-content')) {
        modalContent = event.target.getAttribute('data-modal-content');
      } else if (event.target.getAttribute('rel')) {
        modalContent = `#${event.target.getAttribute('rel')}`;
      }

      for (let i = 0; i < modalContentOptions.length; i++) {
        if (`#${modalContentOptions[i].id}` === modalContent) {
          modalContentOptions[i].style.display = 'block';
        } else {
          modalContentOptions[i].style.display = 'none';
        }
      }

      return body.classList.toggle('-modalOpen');
    })
  }
}

document.addEventListener('DOMContentLoaded', modal);
