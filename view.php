<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Users Details</title>
    <style>
        .book-details{
            background-color:#f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Users Details</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details p-5 my-4">
            <?php
            include("connect.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM users WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                 ?>
                 <h3>Id:</h3>
                 <p><?php echo $row["id"]; ?></p>
                 <h3>Firstname:</h3>
                 <p><?php echo $row["fname"]; ?></p>
                 <h3>Lastname:</h3>
                 <p><?php echo $row["lname"]; ?></p>
                 <h3>Email:</h3>
                 <p><?php echo $row["email"]; ?></p>
                 <h3>Gender:</h3>
                 <p><?php echo $row["gender"]; ?></p>
                
                 <!-- Add Edit Button to Redirect to Edit Page -->
                 <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Edit</a>
                 <?php
                }
            }
            else{
                echo "<h3>No User found</h3>";
            }
            ?>
            
        </div>
    </div>
</body>
</html>
