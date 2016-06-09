/*!
 * Waypoint Animation - Animate element using animate.css and waypoint.
 * For details, see https://spin.atomicobject.com/2015/05/31/scroll-anmiation-css-waypoints/
 */

(function($) {
    "use strict"; // Start of use strict

  // jQuery to hide our element on page load
  $('#facebookIcon').css('opacity', 0);

  // jQuery to rotateIn animate.css animation upon waypoint
  $('#facebookIcon').waypoint(function() {
      $('#facebookIcon').addClass('rotateIn');
  }, { offset: '45%' });

})(jQuery); // End of use strict
