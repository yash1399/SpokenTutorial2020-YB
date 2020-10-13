<?php
session_start();
error_reporting(0);

$dname= $_POST['dname'];

$connect = mysqli_connect("localhost", "root", "") or die (mysqli_connect_error());
mysqli_select_db($connect,"phplogin") or die (mysqli_error());

$deletechk = "SELECT * FROM users WHERE username= '$dname'";

$query = mysqli_query($conn,$deletechk);

$numrow = mysqli_num_rows($query);

if($numrow = 0){
    die("<script>alert('User does not exsist')</script>");
}else{
    $duser = "DELETE FROM users WHERE username = '$dname'";
    mysqli_query($connect, $duser);

}


$dcheck2 = "SELECT * FROM users WHERE username = '$dname'";
$q3 = mysqli_query($conn, $dcheck2);
$n2= mysqli_num_rows($q3);



if($n2 == 0){
    echo "<script>alert('$dname has been succcessfully deleted');</script>";
    

}else{
    echo "<script>alert('$dname has been not deleted');</script>"; 
}


?>