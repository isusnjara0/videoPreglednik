$(document).ready(function(){
    
    contWidth = parseFloat($('#center').css('width'), 10);
    iconWidth = parseFloat($('#search-icon').css('width'), 10);
    voiceWidth = parseFloat($('#voice-button').css('width'), 10) + parseFloat($('#voice-button').css('margin-left'), 10);
    formWidth = contWidth - iconWidth - voiceWidth;
    $('#search-form').css('width', formWidth+'px');

    $(".circle").click(function(){
      $(".pozadina").css('background-color', 'red');
      
      alert('Ukupno: '+ contWidth+' icon: '+iconWidth+' voice: '+voiceWidth+' forma: '+formWidth);
    });
});