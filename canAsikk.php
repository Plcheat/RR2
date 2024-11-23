<?php
$latestversion = "1";
if(@$_GET['ca']){
  $currentversion = $_GET["ca"];
  if ($latestversion > $currentversion) {
    echo "GETUPDATE";
  }
}
?>
