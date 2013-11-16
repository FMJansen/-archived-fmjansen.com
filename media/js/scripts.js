$(document).ready(function() {
  setTimeout(function() {
    $('h1').addClass('loaded');
  }, 100);
  setTimeout(function() {
    $('nav').addClass('loaded');
  }, 300);
  setTimeout(function() {
    $('div').addClass('loaded');
  }, 500);
  setTimeout(function() {
    $('footer').addClass('loaded');
  }, 700);

  if(window.devicePixelRatio >= 2) {
    $('img.retina').each(function(i) {
      var retinasrc = $(this).attr('src').replace(/(.+)(\.\w{3,4})$/, "$1" + '2x' + "$2");
      $(this).attr('src', retinasrc);
    });
  }

  $('a[href="/portfolio"]').click(function(e) {
    e.preventDefault();
    var curUrl = location.href;

    if(curUrl.indexOf('/portfolio/') === -1) {
      $('div#content').addClass('loading');
      $.ajax({
        url: '/portfolio/?ajax=1',
        dataType: 'html',
        error: function(e) {
          $('div#content').removeClass('loading').prepend('<p class="error">Something went wrong, please try again.</p>');
        }
      }).done(function(data) {
        $('body').addClass('portfolio');
        $('div#content').removeClass('loading');
        window.history.pushState("object or string", "Portfolio", "/portfolio/");
        $('div#content').html(data);
      });
    }
  });


  $('a[href="/"]').click(function(e) {
    e.preventDefault();
    var curUrl = location.href;

    if(curUrl.indexOf('/portfolio/') !== -1) {
      $('div#content').addClass('loading');
      $.ajax({
        url: '/?ajax=1',
        dataType: 'html',
        error: function(e) {
          $('div#content').removeClass('loading').prepend('<p class="error">Something went wrong, please try again.</p>');
        }
      }).done(function(data) {
        $('body').removeClass('portfolio');
        $('div#content').removeClass('loading');
        window.history.pushState("object or string", "Home", "/");
        $('div#content').html(data);
      });
    }
  });


  $('body').on('click', '.portfolio a', function(e) {
    var to = $(this).attr('href');

    if(to === '#top') {
      e.preventDefault();
      $('body').animate({
        scrollTop: 0
      }, 400);
    } else if(to.indexOf('#') !== -1) {
      e.preventDefault();
      var target = $(to);
      $('body').animate({
        scrollTop: target.offset().top - 25
      }, 400);
    }
  });


  $(window).scroll(function() {
    if($(window).scrollTop() > 380) {
      $('#up').stop(true, true).fadeIn('fast');
    } else {
      $('#up').stop(true, true).fadeOut('fast');
    }
  });

});