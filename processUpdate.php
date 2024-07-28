<?php
session_start();
include "DB.php";

$response = [];

if (isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['address'], $_POST['salary'], $_POST['job_role'])) {
    $Customer_id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $job_role = $_POST['job_role'];

    $sql = "UPDATE Customer 
            SET name = '$name', email = '$email', address = '$address', salary = '$salary', job_role = '$job_role'
            WHERE customer_id = $Customer_id";

    if ($conn->query($sql) === TRUE) {
        $response["statusCode"] = 200;
        $_SESSION["isUpdate"] = 1;
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



