<?php

$conn = mysqli_connect("localhost", "root", "", "air_trading");

if(mysqli_connect_error())
{
	die("Connection Failed: ". mysqli_connect_error());
    
}

    $username = $_REQUEST['username'];
    $Email = $_REQUEST['email_id'];
    $password = $_REQUEST['password'];
    
    $sql_query="INSERT INTO user (username,email_id,pass) VALUES ('$username','$Email','$password')";
    
    $result=mysqli_query($conn,$sql_query);



    if($result==1)
    {
        $login=true;
        echo "<script> alert('Logged In Successfully!!! ')</script>";
        session_start();
        $_SESSION['name']=$username;
        header("Location: dashboard.php");
        exit();
    }
    else{

       header("Location: error.html");
    }
mysqli_close($conn);
?>