<?php

$izlaz='';
if(!empty($_REQUEST["q"])){
    $q = $_REQUEST["q"];

    if (strlen($q)>0) {
    $hint = '<ul>
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li></ul>';
    }
    else{
        $hint = '';
    }

    if ($hint=="") {
    $izlaz="no suggestion";
    } else {
    $izlaz=$hint;
    }
}
else{
    $izlaz = 'POST is empty';
}

echo $izlaz;
?> 