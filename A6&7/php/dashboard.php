<?php
error_reporting(0);
session_start();
$name= $_SESSION['username'];
$PHP =$_SESSION['PHP'];
$HTML = $_SESSION['HTML'];
$MySQL = $_SESSION['MySQL'];


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

    <div class="flex container">
        <?php
        $name= $_SESSION['username'];
        $PHP =$_SESSION['PHP'];
        $HTML = $_SESSION['HTML'];
        $MySQL = $_SESSION['MySQL'];

        echo "<h1>Welcome $name<br></h1>";
        echo "<table class='border' style='width:100%'>
        <tr>
          <th>PHP</th>
          <th>HTML</th>
          <th>MySQL</th>
        </tr>
        <tr>
          <td>$PHP</td>
          <td>$HTML</td>
          <td>$MySQL</td>
        </tr>
      </table>";
        
        ?>
       
            <button  class="button" type="submit" name="email"> <a href='email.php'>Email Parents</a></button>
            <button class="button" type="submit" name="logout"><a href="logout.php">Logout</a></button>
    

    </div>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>