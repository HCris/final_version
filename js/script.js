/*Serghei Mitrosin js*/
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active_menu");
    $(this).addClass("active_menu");
});
});