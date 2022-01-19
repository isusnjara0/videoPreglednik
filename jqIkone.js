$(document).ready(function(){
    
    contWidth = parseFloat($('#center').css('width'), 10);
    iconWidth = parseFloat($('#search-icon').css('width'), 10);
    voiceWidth = parseFloat($('#voice-button').css('width'), 10) + parseFloat($('#voice-button').css('margin-left'), 10);
    formWidth = contWidth - iconWidth - voiceWidth;

    $(".circle").click(function(){
      $(".pozadina").css('background-color', 'red');
      $('#search-form').css('width', '300px');
      
      alert('Ukupno: '+ contWidth+' icon: '+iconWidth+' voice: '+voiceWidth+' forma: '+formWidth);
    });
});