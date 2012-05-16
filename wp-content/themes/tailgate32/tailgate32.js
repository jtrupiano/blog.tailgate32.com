$().ready(function() {
  // set fancybox defaults
  $.fancybox.defaults.beforeLoad = function() { $('#video-container').css('visibility', 'hidden'); };
  $.fancybox.defaults.afterClose = function() { $('#video-container').css('visibility', 'visible'); };
  
  // Set up contact us fancybox
  $('#contact-us-nav').click(function() {
    $.fancybox.open($('#contact-us'));
  });

  // Set up contact us form AJAX
  $('#contact-us-submit').click(function() {
    $('#contact-us-form').fadeOut('slow');
    $('#contact-us-thanks').fadeIn('slow');
  });
});
