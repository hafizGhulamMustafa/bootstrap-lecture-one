
<?php
     $ServerName = "localhost";
     $UserName = "root";
     $Password = "";
     $DBName = "result";
     $conn = mysqli_connect($ServerName, $UserName, $Password, $DBName);

     if ($conn){
         echo "Connection is success";
     }
     else{
         echo "connection is fail" . mysqli_connect_error();
     }

?>



















