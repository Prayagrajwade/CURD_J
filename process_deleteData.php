<?php
            include "DB.php";
            session_start();

            $Customer_id = $_POST['id'];

            $sql = "DELETE FROM Customer WHERE customer_id = $Customer_id";

if ($conn->query($sql) === TRUE) {
    $_SESSION["alertMessage"] = 1;
    echo json_encode(array("statusCode" => 200));
} else {
    echo json_encode(array("statusCode" => 201, "error" => $conn->error));
}

$conn->close();
?>




















