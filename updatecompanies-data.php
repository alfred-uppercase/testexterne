<?php
$uid = $_POST['cid'];
$cname = $_POST['cname'];
$siren = $_POST['siren'];
$activityArea = $_POST['activityArea'];
$Address = $_POST['Address'];
$cp = $_POST['cp'];
$city = $_POST['city'];
$country = $_POST['country'];


include 'conn.php';

$sql = "UPDATE companies SET cname = '{$cname}', siren = '{$siren}', activityArea = '{$activityArea}',Address = '{$Address}',cp = '{$cp}',city = '{$city}',country = '{$country}' WHERE cid = {$uid}";
$result = mysqli_query($conn, $sql) or die("Echec.");

header("Location: http://localhost/testexterne/companies.php");

mysqli_close($conn);

?>
