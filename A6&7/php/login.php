<?php

session_start();
error_reporting(0);
$loction= "dashboard.php";

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
        <h1>Welcome to Student Portal</h1><br>
        <h3> Please enter your credentials</h3>
        <form action="login.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="username" placeholder="Enter your username"/><br>
            <label for="password">Password:</label><br>
            <input type ="password"  name="password" placeholder="Enter your password"/><br><br>
            <input class="button" name="submit" type="submit" value="Login"/>
            <button class="button"><a href="register.php">Register</a></button>
            <button class="button"><a href="admin_login.php">Admin Login</a></button>
        </form>
    </div>
</body>
</html>