$(function(){
$('.carousel').carousel({
  interval: 6000
});
});
window.onpageshow = function () {
  $('.spinner-wrapper2').fadeOut('slow');
  $('.spinner-wrapper').fadeOut('slow');
};

$(function () {
  $(window).on('beforeunload', function () {
    $('.spinner-wrapper2').fadeIn('slow');
  });
 });
