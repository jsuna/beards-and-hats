<?php
    include('login-code.php'); // Includes Login Script
    include('connectdb.php'); // Includes database connection

    if(isset($_SESSION['login_user'])){
    header("location: profile.php");
    }
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
      
      <?php if($error){?>
          <div class="error"> <?php echo $error; ?> </div>
      <?php } ?>
    <form action=" " method="post">
        <div class="username">
            Username:
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="password">
            Password:
            <input type="text" name="password" placeholder="Password">
        </div>
        <div class="submit">
            <input type="submit" name="submit" value="Login">
        </div>
    </form>
  </body>
</html>
