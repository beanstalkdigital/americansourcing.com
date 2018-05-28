let howItWorksSections = {
  init: function() {
    let container = document.querySelector('.howItWorks');

    if ( !container ) {
      return false;
    }

    howItWorksSections.setupSlider();
  },

  setupSlider: function() {
    let $slider = jQuery('.howItWorks__sections');

    $slider.on('init', function(slick){
      setTimeout(function(){
        jQuery('.howItWorks').addClass('--loaded');
      }, 500);
    });

    $slider.on('afterChange', function(slick, currentSlide){
      return howItWorksSections.updateProgress(slick, currentSlide);
    });

    $slider.slick({
      centerMode: true,
      slidesToScroll: 1,
      slidesToShow: 3,
      autoplay: false,
      autoplaySpeed: 5000,
      prevArrow: '<div class="slick-prev slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.33 31.33"><g id="Layer_2" data-name="Layer 2"><g id="Main_Artwork" data-name="Main Artwork"><path class="cls-1" d="M0,0H31.33V31.33H0ZM30,1.38H1.38V30H30Z"/><path class="cls-1" d="M18.89,22,12,15.75l6.85-6.23V8.19a.21.21,0,0,0-.35-.13l-8.45,7.69,8.45,7.68a.21.21,0,0,0,.35-.13Z"/></g></g></svg></div>',
      nextArrow: '<div class="slick-next slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.33 31.33"><g id="Layer_2" data-name="Layer 2"><g id="Main_Artwork" data-name="Main Artwork"><path class="cls-1" d="M31.33,31.33H0V0H31.33ZM1.38,30H30V1.38H1.38Z"/><path class="cls-1" d="M12.44,9.36l6.85,6.23-6.85,6.23v1.32a.21.21,0,0,0,.35.13l8.46-7.68L12.79,7.9a.21.21,0,0,0-.35.13Z"/></g></g></svg></div>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  },

  updateProgress: function(slick, currentSlide) {
    if ( currentSlide.currentSlide === 0 ) {
      jQuery('.howItWorks__progress .segment').removeClass('active');
    }

    jQuery('.howItWorks__progress .segment.segment-'+(currentSlide.currentSlide)).addClass('active');
  }
}

module.exports = howItWorksSections
