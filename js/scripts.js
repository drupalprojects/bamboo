/**
 * @file
 * Misc JQuery scripts in this file
 */

(function ($) {

// Add drupal 7 code.
  Drupal.behaviors.miscBamboo = {
    attach:function (context, settings) {
// End drupal calls.

// Mobile toggle menu.
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

// prepend the post date before the h1.
  $(".date-in-parts")
    .prependTo(".not-front.page-node #post-content");

// global zebra stripes
  $(".front article:visible:even").addClass("even");
  $(".front article:visible:odd").addClass("odd");

// Set image captions for image field.
  $(".field-type-image img").each(function (i, ele) {
    var alt = this.alt;
      if ($("img-caption").length == 0) {
        $(this).closest(".field-type-image .field-item").append("<span " +
          "class='img-caption'>" + this.alt + "</span>");
        }
        else {
          $(this).closest(".field-type-image .field-item").append("");
        }
  });

// Add an "arrow" span to primary menus that are expanded.
  $('#main-menu ul li').each(function() {
    if ($(this).hasClass('expanded')) {
      $(this).closest('li').append("<span class='drop-arrow'></span>").html();
      }
  });

  }
}
})
(jQuery);
