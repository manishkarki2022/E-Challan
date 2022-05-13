<?php
session_start();
if(isset($_POST['sub']))
{
    extract($_POST);
    include 'trafficconfig.php';
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql=mysqli_query($conn,"SELECT * FROM employees where name='{$name}' and password='{$password}'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
       
        $_SESSION["name"]=$row['name'];
        $_SESSION["password"]=$row['password']; 
        header("Location: http://localhost/new%20Challan/Traffic/trafficdashboard.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>