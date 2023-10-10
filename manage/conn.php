<?php
define('ROOT_URL','http://localhost/amini/');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','subasayesh');
//require 'constants.php';
$mysqli = new mysqli("localhost","root","","subasayesh");
$mysqli ->set_charset("utf8");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit(); 
}
// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=subasayesh", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
//     }
// catch(PDOException $e)
//     {
//    // echo "Connection failed: " . $e->getMessage();
//     }
?>