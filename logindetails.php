<?php

$conn = mysqli_connect("localhost", "root", "", "air_trading");

if(mysqli_connect_error())
{
	die("Connection Failed: ". mysqli_connect_error());
    
}

    $username = $_POST['username'];
    $pasword = $_POST['password'];
    
    
    $sql_query="SELECT * FROM user WHERE username ='$username' AND pass='$password'";
    
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