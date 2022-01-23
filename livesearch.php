<?php

header('Content-type: text/html');

$q=$_GET["q"];

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

echo $izlaz;
?> 