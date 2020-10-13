<?php

session_start();
error_reporting(0);
$loction= "admindash.php";

$username = $_POST['username'];
$password= md5($_POST['password']);

if($username&&$password){
    $connect = mysqli_connect("localhost", "root", "") or die (mysqli_connect_error());
    mysqli_select_db($connect,"phplogin") or die (mysqli_error());
  
    $query = mysqli_query($connect, "SELECT * FROM users WHERE username='$username'");

    $numrows = mysqli_num_rows($query);

    if($numrows !=0){

        while( $row = mysqli_fetch_assoc($query)){
            $_SESSION['login_user'] = $row['id'];
            $_SESSION['username']= $row['username']; 
            $dbpassword = $row ['password'];
            $_SESSION['PHP'] =$row['PHP'];
            $_SESSION['HTML'] = $row['HTML'];
            $_SESSION['MySQL']= $row['MySQL'];
        }
    

        if($username == $_SESSION['username'] && $password === $dbpassword){
            header("location: $loction");
            echo "<script>alert('Logined successfuly');</script>";
            exit();

        }else{
            echo "<script>alert('Incorrect')</script>";
           
        }

    }else{
        die("User does not exist");    
    }

}else{
    
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet"/>
    <title>Student Portal</title>
</head>
<body>
    <div class="login">
        <h1>Welcome to Admin Portal</h1><br>
        <h3> Please enter your credentials</h3>
        <form action="admin_login.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="username" placeholder="Enter your username"/><br>
            <label for="password">Password:</label><br>
            <input type ="password"  name="password" placeholder="Enter your password"/><br><br>
            <button class="button" type="submit" name="submit">Login as Admin</button>
            <button class="button"><a href="register.php">Register</a></button>
            
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>