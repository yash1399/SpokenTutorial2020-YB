
<?php
error_reporting(0);

$location= "login.php";
$n_username =strip_tags( $_POST['username']);
$n_password = md5(strip_tags($_POST['password']));

if($_POST['submit']){

    $connect = mysqli_connect("localhost", "root", "") or die (mysqli_connect_error());
    mysqli_select_db($connect,"phplogin") or die (mysqli_error());
    $query = mysqli_query($connect,"INSERT INTO users VALUES ('', '$n_username', '$n_password','','','')");
    header("location: $location");

}else
    echo "Failed to register";


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="../css/register.css" rel="stylesheet"/>
    <title>Student Portal</title>
</head>
<body>
    <div class="login">
        <h1>Register</h1>
        <form action="../php/register.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="username" placeholder="Enter your username"/><br>
            <label for="password">Password:</label><br>
            <input type ="password"  name="password" placeholder="Enter your password"/><br><br>
            <label for="c_password">Confirm Password:</label><br>
            <input type ="text"  name="c_password" placeholder="Confirm your password"/><br><br>
            <input style="margin-top: 10px" class="button" name="submit" type="submit" value="Register"/>
        </form>
    </div>
</body>
</html>


