// open menu
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".navWrapper").toggleClass("open");
        	e.stopPropagation();
    });
});
// close menu
$(function() {
    $("#closeMenu").click(function(e){
        $(".navWrapper").toggleClass("open");
        	e.stopPropagation();
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
        	e.stopPropagation();
    });
});
// Toggle search icon
$(function() {
    $("#search").click(function(e){
        $("#search").toggleClass("iconOpacity");
        	e.stopPropagation();
    });
});
// Fade out hero title on scroll
$(window).scroll(function(){
    $(".headerOuterWrap").css("opacity", 1 - $(window).scrollTop() / 250);
  });
// detect IE and display an error message prompting users to upgrade to a modern browser
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<p style="text-align: center; position: relative; z-index: 99999; background-color: #f4a81d; color: #000000;">You are using a browser no longer supported by Microsoft. For the best and most secure viewing experience, please use a modern browser like <a href="https://www.google.com/chrome/" target="_blank" rel="noreferrer" style="color: #000000;">Chrome</a> or <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank" rel="noreferrer" style="color: #000000;">Firefox</a>.</p>');
}
