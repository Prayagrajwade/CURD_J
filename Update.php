<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Customer</title>
</head>
<body>
    


    <form action="Process_Update.php" method="post">
    
        


        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" ><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" ><br><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br><br>

        <label for="salary">Salary:</label><br>
        <input type="number" id="salary" name="salary" step="0.01" ><br><br>

        <label for="job_role">Job Role:</label><br>
        <input type="text" id="job_role" name="job_role"><br><br>

        <input type="submit" value="Submit">
    </form>

    <br>

    <a href="insertData.php"> 
      Insert Users
    </a>. 
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Customer</title>
</head>
<body>
    


    <form action="Process_Update.php" method="post">
        <label for="id">Enter Customer ID:</label><br>
        <input type="text" id="id" name="id" required><br><br>
        <input type="submit" value="Fetch Customer">
    </form>

    <br>

    <a href="insertData.php"> 
      Insert Users
    </a>. 
</body>
</html>
