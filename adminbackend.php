<?php
    require('db.php');
    session_start();
    
    if (isset($_POST['finished'])) {

    
        
        $id=$_POST['finished'];
        $query    = "delete from customers where id='$id'";
        $result = mysqli_query($con, $query) ;
        
        if ($result) {
            
            header("Location: admin.php");
        } 
        else {
         
            header("Location: google.com");

        }  
    }
        else 
        {
            header("Location: google.com");

        }
?>