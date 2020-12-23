
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['username'])) {
        // removes backslashes
        $username = stripslashes($_POST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $password=md5($password);
        $phone = stripslashes($_POST['phone']);
        $phone = mysqli_real_escape_string($con, $phone);
        $address = stripslashes($_POST['address']);
        $address = mysqli_real_escape_string($con, $address);
        
        $query    = "INSERT into users (username, password, email,phone, address)
                     VALUES ('$username', '$password', '$email', '$phone', '$address')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='./'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    
    } 
    else {
        $error_code = mysqli_errno($con);
        switch ($error_code) {
        case 2002:
            echo 'connection error';
            break;
        case 1062:
            echo 'duplicate entry';
            break;
        case 1064:
            echo 'query syntax error';
            break;
        default:
            echo mysqli_error($con);
            break;
        } 
    }

    