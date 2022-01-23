$(document).ready(function(){
    $('#search').keypress(function(){
        $.ajax({
            type: 'GET',
            url: 'livesearch.php',
            data:{
                name:$('#search').val(),
            },
            function(data, status){
                alert("Data: " + data + "\nStatus: " + status);
            },
            success:function(data){
                $('#livesearch').html(data);
            }

        });
    });
});