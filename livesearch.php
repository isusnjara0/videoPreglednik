<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

$q=$_GET["q"];

if (strlen($q)>0) {
  $hint="";
  $hint = '<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li></ul>';
}

if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

echo $response;
?> 