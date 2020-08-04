<?php
include_once './serverLogic.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>

  <body>
    <form action="Index.php" method="POST">
    <?php include'errors.php'; ?>
      <div class="segment">
        <h3><b>GET CONNECTED</b>!</h3>
        <h1>LOG - IN</h1>
      </div>
      <!-- <label>
        <input type="text" name="regNo" placeholder="Registration No." />
      </label> -->
      <label>
        <input type="text" name="username" placeholder="Username" />
      </label>
      <label
        ><input type="password" name="password" placeholder="Password" minlength="8" maxlength="100"/>
      </label>
     
          <button class="login-big-blue" type="submit" name="login">
            <i class="icon fas fa-lock"> Log in</i>
          </button>
      
          
      <div class="segment">
        <button class="signup-sm-red" type="button">
          <a href="./Signup.php">
            <i class="icon fas fa-lock"> Sign up</i></a>
        </button>
        <button class="unit" type="button"><i class="icon fas fa-arrow-left"></i></button>
        <button class="unit" type="button"><i class="icon fas fa-bookmark"></i></button>
        <button class="unit" type="button"><i class="icon fas fa-question-circle"></i></button>
      </div>
    </form>
  </body>
</html>
