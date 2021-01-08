<?php
    require('../db.php');
    session_start();
    // When form submitted, check and create user session.
    $value1=$_POST['num1'];
    $value2=$_POST['num2'];
    // $type1=gettype($_POST['num1']);
    // $type2=gettype($_POST['num2']);

       

// echo $value1;
// echo $value2;

    if ( ($value1== 1 || $value1== 2|| $value1==3) || ($value2==1||$value2==2||$value2==3 )) {
        $username =  $_SESSION['username'];
       
        $organic =$_POST['num1'];
        $inorganic =$_POST['num2'];
        $sack=$organic+$inorganic;
        $amount=$sack*50;
        
        $query    = "insert into customers (username,sacks,amount) values ('$username','$sack','$amount')";
        $result = mysqli_query($con, $query) ;
        
        if ($result) {
            
         header("Location: thankyou.php");
        } else {
           
            header("Location: error.php");
    } }
    else{
        header("Location: error.php");
    }
?>