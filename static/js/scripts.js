$(document).ready(function() {
  $('a:not([href^=http])').click(function(e) {
    a = $(this);
    e.preventDefault();
    $('.showoff').removeClass('out').addClass('in');
    $('h2.' + a.attr('href')).addClass('showtime');
//    $('h2:not(.' + a.attr('href') + ')').removeClass('showtime');
  });

  $('.close').click(function(e) {
    e.preventDefault();
    $('.showoff').removeClass('in').addClass('out');
  });

  $('.showoff img').click(function() {
    $(this).parent().animate({ scrollX: $(this).pageXOffset});
  });
});