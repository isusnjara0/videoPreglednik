$(document).ready(function(){
    $('#search').keypress(function(){
        $.ajax({
            type: 'GET',
            url: 'livesearch.php',
            data:{
                name:$('#search').val(),
            },
            success:function(data){
                $('#livesearch').html(data);
            }

        });
    });
});