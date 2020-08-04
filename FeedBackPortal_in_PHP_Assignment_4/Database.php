<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="survey";

// Create connection
$db= new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
//echo "DB Connected successfully -->> Database.php";
?> 