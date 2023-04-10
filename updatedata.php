<?php
$uid = $_POST['sid'];
$snom = $_POST['snom'];
$sprenom = $_POST['sprenom'];
$semail = $_POST['semail'];
$spass = $_POST['spass'];
$srole = $_POST['srole'];
$scompanie = $_POST['scompanie'];


include 'conn.php';

$sql = "UPDATE users SET snom = '{$snom}', sprenom = '{$sprenom}', semail = '{$semail}', spass = '{$spass}', srole = '{$srole}',scompanie = '{$scompanie}' WHERE sid = {$uid}";
$result = mysqli_query($conn, $sql) or die("Echec.");

header("Location: index.php");

mysqli_close($conn);

?>
