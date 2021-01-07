<?php
require('../db.php');
include("../auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1042f3c8c3.js" crossorigin="anonymous"></script>
    <title>Homepage</title>
</head>

<body>
    <div class="masterbg">
    
    <nav class=" navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="http://localhost/views/dashboard.php">
          <img src="logo.png" width="60" height="60" class="d-inline-block align-center" alt="Logo" loading="lazy">
          Trash Buddy
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
          aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
              <a class="btn btn-outline-primary" href="./user.php"><i class="fa fa-user-circle-o fa-lg">User</i></a>
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
        <form action="startdump.php" method="GET">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Organic</label>
          </div>
          <select name="num1" class="custom-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Inorganic</label>
          </div>
          <select name="num2" class="custom-select" id="inputGroupSelect01" required>
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
       
        <input name="submit" class="btn btn-success" type="submit" value="Confirm and proceed">
      </form>
      
      
 <?php
     
     
         if(isset($_GET["submit"]))   
         {
          $num1=$_GET["num1"];
          $num2=$_GET["num2"];
          $num3=$num1+$num2;
          $amount=$num3*50;
          include "../db.php";
          $u=$_SESSION['username'];
          
          $sql="update users set no_of_sack='$num3',amount='$amount' where username='$u'";
          $query=mysqli_query($con,$sql);
          if($query)
           echo "<script type='text/javascript'>alert('insertion successfully')</script>";
          else
           echo "<script type='text/javascript'>alert('insertion failed')</script>";
          
          
         }  
 ?>


         
 </div>
  
      </body>
      </html>