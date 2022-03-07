<?php

    $id = $_GET['id'];
         $sarvername = "localhost";
         $username = "root";
         $password = "";
         $dbname = "result";
 
         $conn = mysqli_connect($sarvername, $username, $password, $dbname);
 
         $sql = "delete from results where id={$id}";
 
         $result = mySqli_query($conn, $sql) or die("Querry unsuccessfully");
 
         header("location: http://localhost/php-lecture-one/extras/index.php");
 
         mysqli_close($conn);

?>