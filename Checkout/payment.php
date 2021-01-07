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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    <script src="https://kit.fontawesome.com/1042f3c8c3.js" crossorigin="anonymous"></script>
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
        <br>
     <form action="#">
     <div class="products call-to-action">
      <div class="container">
        <ul class="list-group list-group-flush">
          <?php
           include "../db.php";
           $u=$_SESSION['username'];
           $sql="select amount from users where username='$u'";
           $v=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($v))
            {
              $amount=$row["amount"];
            }
           ?>


          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>You have to pay</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong><?php 
                          echo $amount;
                          ?>
                         </strong>
                    </div>
               </div>
          </li>
        </ul>
                   <br>
                    <div class="row">


                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                              
                                 
                                  <label class="container"><B>Payment method</label>

                                  <select class="form-control">
                                       <option value="">--Choose--</option>
                                       <option value="bank">Online Payment</option>
                                       <option value="cash">Cash</option>
                                       
                                  </select>
                             </div>
                        
                   </div>
                 </div>
                   <input class="btn btn-success" type="submit" value="Confirm">
                 </form>


</body>
          
</html>