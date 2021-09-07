(function (_ref, $) {
  Drupal.behaviors.myHeaderMenu = {
    attach: function (context, settings) {
      this.HeaderFix();
    },HeaderFix: function () {
      jQuery("document").ready(function($){

        var nav = $('.container-header');

        $(window).scroll(function () {
          if ($(this).scrollTop() >= 80) {
            nav.addClass("f-nav");
          } else {
            nav.removeClass("f-nav");
          }
        });

      });
    }
  };
})(Drupal, jQuery);
