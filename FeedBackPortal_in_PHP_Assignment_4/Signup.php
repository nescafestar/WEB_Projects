<?php 
require_once './Database.php';
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
    <form action="Signup.php" method="POST">
    <?php include'errors.php'; ?>
      <div class="segment">
        <h2><b>STAY CONNECTED</b></h2>
        <h1>SIGN - UP</h1>
      </div>
      <label>
        <input type="text" name="username" placeholder="Username" required />
      </label>
      <label>
        <input type="text" name="regNo" placeholder="Reg no. XXXX-XXX-XXX" required />
      </label>
      <div id="connecting"></div>
      <label>
        <input type="text" name="email" placeholder="Email Address" />
      </label>
      <label>
        <input type="password" name="password" placeholder="Password" minlength="8" maxlength="100" required/>
      </label>
     <label>
        <input type="password" name="repassword" placeholder="Re-enter Password" minlength="8" maxlength="100"/>
      </label>
     
          <button class="signup-big-blue" type="submit" name="register">
            <i class="icon fas fa-lock">Sign up</i>
          </button>
      
          
      <div class="segment">
        <a href="./Index.php">already have an account? </a>
        <button class="login-sm-red unit-long" type="button">
          <a href="./Index.php"><i class="icon fas fa-arrow-right">Login </i>
          </a>
        </button>
       
      </div>
    </form>
  </body>
</html>
