<?php

include 'config.php';

$student = [
    'name' => $_POST['sname'],
    'address' => $_POST['saddress'],
    'class' => $_POST['class'],
    'phone' => $_POST['sphone'],
];

// INSERT RECORD IN DATABASE
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('{$student['name']}','{$student['address']}','{$student['class']}','{$student['phone']}')";

$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

header('Location: http://localhost/crud_html/index.php');

mysqli_close($conn);

// echo "<pre>";var_dump($student);


