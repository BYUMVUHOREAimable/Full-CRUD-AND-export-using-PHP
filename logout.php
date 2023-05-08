<?php
session_start(); //To ensure you are using same session
session_destroy(); //destroy the session
header("Location:login.php"); //to redirect backk to "index.php"
exit();
?>