<?php
include "config.php";
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$age = $_POST['age'];
$ht = $_POST['ht'];
$job = $_POST['job'];
if(isset($fn) && isset($ln) && isset($age) && isset($ht) && isset($job)){
  $res2 = $mysqli->query("insert into person values('','$fn','$ln','$age','$ht','$job')");
  if($res2){
    echo "Success Post Data";
  } else{
    echo "Fail Post Data";
  }
} else{
  echo "Error Post Data";
}
?> 