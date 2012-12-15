
jQuery(function ($) {

  /*** Search Box ***/
  $('#s').focus(function () {
    if ($(this).val() == "Search")
      $(this).val("");
  });

  $('#s').blur(function () {
    if ($(this).val() == "")
      $(this).val("Search");
  });


  /*** Address Box ***/
  $("#startAddr").focus(function () {
    if ($(this).val() == "From")
      $(this).val("");
  });

  $("#startAddr").blur(function () {
    if ($(this).val() == "")
      $(this).val("From");
  });

  /*** Navbar Hovers ***/
  $('.nav-item').hover(
    function () {
      $(this).children("a").children("span").addClass("nav_hover");
    },
    function () {
      $(this).children("a").children("span").removeClass("nav_hover");
    }
  );


  $(window).load(function() {
      $(".flexslider").flexslider({
          animation: "slide", 
          slideshowSpeed: 7000
      });
  });

});