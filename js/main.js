$(function() {
  if (window.innerWidth > 960) {
    setFixedHeader();
  } else {
    $('body').addClass('mobile');
  }
});

function setFixedHeader() {
  $('body').addClass('desktop');
  header = $('header');
  header.height(window.innerHeight);
  marginTop = 0 - (header.find('.content').height() / 2);
  header.find('.content').css('margin-top', marginTop);
  $('.wrapper').css('margin-top', window.innerHeight);
}