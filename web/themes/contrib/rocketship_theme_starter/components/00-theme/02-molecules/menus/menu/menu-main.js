(function (_ref, $) {
  Drupal.behaviors.myBehavior = {
    attach: function (context, settings) {
      $('.header-burger', context).click(function () {
        $('.header-burger').toggleClass('active');
        $('.nav--system-menu-block').toggleClass('open');
      });
    }
  };
})(Drupal, jQuery);

