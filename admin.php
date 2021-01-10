<?php
require('db.php');
include("auth_session.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/1042f3c8c3.js" crossorigin="anonymous"></script>
    <title>User Tab</title>
</head>
<body class='masterbg'>

  
    
    
<nav class=" navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="http://localhost/views/dashboard.php">
          <img src="homepage/img/logo.png" width="60" height="60" class="d-inline-block align-center" alt="Logo" loading="lazy">
          Trash Buddy
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
          aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navlinkcenter" id="navbarSupportedContent-333">
          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
              <a class="btn btn-outline-primary" href="../userdetails/usertab.php"><i class="fa fa-user-circle-o fa-lg">User</i></a>
              </a>
            </li>
            <li class="nav-item">
            <a class="btn btn-outline-success" href="homepage.php"><i class="fa fa-home"></i>Home</i></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-danger" href="../logout.php"><i class="fa fa-sign-out fa-lg">Sign Out</i></a>
                </li>
          </ul>
        </div>
      </nav>
 
 <div class="container">
     <br/>
     <form action="adminbackend.php" method="post">
        
             <?php
             include('db.php');
                 $sql_query = 'select customers.username , customers.sacks ,customers.date, customers.id, users.email, users.phone, users.address from customers,users where customers.username=users.username';
                 $result = mysqli_query($con, $sql_query);
             
             
             if(mysqli_num_rows($result) > 0){
                 // Fetch result rows as an associative array
                 while($row = mysqli_fetch_array($result)){
                     echo '<tr>
                     <table class="table table-hover bg-light text-dark ">
                     <thead>
                         <tr><th scope="col">Username</th>
                         <th scope="col">e-mail</th>
                         <th scope="col">phone</th>
                         <th scope="col">address</th>
                         <th scope="col"></th>
                         </tr>
                     </thead>
                     <tbody>';
                     echo "<td>". $row['username']."</td>".
                         "<td>". $row['email']."</td>".
                         "<td>". $row['phone']."</td>".
                         "<td>". $row['address']."</td>".

                         "<td><button type='submit' class='btn btn-outline-dark reserve-btn' value= '".$row['id']."' name='finished'>Picked Up</button></td>
                         </tr>";
                 }
             } else{

                 echo "<div class='text-big error-msg'><p >No more garbage to pick up</p></div>";
             }
             mysqli_close($con);
             ?>
         </table>
         </form>
  
 </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>