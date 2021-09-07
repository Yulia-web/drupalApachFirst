(function (_ref, $) {
  Drupal.behaviors.myTextSlider = {
    attach: function (context, settings) {
      this.myFuncSlider();
    },
    myFuncSlider: function () {
      $('.field__items--name-field-paragraph-slider').not('.slick-initialized').slick({
        autoplay: true,
        fade: true,
        speed: 2500,
        autoplaySpeed: 2000,
        prevArrow:'<div class="arrow-prev"><i class="fa fa-long-arrow-left"></i></div>',
        nextArrow:'<i class="fa fa-long-arrow-right text-arrow-next"></i>'
      });

      $(".field__items--name-field-paragraph-slider").on('afterChange', function(event, slick, currentSlide){
        $("#cp").text("0" + (currentSlide + 1));
      });
    }
  };
})(Drupal, jQuery);

//# sourceMappingURL=text-slider.js.map
