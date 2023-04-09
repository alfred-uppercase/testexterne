<?php
if(!isset($_SESSION)) { session_start();} 
$stu_id = $_GET['id'];

include 'conn.php';

$sql = "DELETE FROM companies WHERE cid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Erreur");

header("Location: companies.php");

mysqli_close($conn);

?>
