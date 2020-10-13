<?php

session_start();
error_reporting(0);

$username = $_SESSION['username'];

if( $username == 'admin'){

    
  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet"/>
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        
        <form action="update.php" method="post">
            <h1>Administrator Dashboard</h1>
            <h3>Search students</h3>
            <label >Username:</label>
            <input type="text" name="username1" placeholder="Enter students username">
           <input  class="button" type="submit" name="search" value=" Update">
        </form>
    

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
<?php

    }

    else{
        die("You cant access this page");
    }

    $connect = mysqli_connect("localhost", "root", "") or die (mysqli_connect_error());
    mysqli_select_db($connect,"phplogin") or die (mysqli_error());
   

    if ($_POST['search']){
        $username1 = $_POST['username1'];
        $query = mysqli_query($connect,"SELECT username, PHP, HTML, MySQL FROM users WHERE username = '$username1' ");
    
        if($query){
            $numrows = mysqli_num_rows($query);

            if ($numrows != 0){
                
                while( $row = mysqli_fetch_assoc($query)){
                    $dbusername = $row['username'];
                    $dbphp = $row['PHP'];
                    $dbsql = $row['MySQL'];
                    $dbhtml = $row['HTML'];
                    echo "<br>Username=$dbusername";
                }
            }else {
                echo"<script>alert('User does not exist')</script>";
            }
            
        }
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
<div class="container">
    
    <form action='delete.php' method='post'>
        
        <h3>Delete a record</h3>
        <label>Username</label>
        <input type="text" name='dname'><br>
        <input class="button" type='submit' value='Delete'><br>
    </form>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
<?php

echo "<div class='container'>
<button class='button'><a href='logout.php'>Logout</a></button></div>"


?>