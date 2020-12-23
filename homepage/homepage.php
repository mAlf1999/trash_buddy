<?php
require("../auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1042f3c8c3.js" crossorigin="anonymous"></script>
    <title>Homepage</title>
</head>

<body>
    <div class="masterbg">
    <!-- <nav class="navbar background">
        <ul class="nav-list">
            <div class="logo"><img src="img/logo.png" alt="logo"></div>
            <li><a href="#home">Home</a></li>
            <li><a href="#account">MyAccount</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About Us</a></li>

        </ul>
        <div class="rightNav">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
    </nav> -->
    <nav class=" navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="http://localhost/views/dashboard.php">
          <img src="img/logo.png" width="60" height="60" class="d-inline-block align-center" alt="Logo" loading="lazy">
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



    <section class="background firstSection">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">The right way to dump</p>
                <p class="text-small.">The new and easy way to dumpThis is probably the best way to dump trash.its easy and simple to use</p>
                    <div class="buttons">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Start Dumping</button>
                    </div>
            </div>
            <div class="secondHalf">
                <img src="img/logo.png" alt="trash can image">
            </div>
        </div>
    </section>
    <section class="secRight" id="about">
        <!-- <div class="paras">
        <p class="sectionTag text-big">The end of improper waste disposal</p>
        <p class="sectionSubTag text-small">Waste management (or waste disposal) includes the activities and actions required to manage waste from its inception to its final disposal.[1] This includes the collection, transport, treatment and disposal of waste, together with monitoring and regulation of the waste management process.

            Waste can be solid, liquid, or gas and each type has different methods of disposal and management. Waste management deals with all types of waste, including industrial, biological and household. In some cases, waste can pose a threat to human health.[2] Health issues are associated throughout the entire process of waste management. Health issues can also arise indirectly or directly. Directly, through the handling of said waste, and indirectly through the consumption of water, soil and food. Waste is produced by [3]human activity, for example, the extraction and processing of raw 
        </p>
    </div> -->
        <div class="thumbnail">
            <!-- <img src="img/img.png" alt="thumbnail" class="imgFluid"> -->
        </div>
    </section>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>