<?php
require('../db.php');
include("../auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/1042f3c8c3.js" crossorigin="anonymous"></script>
    <script src="realdump.js"></script>
    <title>Choose how much to dump</title>
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
            <a class="btn btn-outline-success" href="homepage.php"><i class="fa fa-home"></i>Home</i></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-danger" href="../logout.php"><i class="fa fa-sign-out fa-lg">Sign Out</i></a>
                </li>
          </ul>
        </div>
      </nav>
      <div class="container my-5 ">
      <form action="pay.php" method="post">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Organic</label>
          </div>
          <select name="num1" class="custom-select w-50" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value=1>One</option>
            <option value=2>Two</option>
            <option value=3>Three</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect02">Inorganic</label>
          </div>
          <select name="num2" class="custom-select w-50" id="inputGroupSelect02">
            <option selected>Choose...</option>
            <option value=1>One</option>
            <option value=2>Two</option>
            <option value=3>Three</option>
          </select>
          
        </div>
        <div class="input-group mb-3">
                              
                                 
            <label class="text-big"><B>Payment method</label>

            <select class="form-control">
                  <option value="">--Choose--</option>
                  <option value="bank">Online Payment</option>
                  <option value="cash">Cash</option>
                  
            </select>
        </div>
        <input  name="submit" class="btn btn-success" type="button" value="Confirm" onclick="confirm();">

        <input name="confirm"  class="btn btn-success" type="submit" value="Confirm and proceed" onclick="check();">
        
      </form>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>  
    </html>