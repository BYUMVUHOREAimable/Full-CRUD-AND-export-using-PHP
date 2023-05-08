<?php
include('connect.php');

$id  = mysqli_real_escape_string($conn, $_GET["id"]);

$sqlDelete = "DELETE FROM users WHERE id='$id'";

if(mysqli_query($conn,$sqlDelete)){
    $sqlResetId = "ALTER TABLE users AUTO_INCREMENT = 1";
    mysqli_query($conn, $sqlResetId);
    $sqlMaxId = "SELECT MAX(id) FROM users";
    $result = mysqli_query($conn, $sqlMaxId);
     $maxId = mysqli_fetch_array($result)[0];
    $sqlUpdateId = "SET @count = 0";
    mysqli_query($conn, $sqlUpdateId);
    $sqlUpdateId = "UPDATE users SET id = @count:= @count + 1";
    mysqli_query($conn, $sqlUpdateId);
    session_start();
    
    $_SESSION["delete"] = "User Deleted Successfully!";
    header("Location:index.php");
}else{
    die("Something went wrong");
}
?>
