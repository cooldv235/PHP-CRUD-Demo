<?php 

include 'header.php';
include 'config.php';

$stu_id = $_GET['id'];
echo $stu_id;

// SQL QUERY
$sql = "DELETE FROM student WHERE sid={$stu_id}";

// RESULT
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud_html/index.php");


?>
