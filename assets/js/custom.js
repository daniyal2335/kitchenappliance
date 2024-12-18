(function($) {
  
  "use strict";

  // Background Image
  $('[data-bg-img]').each(function() {
    $(this).css('background-image', 'url(' + $(this).data("bg-img") + ')');
  });

  // Off Canvas JS
  var canvasWrapper = $(".off-canvas-wrapper");
  $(".btn-menu").on('click', function() {
    canvasWrapper.addClass('active');
    $("body").addClass('fix');
  });
  $(".close-action > .btn-close, .off-canvas-overlay").on('click', function() {
    canvasWrapper.removeClass('active');
    $("body").removeClass('fix');
  });

  // Responsive Slicknav JS
  $('.main-menu').slicknav({
    appendTo: '.res-mobile-menu',
    closeOnClick: true,
    removeClasses: true,
    closedSymbol: '<i class="fa fa-plus"></i>',
    openedSymbol: '<i class="fa fa-minus"></i>'
  });

  // Other functionality for sliders, fancybox, zoom, etc. remain unchanged

  // Countdown JS
  jQuery(document).ready(function($) {
    var now = new Date();
    var day = now.getDate();
    var month = now.getMonth() + 1;
    var year = now.getFullYear() + 1;

    var nextyear = month + '/' + day + '/' + year + ' 07:07:07';

    $('.countdown-timer').countdown({
      date: '4/12/2024 23:59:59',
      offset: +2,
      day: 'Day',
      days: 'Days',
      hideOnComplete: true
    }, function (container) {
      $('.countdown-timer').html('<p>The countdown is complete!</p>');
    });
  });

  // Scroll Top Hide Show
  var varWindow = $(window);
  varWindow.on('scroll', function(){
    if ($(this).scrollTop() > 250) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }

    // Sticky Header
    if($('.sticky-header').length){
      var windowpos = $(this).scrollTop();
      if (windowpos >= 80) {
        $('.sticky-header').addClass('sticky');
      } else {
        $('.sticky-header').removeClass('sticky');
      }
    }
  });

  // Ajax Contact Form JS
  var form = $('#contact-form');
  var formMessages = $('.form-message');

  $(form).submit(function(e) {
    e.preventDefault();
    var formData = form.serialize();
    $.ajax({
        type: 'POST',
        url: form.attr('action'),
        data: formData
    }).done(function(response) {
        $(formMessages).removeClass('alert alert-danger');
        $(formMessages).addClass('alert alert-success fade show');
        formMessages.html("<button type='button' class='btn-close' data-bs-dismiss='alert'>&times;</button>");
        formMessages.append(response);
        $('#contact-form input, #contact-form textarea').val('');
    }).fail(function(data) {
        $(formMessages).removeClass('alert alert-success');
        $(formMessages).addClass('alert alert-danger fade show');
        if (data.responseText !== '') {
            formMessages.html("<button type='button' class='btn-close' data-bs-dismiss='alert'>&times;</button>");
            formMessages.append(data.responseText);
        } else {
            $(formMessages).text('Oops! An error occurred and your message could not be sent.');
        }
    });
  });

  // Scroll To Top
  $('.scroll-to-top').on('click', function(){
    $('html, body').animate({scrollTop : 0}, 800);
    return false;
  });

  // Reveal Footer JS
  let revealId = $(".reveal-footer"),
      footerHeight = revealId.outerHeight(),
      windowWidth = $(window).width(),
      windowHeight = $(window).outerHeight();

  if (windowWidth > 991 && windowHeight > footerHeight) {
    $(".site-wrapper-reveal").css({
      'margin-bottom': footerHeight + 'px'
    });
  }
  
  /* ========================================================================== */
  /*  When document is loading, do */
  /* ========================================================================== */
  varWindow.on('load', function() {
    AOS.init({
      once: true,
    });
  });

})(window.jQuery);
