<link rel="stylesheet" href="logfail.css">

<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_POST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: homepage/homepage.php");
        } else {
            echo "  <h3>Incorrect Username/password.</h3><br>
                 <div class='form'>
                 <a href='index.html'> <p class='link btn'>Click here to Login again.</p></a>
                  </div>";
        }
    } 
?>
    
    
