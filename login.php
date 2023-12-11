<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./login1.css">
    
</head>
<body>
    
    <header>
        <h2>Login form</h2>
        <div class="container">
            <form action="" method="POST">
                <label>Email</label>
                <input type="email" name="email"><br><br>
                <label>Password</label>
                <input type="password" name="password"> <br><br>
                <input type="submit" name="submit" value="Login" id="login">
            </form>
        </div>
        <div class="text-center">
            <a href="signup.php"><button class="btn btn-primary">Sign Up</button></a>
        </div>
    </header>
</body>
</html>
<?php
// Connect to the database
include('connect.php');

// Check if the form has been submitted
if(isset($_POST['submit'])){
    // Retrieve the user's input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the user's credentials
    if($email == 'aimablebyumvuhore@gmail.com' && $password == '1234'){
        // Start a new session
        session_start(); 

        // Set session variables
        $_SESSION['username'] = 'BYUMVUHORE Aimable';

        // Redirect the user to the homepage
        header('Location: index.php');
        exit();
    }else{
        // Check if the user exists in the database
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            // Start a new session
            session_start(); 

            // Set session variables
            $row = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $row['email'];

            // Redirect the user to the homepage
            header('Location: homepage.php');
            exit();
        }else{
            // Display an error message
    
echo "<p>Invalid usernamel,email or password.</p>";
        }
    }
}

?>
