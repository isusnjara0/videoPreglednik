<?php
    include 'header.html';
    if(!empty($_REQUEST['search_query'])){
        $var = $_REQUEST['search_query'];
        echo '<div>'.$var.'</div>';
    }
    include 'footer.html';
?>