<?php

$snom = $_POST['snom'];
$sprenom = $_POST['sprenom'];
$semail = $_POST['semail'];
$spass = $_POST['spass'];
$srole = $_POST['srole'];
$scompanie = $_POST['scompanie'];


$conn = mysqli_connect("localhost","root","","apiteste") or die("Connexion erroner");

$sql = "INSERT INTO users(snom,sprenom,semail,spass,srole,scompanie) VALUES ('{$snom}','{$sprenom}','{$semail}','{$spass}','{$srole}','{$scompanie}')";
$result = mysqli_query($conn, $sql) or die("Echec");

header("Location: index.php");

mysqli_close($conn);

?>
