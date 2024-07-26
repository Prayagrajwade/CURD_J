<?php
session_start();
include "DB.php";

   


    #$Customer_id = $_SESSION["id"];
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
        echo json_encode(array("statusCode"=>200));
        $_SESSION["isUpdate"] = 1;
        
    } else {
        echo json_encode(array("statusCode"=>201));
    }


$conn->close();
?>


