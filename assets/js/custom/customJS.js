// open menu
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".navWrapper").toggleClass("open");
    });
});
// close menu
$(function() {
    $("#closeMenu").click(function(e){
        $(".navWrapper").toggleClass("open");
    });
});
// Hamburger menu animation
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
$(function() {
    $("#closeMenu").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
// Toggle search
$(function() {
    $("#search").click(function(e){
        $("#searchFormWrap").toggleClass("searchOpen");
    });
});
// Toggle search icon
$(function() {
    $("#search").click(function(e){
        $("#search").toggleClass("iconOpacity");
    });
});
$(function() {
    $("#btnCloseUpdateBrowser").click(function(e){
        $("#outdated").addClass("none");
        	e.stopPropagation();
    });
});
// Fade out hero title on scroll
$(window).scroll(function(){
    $(".headerOuterWrap").css("opacity", 1 - $(window).scrollTop() / 250);
  });
