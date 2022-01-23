<?php
include 'db.php';
$izlaz='';
if(!empty($_REQUEST["name"])){
    $q = $_REQUEST["name"];
    $sql = "SELECT * FROM artist WHERE Name LIKE '".$q."%';"; 
    $result = $conn->query($sql);

    $hint = '';
    if ($result->num_rows > 0) {
        // output data of each row
        $hint = '<ul id="search-ul">';
        while($row = $result->fetch_assoc()) {
            $hint = $hint . '<li class="search-li px-3 py-1">' .$row["Name"]. "</li>";
        }
        $izlaz = $hint . '</ul>';
        //$izlaz = 'ima rezultata';
    }
    else{
        $izlaz = 'nema rezultata';
    }
    echo $izlaz;
    $conn->close();
}
?> 