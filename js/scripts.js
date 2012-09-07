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

// Flexslider

      /* options =========

       animation: "fade",//String: Select your animation type, "fade" or "slide"
       slideDirection: "horizontal", //String: Select the sliding direction, "horizontal" or "vertical"
       slideshow: true,//Boolean: Animate slider automatically
       slideshowSpeed: 7000, //Integer: Set the speed of the slideshow cycling, in milliseconds
       animationDuration: 600, //Integer: Set the speed of animations, in milliseconds
       directionNav: true, //Boolean: Create navigation for previous/next navigation? (true/false)
       controlNav: true, //Boolean: Create navigation for paging control of each clide? Note: Leave true for
       manualControls usage
       keyboardNav: true,//Boolean: Allow slider navigating via keyboard left/right keys
       mousewheel: false,//Boolean: Allow slider navigating via mousewheel
       prevText: "Previous", //String: Set the text for the "previous" directionNav item
       nextText: "Next", //String: Set the text for the "next" directionNav item
       pausePlay: false, //Boolean: Create pause/play dynamic element
       pauseText: 'Pause', //String: Set the text for the "pause" pausePlay item
       playText: 'Play', //String: Set the text for the "play" pausePlay item
       randomize: false, //Boolean: Randomize slide order
       slideToStart: 0,//Integer: The slide that the slider should start on. Array notation (0 = first slide)
       animationLoop: true,//Boolean: Should the animation loop? If false, directionNav will received "disable"
       classes at either end
       pauseOnAction: true,//Boolean: Pause the slideshow when interacting with control elements,
       highly recommended.
       pauseOnHover: false,//Boolean: Pause the slideshow when hovering over slider, then resume when
       no longer hovering
       controlsContainer: "",//Selector: Declare which container the navigation elements should be appended too.
       Default container is the flexSlider element. Example use would be ".flexslider-container", "#container", etc.
       If the given element is not found, the default action will be taken.
       manualControls: "", //Selector: Declare custom control navigation. Example would be ".flex-control-nav li" or
       "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
       start: function(){},//Callback: function(slider) - Fires when the slider loads the first slide
       before: function(){}, //Callback: function(slider) - Fires asynchronously with each slider animation
       after: function(){},//Callback: function(slider) - Fires after each slider animation completes
       end: function(){}
       */

  if (jQuery().flexslider) {
    $('.flexslider').flexslider({
      controlNav:false,
      directionNav:true,
      animation:"slide",
      slideshow:true,
      slideshowSpeed:5600,
      animationDuration:600
    });


  $('#slider').flexslider({
    directionNav:false,
    keyboardNav:false
  });
  }

  }
}
})
(jQuery);
