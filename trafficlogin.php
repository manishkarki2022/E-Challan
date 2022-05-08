<?php
session_start();
if(isset($_POST['sub']))
{
    extract($_POST);
    include 'trafficconfig.php';
    $sql=mysqli_query($conn,"SELECT * FROM employees where name='$name' and password='md5($password)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
       
        $_SESSION["name"]=$row['name'];
        $_SESSION["password"]=$row['password']; 
        header("Location: home.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>