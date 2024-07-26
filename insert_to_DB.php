<?php

session_start();
include "DB.php";


$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$job_role = $_POST['job_role'];

$sql = "INSERT INTO Customer (name, email, address, salary, job_role) 
        VALUES ('$name', '$email', '$address', '$salary', '$job_role')";

if ($conn->query($sql) === TRUE) {
    $_SESSION["isInserted"] = 1;
    #header("Location:ShowData.php");
    echo json_encode(array("statusCode"=>200));
    
} else {
    echo json_encode(array("statusCode"=>201));
}

mysqli_close($conn);


?>


