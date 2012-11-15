/**
 * @file
 * Misc JQuery scripts in this file
 */

(function ($) {

//add drupal 7 code
  Drupal.behaviors.replsearchtermsTheme = {
    attach:function (context, settings) {
//end drupal calls

// mobile menu
  $('.nav-toggle').click(function () {
    $('#main-menu div ul:first-child').slideToggle(250);
      return false;
  });
  if (($(window).width() > 767) || ($(document).width() > 767)) {
    $('#main-menu li').mouseenter(function () {
      $(this).children('ul').css('display', 'none').stop(true, true).slideToggle(250).css('display', 'block')
        .children('ul').css('display', 'none');
    });
    $('#main-menu li').mouseleave(function () {
      $(this).children('ul').stop(true, true).fadeOut(250).css('display', 'block');
    })
  }
  else {
    $('#main-menu li').each(function () {
      if ($(this).children('ul').length) {
        $(this).append('<span class="drop-down-toggle"><span class="drop-down-arrow"></span></span>');
      }
    });
    $('.drop-down-toggle').click(function () {
      $(this).parent().children('ul').slideToggle(250);
    });
  }

// prepend the post date before the H1.
  $(".date-in-parts")
    .prependTo(".not-front.page-node #post-content");

  }
}
})
(jQuery);
