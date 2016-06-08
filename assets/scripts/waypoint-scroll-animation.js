/*!
 * Smooth Scrolling - jQuery for Smooth Scrolling (https://css-tricks.com/snippets/jquery/smooth-scrolling/)
 * For details, see https://css-tricks.com/snippets/jquery/smooth-scrolling/
 */

$(document).ready(function(){
 
  // hide our element on page load
  $('#hand').css('opacity', 0);
 
  $('#hand').waypoint(function() {
      $('#hand').addClass('rotateIn');
  }, { offset: '45%' });
 
}
