<?php


session_start();
error_reporting(0);
session_destroy();

echo "<script>alert('You have been logged out');</script>";

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet"/>
    <title>What do you want to do?</title>
</head>
<body>

<button class="button"><a href='login.php'>Login</a></button>
<button class="button"><a href='register.php'>Register</a></button>
    
</body>
</html>