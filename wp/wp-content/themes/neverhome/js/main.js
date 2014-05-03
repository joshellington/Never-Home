$(function() {
  if (window.innerWidth > 960) {
    setVideoEmbeds();
    setFixedHeader();
  } else {
    $('body').addClass('mobile');
  }
});

function setVideoEmbeds() {
  $('.video-image').vidembed({
    embed: false,
    youtube: {
      width: 960,
      height: 540
    },
    vimeo: {
      width: 960,
      height: 540
    },
    facebook: {
      width: 466,
      height: 540
    }
  }).click(function() {
    var embed = $(this).attr('data-embed'),
        embedWidth = $(this).attr('data-embed-width'),
        embedHeight = $(this).attr('data-embed-height');

    if (embed) {
      var iframe = '<div class="iframe-wrap" style="width:'+embedWidth+'px;height:'+embedHeight+'px;"><iframe src="'+embed+'" width="'+embedWidth+'" height="'+embedHeight+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allowtransparency="true"></iframe></div>';
      $.magnificPopup.open({
        items: {
          src: iframe,
          type: 'inline'
        },
        closeBtnInside: false,
        disableOn: function() {
          if( $(window).width() < 960 ) {
            return false;
          } 
          return true;
        }
      });

      return false;
    }
  });
}

function setFixedHeader() {
  $('body').addClass('desktop');
  header = $('header');
  header.height(window.innerHeight);
  marginTop = 0 - (header.find('.content').height() / 2);
  header.find('.content').css('margin-top', marginTop);
  $('.wrapper').css('margin-top', window.innerHeight);
}