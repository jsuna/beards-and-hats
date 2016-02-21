<?php
    include('login-code.php'); // Includes Login Script

    if(isset($_SESSION["login"])){
    header("location: ../home/home.php");
    }
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
  
    <body>
        <!-- Login and Signup forms -->
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Login</a></li>
                <li><a href="#tabs-2" class="active">Signup</a></li>
            </ul>                 
            <div id="tabs-1">
                <form action="" method="post">
                    <p><input id="username" name="username" type="text" placeholder="Username"></p>
                    <p><input id="password" name="password" type="password" placeholder="Password">
                    <input name="action" type="hidden" value="login" /></p>
                    <p><input type="submit" value="Login" /></p>
                </form>
            </div>
            <div id="tabs-2">
                <form action="" method="post">
                    <p><input id="name" name="name" type="text" placeholder="Name"></p>
                    <p><input id="username" name="username" type="text" placeholder="Username"></p>
                    <p><input id="email" name="email" type="text" placeholder="Email"></p>
                    <p><input id="password" name="password" type="password" placeholder="Password">
                    <input name="action" type="hidden" value="signup" /></p>
                    <p><input type="submit" value="Signup" /></p>
                </form>
                <?php echo($message)?>
            </div>
        </div>
    </body>
</html>
