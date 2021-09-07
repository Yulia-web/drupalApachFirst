(function ($, Drupal, window, document) {
  Drupal.behaviors.myBehaviorSlick = {
    attach: function (context, settings) {
      this.myFunc();
    },
    myFunc: function () {
      $('.field__items--name-field-slider').not('.slick-initialized').slick( {
        // infinite: true,
        fade: true,
        speed: 2500,
        prevArrow:'<div class="arrow-prev"><i class="fa fa-long-arrow-left"></i></div>',
        nextArrow:'<div class="arrow-next"><i class="fa fa-long-arrow-right"></i></div>'
      });

    }
  };
})(jQuery, Drupal, window, document);

