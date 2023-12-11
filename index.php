<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Users List</title>
    <style>
        body{
            width:100%!important;
            height:100%!important;
        }
        table  td, table th{
        vertical-align:middle;
        text-align:center;
        padding:5px!important;
    
        }
        h1{
           background-color: pink;
           color:#8b008b;
           border-radius:1px;
        }
        h3{
            background-color: pink;
           text-align:center;
           color:#00FFFF;
        }
        
    </style>
</head>
<body>
    <div class="container my-4">
        
        <header class="d-flex justify-content-between my-4">
            <div>
                <form method="post" action="export.php">
        <button type="submit" name="csv" class="btn  btn-dark">Export CSV</button>
   <button type="submit" name="pdf" class="btn btn-secondary bg-blue">Export PDF</button>
            </div>
            <h1>Users List</h1>
             <div>
                <a href="create.php" class="btn btn-primary">Add New User</a>
                <a href="logout.php"  class="btn btn-success">Logout</a>
            </div>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>

        <?php
        if (isset($_SESSION["export"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["export"];
            ?>
        </div>
        <?php
        unset($_SESSION["export"]);
        }
        ?>
<table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
        <?php
        include('connect.php');
        $sqlSelect = "SELECT * FROM users";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['fname']; ?></td>
                <td><?php echo $data['lname']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['gender']; ?></td>
                <td>
                    <!-- <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Read More</a> -->
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                    
</form>
</td>
     </tr>
        <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>