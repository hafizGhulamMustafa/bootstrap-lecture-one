<?php

    $ServerName = "localhost";
    $UserName = "root";
    $Password = "";
    $DBName = "ali";
    $conn = mysqli_connect($ServerName, $UserName, $Password,$DBName );
    if($conn){
        echo "DB Connection Success";
    } else{
        echo "Connection Failed" mysqli_connect_error();

    }

?>