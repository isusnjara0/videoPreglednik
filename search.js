$(document).ready(function(){
    $('#search').keyup(function(){
        if($('#search').val()!=''){
            $.ajax({
                type: 'POST',
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
        }
    });

    $("body").on('click','li', function(){
        $('#search').val($(this).html());
    });

    $('#search-icon').on('click', function(){
        $("#search-form").submit();

    });
});