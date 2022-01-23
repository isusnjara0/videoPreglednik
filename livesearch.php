<?php
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
  $response="no suggestion";
} else {
  $response=$hint;
}

echo $response;
?> 