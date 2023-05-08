<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Contact</title>
</head>
<body>
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Contact</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM users WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
            ?>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="firstname" placeholder="First Name:" value="<?php echo $row["fname"]; ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="lastname" placeholder="Last Name:" value="<?php echo $row["lname"]; ?>">
            </div>
            <div class="form-element my-4">
                <input type="email" class="form-control" name="email" placeholder="Email:" value="<?php echo $row["email"]; ?>">
            </div>

            <div class="form-element my-4">
                <input type="password" class="form-control" name="password" placeholder="Password:" value="<?php echo $row["password"]; ?>">
            </div>


            <div class="form-element my-4">
                <select name="gender" class="form-control">
                    <option value="">Select Gender:</option>
                    <option value="Male" <?php if($row["gender"]=="Male"){echo "selected";} ?>>Male</option>
                    <option value="Female" <?php if($row["gender"]=="Female"){echo "selected";} ?>>Female</option>
                </select>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Contact" class="btn btn-primary">
            </div>
            <?php
            } else {
                echo "<h3>User Does Not Exist</h3>";
            }
            ?>
        </form>
    </div>
</body>
</html>
