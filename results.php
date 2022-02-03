<?php
    include 'header.html';
    if(!empty($_REQUEST['search_query'])){
        $var = $_REQUEST['search_query'];
        echo '<div>'.$var.'</div>';
    }
    if(!empty($_REQUEST['id'])){
        $var = $_REQUEST['id'];
        echo '<h1>'.$var.'</h1>';
    }
    include 'includes/ext-content/videopage.php';
    include 'footer.html';
?>