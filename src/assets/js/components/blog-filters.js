let blogFilters = {
  init: function() {
    if ( !document.querySelector('body.page-blog') ) {
      return false;
    }

    blogFilters.setupSelects();
  },

  setupSelects: function() {
    let filterFields = document.querySelectorAll('.js-redirect-on-change');
    for (let i = 0; i < filterFields.length; i++) {
      filterFields[i].addEventListener('change', blogFilters.redirectOnChange);
    }
  },

  redirectOnChange: function(event) {
    if ( event.target.value == '' ) {
      return window.location.href = window.location.pathname;
    }

    let sep = window.location.href.includes('?') ? '&' : '?';
    return window.location.href = window.location.href + sep + event.target.name + '=' + event.target.value;
  }
};

document.addEventListener('DOMContentLoaded', blogFilters.init);
