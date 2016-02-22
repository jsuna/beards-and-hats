<?php
session_start();  //Starting session
include('../../db/connectdb.php'); // Includes database connection
if(isset($_POST['action']))
{          
    if($_POST['action']=="add_new")
    {
        $recipe      = mysqli_real_escape_string($dbconnect,$_POST['recipe']);
        $ingredient   = mysqli_real_escape_string($dbconnect,$_POST['ingredient']);
        $quantity   = mysqli_real_escape_string($dbconnect,$_POST['quantity']);
        $measurement   = mysqli_real_escape_string($dbconnect,$_POST['measurement']);
        $strSQL     = mysqli_query($dbconnect,"select name from user where username='$username' and password='md5($password)'");
        $Results    = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
            header('Location: ../home/home.php');
        }
        else
        {
            $message = "Invalid email or password!!";
        }        
    }
    elseif($_POST['action']=="edit")
    {
        $name       = mysqli_real_escape_string($dbconnect,$_POST['name']);
        $username   = mysqli_real_escape_string($dbconnect,$_POST['username']);
        $email      = mysqli_real_escape_string($dbconnect,$_POST['email']);
        $password   = mysqli_real_escape_string($dbconnect,$_POST['password']);
        //$query      = "SELECT email FROM user where email='$email'";
        //echo($query);
        $result     = mysqli_query($dbconnect,"SELECT email FROM user where email='$email'" );
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
            mysqli_query($dbconnect,"INSERT into user(name,username,email,password) values('$name','$username','$email','md5($password)')");
            $message = "Signup Sucessfully!!";
        }
    }
}
?>
