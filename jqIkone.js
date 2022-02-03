$(document).ready(function(){
    
    contWidth = parseFloat($('#center').css('width'), 10);
    iconWidth = parseFloat($('#search-icon').css('width'), 10);
    voiceWidth = parseFloat($('#voice-button').css('width'), 10) + parseFloat($('#voice-button').css('margin-left'), 10);
    formWidth = contWidth - iconWidth - voiceWidth;
    $('#search-form').css('width', formWidth+'px');
    $('#search-sug').css('width', formWidth+'px');

    divWidth = parseFloat($('.vlist').css('width'), 10);
    $('.vlist').css('height',divWidth/(16/9)+'px');

    $(".circle").click(function(){
      circle = $(this);
      circle.css('background-color', 'dimgray');
      circle.css('transition','all 1s ease');

      setTimeout(function(){
        circle.css('background-color', 'inherit');
        circle.css('border', '1px solid gray');
        circle.css('transition','empty');


      }, 250)


      setTimeout(function(){
        circle.css('border', 'none');
        $('#voice-button').css('background-color', '#181818');
      }, 500)
    });

    $('.video_container').css('width'
    ,$('#videoSekcija').css('width'));
    $('embed').css('width',$('#videoSekcija').css('width'));
    $('embed').css('height',((parseFloat($('embed').css('width'), 10))/(16/9))+'px')

});