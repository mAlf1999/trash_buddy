<?php
require('../db.php');
include("../auth_session.php");
require ('details.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/1042f3c8c3.js" crossorigin="anonymous"></script>
    <title>User Tab</title>
</head>
<body >
<nav class=" navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="http://localhost/views/dashboard.php">
          <img src="../homepage/img/logo.png" width="60" height="60" class="d-inline-block align-center" alt="Logo" loading="lazy">
          Trash Buddy
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
          aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
              <a class="btn btn-outline-primary" href="usertab.php"><i class="fa fa-user-circle-o fa-lg">User</i></a>
              </a>
            </li>
            <li class="nav-item">
            <a class="btn btn-outline-success" href="../homepage/homepage.php"><i class="fa fa-home"></i>Home</i></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-danger" href="../logout.php"><i class="fa fa-sign-out fa-lg">Sign Out</i></a>
                </li>
          </ul>
        </div>
      </nav>
  
    
        <?php if(isset($_SESSION['username']))
        
            $userdata=getuserdata($_SESSION['username']);
            
        
        ?>

        <table class="table table-hover table-dark usertable w-50 mx-auto my-5">
  <thead>
    <tr>
      
      <th scope="col">Username</th>
      <th scope="col">e-mail</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><?=$userdata['username']?></td>
      <td><?=$userdata['email']?></td>
      <td><?=$userdata['phone']?></td>
      <td><?=$userdata['address']?></td>

    </tr>
    
</table>
        <!-- <div id="wrapper">
            <div id="email">
                <h4>email</h4>

            </div>
            <div id="phone">
                <h4>phone:</h4>
            </div>
            <div id="address">
                <h4>address</h4>
            </div>
        </div> --> 
        <!-- < }
    </div> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>