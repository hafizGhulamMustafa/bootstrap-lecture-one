<?php
  $servarName = "localhost";
  $userName = "root";
  $password = "";
  $DdName = "result";

  $conn = mySqli_connect($servarName, $userName, $password,$DdName);

  if($conn){
    echo "connection success";
  } 
  else {
    echo "connection fail";
  }

?>