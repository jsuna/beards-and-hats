<?php

session_start();  //Starting session

include('connectdb.php'); // Includes database connection

if(isset($_POST['action']))
{          
    if($_POST['action']=="login")
    {
        $email      = mysqli_real_escape_string($dbconnect,$_POST['username']);
        $password   = mysqli_real_escape_string($dbconnect,$_POST['password']);
        $strSQL     = mysqli_query($dbconnect,"select name from users where username='".$username."' and password='".md5($password)."'");
        $Results    = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
            $message = $Results['name']." Login Sucessfully!!";
        }
        else
        {
            $message = "Invalid email or password!!";
        }        
    }
    elseif($_POST['action']=="signup")
    {
        $name       = mysqli_real_escape_string($dbconnect,$_POST['name']);
        $username   = mysqli_real_escape_string($dbconnect,$_POST['username']);
        $email      = mysqli_real_escape_string($dbconnect,$_POST['email']);
        $password   = mysqli_real_escape_string($dbconnect,$_POST['password']);
        $query      = "SELECT email FROM users where email='$email'";
        echo($query);
        $result     = mysqli_query($dbconnect,$query);
        echo($result);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            $message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
        }
        else
        {
            mysql_query("INSERT into users(name,email,password) values('$name','$email','md5($password)')");
            $message = "Signup Sucessfully!!";
        }
    }
}
?>
