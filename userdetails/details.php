
<?php

function getuserdata($username)
{
    include('../db.php');
    $array=array();
    $query=mysqli_query($con,"select * from users where username='$username'");
    while($r=mysqli_fetch_assoc($query))
    {
        $array['username']=$r['username'];
        $array['email']=$r['email'];
        $array['address']=$r['address'];
        $array['phone']=$r['phone'];


    }
    return $array;
}
function getId($username)
{
    include('../db.php');
    $query= "select username from users where username='$username'";
    $result = mysqli_query($con, $query);
    while($r=mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        return $r['username'];
    }
}
?>