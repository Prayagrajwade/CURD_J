<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <?php
          include "DB.php";
          session_start();
          
          $Customer_id = $_POST['id'];
          
          $sql = "DELETE FROM Customer WHERE customer_id = $Customer_id";
          
           $_SESSION["alertMessage"] = 1;
          
          
          if ($conn->query($sql) === TRUE) {
              echo json_encode(array("statusCode"=>200));
          } else {
              echo json_encode(array("statusCode"=>201));
          }
          
        ?>
    </div>

    <!-- Load jQuery first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-4XkXQ4bMTnL6PQ6z6sOgb0tK7f8K3jDhW5FovTxFhC12mr9q1ukl23uOdANU7V4E4" crossorigin="anonymous"></script>
<!-- Then load Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Finally, load your custom script -->
<script src="ProcessInsert.js"></script>
</body>
</html>









