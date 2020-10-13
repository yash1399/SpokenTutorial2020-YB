<?php
session_start();
error_reporting(0);

if($_SESSION['username'] != 'admin'){
    die("You cant access this");
}
$connect = mysqli_connect("localhost", "root", "") or die (mysqli_connect_error());
mysqli_select_db($connect,"phplogin") or die (mysqli_error());

$user_name = $_POST['username'];

$ncheck= "SELECT * FROM users WHERE username = '$user_name'";
$result = mysqli_query($connect,$ncheck);

if ($result){

    $numrow = mysqli_num_rows($result);
    if($numrow!=0){
        while($row = mysqli_fetch_assoc($result)){
            $uname = $row['username'];
            $php = $row['PHP'];
            $html =$row['HTML'];
            $sql = $row['MySQL'];
        }
        
    }
}
else{
    die('User not found');
}

$nphp= $_POST['php'];
$nhtml= $_POST['html'];
$nsql= $_POST['sql'];

$update = "UPDATE users SET PHP = $nphp, HTML = $nhtml, MySQL = $nsql WHERE username = '$user_name'";


if (isset( $nphp, $nhtml, $nsql)){
    $do = mysqli_query($connect, $update);
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet"/>
    <title>Dashboard</title>
</head>
    <div class="container mt-5">
        <h2>Current scores</h2>
        <form action='update.php' method='post'>
            <label>PHP marks</label>
            <p><?php  echo"$php"; ?></p><br>
            <label>HTML marks</label>
            <p><?php echo "$html"; ?></p><br>
            <label>MySQL marks</label>
            <p><?php echo "$sql"; ?></p><br>
            <h2>Edit scores</h2>
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $user_name?>"><br>
            <label>PHP marks</label>
            <input type="text" name='php' value="<?php echo$nphp;?>"><br>
            <label for="">HTML</label>
            <input type="text" name='html' value="<?php echo$nhtml;?>"><br>
            <label>MySQL</label>
            <input type="text" name='sql' value="<?php echo$nsql?>"><br>
            <input class="button" type="submit" value="update marks">
              
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>

<?php

if ($do)
{
    echo "<script>alert('Record has been updated')</script>";
}else{
    echo "<script>alert('Record has not been updated')</script>";
}

echo "<div class='container'>
<button class='button'><a href='admindash.php'>Go back</a></button>
</div>"
?>