<?php
include "DB.php";
session_start();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Customer";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_SESSION['alertMessage'])) {
            echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>User Deleted</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            unset($_SESSION['alertMessage']);
        }

        if (isset($_SESSION['isUpdate'])) {
            echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>User Updated</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            unset($_SESSION['isUpdate']);
        }

        if (isset($_SESSION['isInserted'])) {
            echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>User Added</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            unset($_SESSION['isInserted']);
        }
        ?>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2>Customer Data</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Job Role</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            $a = 1;
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $a . "</td>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["address"] . "</td>";
                                echo "<td>" . $row["salary"] . "</td>";
                                echo "<td>" . $row["job_role"] . "</td>";
                                $_SESSION["customer_id"] = $row['customer_id'];
                                echo "<td>
                                        <a href='#' onClick='Delete({$row['customer_id']}); return false;' class='btn btn-danger'>
                                            <i class='bi bi-trash-fill'></i> Delete
                                        </a>
                                        <a href='Process_Update.php'  class='btn btn-success'>
                                            <i class='bi bi-pen'>Update</i>
                                        </a>
                                      </td>";
                                echo "</tr>";
                                $a++;
                            }
                        } else {
                            echo "<tr><td colspan='7'>0 results</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="ProcessInsert.js"></script>
</body>
</html>

<?php
$conn->close();
?>
