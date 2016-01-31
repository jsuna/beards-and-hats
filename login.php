<?php
    include('login-code.php'); // Includes Login Script

    if(isset($_SESSION['login_user'])){
    header("location: profile.php");
    }
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <form action=" " method="post">
        <div class="username">
            Username:
            <input type="text" name="username" value="Username">
        </div>
        <div class="password">
            Password:
            <input type="text" name="password" value="Password">
        </div>
        <div class="submit">
            <input type="submit" value="Login">
        </div>
    </form>
  </body>
</html>
