
<?php 
 include 'DatabaseHelper.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BS5</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <header>
        <ul class="nav bg-dark p-2">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>

        </ul>
    </header>
    <main>
        <div>
          <?php
         

          $sql = "select * from results";

          $result = mySqli_query($conn, $sql) or die("Querry unsuccessfully");

          if(mysqli_num_rows($result) > 0){

          
          ?>
            <table class="table bg-success text-white table-bordered">
                <tr>
                    <th>id</th>
                    <th>First Name</th>
                    <th>last name</th>
                    <th>email</th>
                </tr>
                <tbody>
                  <?php
                  while($row = mysqli_fetch_assoc($result)){

                  ?>
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['firstName'];?></td>
                    <td><?php echo $row['lastName'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td>
                        <button class="btn btn-primary m-1" ><a href="" class="link link-dark">Edit</a></button>
                        <button class="btn btn-primary m-1"><a href='delete.php?id=<?php echo $row['id']; ?>' class="link link-dark">Delete</a></button>
                  </td>
                  </tr>
                  <?php }?> 
                </tbody>
            </table>
            <?php } else {echo "No record found";} ?>
        </div>
    </main>
    <footer>


    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- <script src="js/bootstrap.js"></script> -->
</body>

</html>