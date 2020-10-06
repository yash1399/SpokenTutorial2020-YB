<?php 
$dbhost = 'localhost';
$dbuser ='root';
$dbpass = '';
$db = 'results';

$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($dbconn,$db);
$percentage = 77;

$update = ("UPDATE class1 SET sub5= 99, total_obtained =385, percentage = '$percentage' WHERE id= 3");

if(mysqli_query($dbconn,$update)){
    echo "<script>alert('Updated in database')</script>";
}else{
    echo "<script>alert('Not updated')</script>";
}


?>
