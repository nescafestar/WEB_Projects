<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once './Database.php';

  $username ="root";
  $password="";
  $regNo="";
  $email = "";
  $errors = array();

// when the register button is clicked
if(isset($_POST['register'])){
    
    // storring all values except password -in lower case 
    $username = mysqli_real_escape_string($db,
    strtolower($_POST['username']));

    $regNo=mysqli_real_escape_string($db,
    strtolower($_POST['regNo']));

    $email= mysqli_real_escape_string($db,
    strtolower($_POST['email']));

    $password=mysqli_real_escape_string($db,
    $_POST['password']);
    
    $re_password=mysqli_real_escape_string($db,
    $_POST['repassword']);

  // ensure that form fields are filled properly
  if (empty($username)){
    array_push($errors,"Username is required");
  }
  if (empty($email)){
    array_push($errors,"Email is required");
  }
  if (empty($password)){
    array_push($errors,"Password is required");
  }

  if($password != $re_password){
    array_push($errors,"The two passwords do not match");
  }

  // if there are no errors, save user in Database
  if(count($errors) == 0){
    $secure_password = md5($password);
    $sql ="INSERT INTO users (username,regno,passwrd,email) 
            VALUES('$username','$regNo','$secure_password','$email')";
 
     // echo "Query --->>>".$query;
     $result =mysqli_query($db,$sql);
    
     //echo "RESULT OBTAINED-->>".$result;
     if($result){

        $_SESSION["regno"] = $row_value['regno'];  // s_ is a convention to indicate its session variable   
        $_SESSION["username"] = $row_value['username']; 
        $_SESSION["s_is_authenicated"] = true; 
        header('Location: index.php');
        exit;
     } 
     else 
     echo "<div><p>Not Registered!</p></div>";
  }
}


// Log user in from login page
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db,strtolower($_POST['username']));
  $password = mysqli_real_escape_string($db,$_POST['password']);

  // ensure that form fields are filled properly
  if (empty($username)){
    array_push($errors,"Username is required");
  }
  if (empty($password)){
    array_push($errors,"Password is required");
  }

  if (count($errors) == 0) {

    if($username=="admin" && $password=="admin123"){
      $_SESSION['username']="admin";
      $_SESSION['success']="You Loggd in as Admin";
      $_SESSION['password']="admin123";
      header('location: ./view.php');
      exit;
    }

    $password = md5($password); //encrypt password before comparing with database
    $query = "SELECT * FROM users WHERE username='$username' AND passwrd='$password'";
    
    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result) ==1){
      
      // log user in
      $_SESSION['username'] = $row_value['username'];
      $_SESSION['password']=$password;
      $_SESSION['success'] = "Logged in successfully";
      $_SESSION['s_is_authenicated ']==true;
      
      if(isset($_SESSION['success'])){
        
     
        header('location: ./feedback.php');
        exit;
      }else{
        header('location: ./index.php');
      }
      
    }
    else{
          array_push($errors, "Wrong username and/or password");
    }
  }



// if submit on feedback form is pressed
if(isset($_POST['submit'])){// $id= $_SESSION['userid'];
    $res1= $_POST['select-r1'];
    $res2= $_POST['select-r2'];
    $res3= $_POST['select-r3'];
    $remarks= $_POST['responseTxt'];

    // echo $res1,$res2,$res3,$remarks;

  // ensure that form fields are filled properly
  if (empty($res1)){
    array_push($errors,"Question1 is required");
  }
  if (empty($res2)){
    array_push($errors,"Question2 is required");
  }
  if (empty($res3)){
    array_push($errors,"Question3 is required");
  }
  // if there are no errors, save user in Database

  if(count($errors) == 0){
    $activeuser = $_SESSION['username'];
    $sql = 'INSERT INTO responses ( "username", "Res1", "Res2", "Res3", "Remarks") 
                   VALUES ( '."$username".','."$res1".','."$res2".','."$res1".','."$remarks".')';
    mysqli_query($db,$sql);
    
    $_SESSION['success'] = "logged in";
header('location: .Index.php');
    
  }
}

// Logout
if(isset($_GET['logout'])){
  unset($_SESSION['username']);
  session_destroy();
  header('location: Index.php');
  exit;
}

//admin view
$ResponseQuery = "SELECT * FROM responses";

$results = mysqli_query($db, $ResponseQuery);
if($results === false){
  echo mysqli_error($db);
}
elseif(mysqli_num_rows($result)>0) {
  $data_pool = mysqli_fetch_all($results, MYSQLI_ASSOC);
}


function set_background_color_class($val){
  switch($val){
    case 1:
      return 'q1';
      break;
    case 2:
      return 'q2';
      break;
    case 3:
      return 'q3';
      break;
    case 4:
      return 'q4';
      break;
  }
}
}

?>
