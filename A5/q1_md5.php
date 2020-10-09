<?php

$dbhost = 'localhost';
$dbuser ='root';
$dbpass = '';
$db = 'data1';

$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($dbconn,$db);


if( isset($_POST['submit'])){
    

    $username = $_POST['username'];
    $password = $_POST['password'];

    $encpassword = md5($password);
    
    $insert = ("INSERT INTO user VALUES (' ','$username', '$encpassword')");
    
    
    if (mysqli_query($dbconn, $insert)){
        echo "<script>alert('Data sent to database');</script>";
    }else{
        echo "<script>alert('Failed to insert');</script>";
    }
}
    

?>

<form action="q1_md5.php" method="post">

<h1>Login Page</h1>

<input type="text" name="username" placeholder="Enter your username"/>
<input type="text" name="password" placeholder="Enter you passwird"/>
<input type="submit" name="submit"/>

</form>