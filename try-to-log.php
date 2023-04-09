<?php
if(!isset($_SESSION)) { session_start();} 
// require("classes/UserClass.php");
// $login = new UserClass();

// if($login->isLoggedIn() == true){
//   header('Location: index.php');
// } else {
//   include("login.php");
// }
include 'conn.php';
$semail = $_POST['semail'];
$spass = $_POST['spass'];
$sql = "SELECT * FROM users WHERE semail = '{$semail}', spass = '{$spass}'";
$result = mysqli_query($conn, $sql) or die("Echec");
$validate = $result->num_rows;
$fetch = $result->fetch_array();
if($validate > 0){
  echo "Success";
  session_start();
  $_SESSION['sid'] = $fetch['sid'];
}else{
  echo "Error";
}