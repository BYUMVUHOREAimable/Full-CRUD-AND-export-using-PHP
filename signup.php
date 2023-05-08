<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $first_name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users (fname, lname, email, password, gender) VALUES ('$first_name', '$lastname', '$email', '$password', '$gender')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div>
        <h2>Signup Form</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <fieldset>
                <legend>Personal Information</legend>
                First Name:<br>
                <input type="text" name="firstname" placeholder="Enter your firstname" required>
                <br>
                Last Name:<br>
                <input type="text" name="lastname" placeholder="Enter your last name" required>
                <br>
                Email:<br>
                <input type="email" name="email" placeholder="Enter your email" required>
                <br>
                Password:<br>
                <input type="password" name="password" placeholder="Enter your password" required>
                <br>
                <div class="container">
                    Gender:<br>
                    <input type="radio" name="gender" value="Male" required>Male
                    <input type="radio" name="gender" value="Female" required>Female
                </div>
                <br><br>
                <input type="submit" name="submit" value="Submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
