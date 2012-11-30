
jQuery(function ($) {
  $('#s').focus(function () {
    if ($(this).val() == "Search")
      $(this).val("");
  });

  $('#s').blur(function () {
    if ($(this).val() == "")
      $(this).val("Search");
  });

  $("#startAddr").focus(function () {
    if ($(this).val() == "From")
      $(this).val("");
  });

  $("#startAddr").blur(function () {
    if ($(this).val() == "")
      $(this).val("From");
  });


  $(window).load(function() {
      $(".flexslider").flexslider({
          animation: "slide", 
          slideshowSpeed: 7000
      });
  });

});