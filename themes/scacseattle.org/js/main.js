
jQuery(function($) {
  $('#s').focus(function(){
    if($(this).val() == "Search")
      $(this).val("");
  });

  $('#s').blur(function(){
    if($(this).val() == "")
      $(this).val("Search");
  })
});