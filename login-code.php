<?php
session_start();  //Starting session

$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        /* My understanding is if username OR password is blank give error 
        message 'Username or Password is invalid' otherwise POST username and password */
        echo $username;
        echo $password;
        //TODO connect to Database
    }
}
?>