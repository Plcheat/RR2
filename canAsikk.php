<?php
$latestversion = "3";
if(@$_GET['ca']){
  $currentversion = $_GET["ca"];
  if ($latestversion > $currentversion) {
    echo "GETUPDATE";
  }
}
?>
