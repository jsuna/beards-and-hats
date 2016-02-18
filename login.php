<?php
    include('login-code.php'); // Includes Login Script
    include('connectdb.php'); // Includes database connection

    if(isset($_SESSION["login"])){
    header("location: home.php");
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

<?php

    include('login-code.php'); // Includes Login Script
    include('connectdb.php'); // Includes database connection

    if(isset($_SESSION["login"])){
    header("location: home.php");
    }

?>
<?php

if(isset($_POST['action']))
{          
    if($_POST['action']=="login")
    {
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $strSQL = mysqli_query($connection,"select name from users where email='".$email."' and password='".md5($password)."'");
        $Results = mysqli_fetch_array($strSQL);
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
        $name       = mysqli_real_escape_string($connection,$_POST['name']);
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
        $password   = mysqli_real_escape_string($connection,$_POST['password']);
        $query = "SELECT email FROM users where email='".$email."'";
        $result = mysqli_query($connection,$query);
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
            mysql_query("insert into users(name,email,password) values('".$name."','".$email."','".md5($password)."')");
            $message = "Signup Sucessfully!!";
        }
    }
}

?>
<!-- Login and Signup forms -->
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Login</a></li>
    <li><a href="#tabs-2" class="active">Signup</a></li>

  </ul>                 
  <div id="tabs-1">
  <form action="" method="post">
    <p><input id="email" name="email" type="text" placeholder="Email"></p>
    <p><input id="password" name="password" type="password" placeholder="Password">
    <input name="action" type="hidden" value="login" /></p>
    <p><input type="submit" value="Login" /></p>
  </form>
  </div>
  <div id="tabs-2">
    <form action="" method="post">
    <p><input id="name" name="name" type="text" placeholder="Name"></p>
    <p><input id="email" name="email" type="text" placeholder="Email"></p>
    <p><input id="password" name="password" type="password" placeholder="Password">
    <input name="action" type="hidden" value="signup" /></p>
    <p><input type="submit" value="Signup" /></p>
  </form>
  </div>
</div>
</html>
