<?php

$cname = $_POST['cname'];
$siren = $_POST['siren'];
$activityArea = $_POST['activityArea'];
$Address = $_POST['Address'];
$cp = $_POST['cp'];
$city = $_POST['city'];
$country = $_POST['country'];

$conn = mysqli_connect("localhost","root","","apiteste") or die("Connexion erroner");

$sql = "INSERT INTO companies(cname,siren,activityArea,Address,cp,city,country) VALUES ('{$cname}','{$siren}','{$activityArea}','{$Address}','{$cp}','{$city}','{$country}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/testexterne/companies.php");

mysqli_close($conn);

?>
