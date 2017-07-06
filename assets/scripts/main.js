/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {
  $(document).foundation();

  $(document).ready(function() {


    $('.owl-plogos').owlCarousel({
        margin: 50,
        dots: false,
        autoWidth: true,

        responsive:{
          0:{
              items:3,
          },
          640: {
              items:4,
          },
          768: {
              items:5,
          },
          1024: {
            items:6,
          },
          1240: {
            items:7,
          }
        }
    });


  });

})(jQuery); // Fully reference jQuery after this point.
