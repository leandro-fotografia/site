(function ($) {
  $(document).on('ready', function () {
    $('#menu-principal li a').on('click', function (e) {
      e.preventDefault();

      var link = $(this);
      var selector = link.prop('href').split('#')[1];
      var element = $('#' + selector).offset();

      $('html, body').animate({
        scrollTop: element.top + 'px'
      }, 'slow');
    });
  })
})(jQuery);