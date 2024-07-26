<?php
session_start();
include "DB.php";

$Customer_id = $_SESSION["id"];

$sql = "SELECT * FROM Customer WHERE customer_id = $Customer_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
    $address = $row['address'];
    $salary = $row['salary'];
    $job_role = $row['job_role'];
} else {
    echo "No customer found with ID: $Customer_id";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0; 
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="">
                <div class="form-container">
                <!-- action="processUpdate.php" -->
                    <form  method="post" onsubmit = "Delete(event)">
                        <h2 class="mb-4">Delete Customer</h2>
                        <input type="hidden" id="id" name="id" value="<?php echo $Customer_id; ?>" required>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?php echo $name; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address:</label>
                            <input type="text" id="address" name="address" class="form-control" value="<?php echo $address; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="salary" class="form-label">Salary:</label>
                            <input type="number" id="salary" name="salary" class="form-control" step="0.01" value="<?php echo $salary; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="job_role" class="form-label">Job Role:</label>
                            <input type="text" id="job_role" name="job_role" class="form-control" value="<?php echo $job_role; ?>" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                    <br>
                    <a href="insertData.php" class="btn btn-secondary">Insert Users</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="ProcessInsert.js"></script>
</body>
</html>
