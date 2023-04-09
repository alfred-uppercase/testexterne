<?php

$stu_id = $_GET['id'];

include 'conn.php';

$sql = "DELETE FROM users WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: index.php");

mysqli_close($conn);

?>
