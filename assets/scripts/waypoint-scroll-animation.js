/*!
 * Waypoint Animation - Animate element using animate.css and waypoint.
 * For details, see https://spin.atomicobject.com/2015/05/31/scroll-anmiation-css-waypoints/
 */

$(document).ready(function(){
 
  // hide our element on page load
  $('artist-image').css('opacity', 0);
 
  $('artist-image').waypoint(function() {
      $('artist-image').addClass('rotateIn');
  }, { offset: '45%' });
 
});
