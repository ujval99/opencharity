/**
 * @file
 * Opencharity Common Javascript.
 *
 */
(function ($) {
  Drupal.behaviors.opencharity = {
    attach: function (context, settings) {

      function responsive(){
        if($(window).width() < 768){
          $('#header').addClass('header--mobile');
          $('body').css({'padding-top': '52px', 'padding-bottom': $('#footer').outerHeight()});
          var imageUrl = $('.view-hero__row--image img').attr('src');
          $('.view-hero__row--bleedtext').css('background-image', 'url(' + imageUrl + ')');
        } else {
          $('#header').removeClass('header--mobile');
          $('body').css({'padding-top': $('#header').outerHeight(), 'padding-bottom': $('#footer').outerHeight()});
          $('.view-hero__row--bleedtext').attr('style', '');
          $('.region-header').attr('style', '');
        }
      }

      function headerFixedClass(){
        var windowScrollTop = $(window).scrollTop();
        if(windowScrollTop > 1) {
          $('#header').addClass('active');
        } else {
          $('#header').removeClass('active');
        }
      }

      headerFixedClass();
      responsive();

      $( window ).on( 'scroll', function() {
        headerFixedClass();
      });

      $( window ).resize(function() {
        responsive();
      });

      $('.toggle-menu').click(function() {
        $(this).toggleClass('active');
        $('.region-header').slideToggle('fast');
      });
    }
  };
})(jQuery);
