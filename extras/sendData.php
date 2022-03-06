<?php
  echo $firstName = $_POST['firstName'];
  echo $lastName  = $_POST['lastName'];
  echo $email  = $_POST['email'];

        $sarvername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "result";

        $conn = mysqli_connect($sarvername, $username, $password, $dbname);

        $sql = "insert into results (firstName, lastName, email) values ('{$firstName}','{$lastName}', '{$email}')";

        $result = mySqli_query($conn, $sql) or die("Querry unsuccessfully");

        header("location: http://localhost/php-lecture-one/extras/index.php");

        mysqli_close($conn);