<?php
session_start();
include "DB.php";

$response = [];

if (isset($_POST['name'], $_POST['email'], $_POST['address'], $_POST['salary'], $_POST['job_role'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $job_role = $_POST['job_role'];

    $sql = "INSERT INTO Customer (name, email, address, salary, job_role) VALUES ('$name', '$email', '$address', '$salary', '$job_role')";

    if ($conn->query($sql) === TRUE) {
        $response["statusCode"] = 200;
    } else {
        $response["statusCode"] = 201;
        $response["error"] = $conn->error;
    }
} else {
    $response["statusCode"] = 400;
    $response["error"] = "Missing required parameters";
}

$conn->close();
echo json_encode($response);
?>
