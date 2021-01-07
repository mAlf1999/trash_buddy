<?php
    require('../db.php');
    session_start();
    // When form submitted, check and create user session.
    $value1=$_POST['num1'];
    $value2=$_POST['num2'];
    $value1=(float) $value1;
    $value2=(float) $value2;
    $type1=gettype($value1);
    $type2=gettype($value2);


    if ($type1=='float'|| $type2=='float') {
        $username =  $_SESSION['username'];
       
        $organic =$_POST['num1'];
        $organic=(float) $organic;
        $inorganic =$_POST['num2'];
        $inorganic=(float) $inorganic;
        $sack=$organic+$inorganic;
        $amount=$sack*50;
        
        $query    = "insert into customers (username,sacks,amount) values ('$username','$sack','$amount')";
        $result = mysqli_query($con, $query) ;
        
        if ($result) {
            
         header("Location: thankyou.php");
        } else {
            header("Location: error.php");
        }
        
    } 
    else{
        header("Location: error.php");
    }
?>