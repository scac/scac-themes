/// <reference path="/js/jquery/jquery.min.js" />

$(document).ready(function () {
    //See if this main nav item has a child menu, and if yes, show it.
    if ($("li.current_page_item").find("ul.children")) {
        var $subnav = $("li.current_page_item, li.current_page_parent").find("ul.children");
        $subnav.css("display", "block");
    }
});