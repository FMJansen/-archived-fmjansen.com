$(document).ready(function() {

  $('div#about').addClass('loaded');

  $('form').submit(function(event) {
    event.preventDefault();
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

    if($('[name=name]').val().length > 0 && $('[name=email]').val().length > 0 && $('[name=subject]').val().length > 0 && $('textarea').val().length > 0 && emailReg.test($('[name=email]').val())) {
      $.post('/send.php', { 'name': $('[name=name]').val(), 'mail': $('[name=email]').val(), 'subject': $('[name=subject]').val(), 'message': $('textarea').val() }, function() {
        $('#notify').text('Your message is sent.').css('color', 'green').fadeIn(400);
      });
      $('#slidedown').animate({height: $('#notify').height() + 60 }, 400);
      $('form').slideUp('fast');
    } else {
      $('#notify').text("You haven't filled in everything correctly.").css('color', '#c22').fadeIn(400);
      $('#slidedown').animate({height: $('#notify').height() + 60 }, 400);
    }
  });

  if(window.devicePixelRatio >= 2) {
    $('img.retina').each(function(i) {
      var retinasrc = $(this).attr('src').replace(/(.+)(\.\w{3,4})$/, "$1" + '2x' + "$2");
      $(this).attr('src', retinasrc);
    });
  }

  $(window).scroll(function() {
    if($(window).scrollTop() > 500) {
      $('#up').fadeIn('fast');
    } else {
      $('#up').fadeOut('fast');
    }
  });

});
