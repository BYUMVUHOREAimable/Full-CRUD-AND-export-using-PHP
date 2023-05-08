<?php
include('connect.php');

// re-index the book IDs
mysqli_query($conn, "SET @count = 0;");
mysqli_query($conn, "UPDATE users SET id = @count:= @count + 1;");
mysqli_query($conn, "ALTER TABLE users AUTO_INCREMENT = 1;");

if (isset($_POST["create"])) {
   
    $firstname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
     $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);

    // get the current highest users ID
    $result = mysqli_query($conn, "SELECT MAX(id) FROM users");
    $row = mysqli_fetch_array($result);
    $new_id = $row[0] + 1; // increment the current highest ID to get the new contact ID

    $sqlInsert = "INSERT INTO users(id, fname, lname, email, password, gender) VALUES ('$id', '$firstname','$lastname', '$email','$password', '$gender')";

    if(mysqli_query($conn, $sqlInsert)) {
        session_start();
        $_SESSION["create"] = "User Added Successfully!";
        header("Location:index.php");
    } else {
        die("Something went wrong");
    }
}

if (isset($_POST["edit"])) {
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    $sqlUpdate = "UPDATE users SET fname = '$firstname', lname = '$lastname', email = '$email',password = '$password', gender = '$gender' WHERE id='$id'";

    if(mysqli_query($conn, $sqlUpdate)) {
        session_start();
        $_SESSION["update"] = "User Updated Successfully!";
        header("Location:index.php");
    } else {
        die("Something went wrong");
    }
}
?>
