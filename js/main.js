$(function() {
  $(window).on("scroll", function() {
    if($(window).scrollTop() > 10) {
      $(".navbar").addClass("menuEffect");
    } else {
      $(".navbar").removeClass("menuEffect");
    }
  });
});