<?php

session_start();
error_reporting(0);
$name= $_SESSION['username'];
$PHP =$_SESSION['PHP'];
$HTML = $_SESSION['HTML'];
$MySQL = $_SESSION['MySQL'];

if($name){



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container">
    <form action='email.php' action='post'>
        <label>Email id:</label><br>
        <input type='text' name='pemail' placeholder="Enter Email address">
        <table class='border' style='width:100%'>
        <tr>
          <th>PHP</th>
          <th>HTML</th>
          <th>MySQL</th>
        </tr>
        <tr>
          <td><?php echo"$PHP";?></td>
          <td><?php echo"$HTML"?></td>
          <td><?php echo"$MySQL"?></td>
        </tr>
        </table>
      <input type="submit" class="button" name="send">

    </form>
    
</body>
</html>
<?php
}

$to = $_POST['pemail'];
$subject= "Test Results of ward";
$message = "<html>

    <table class='border' style='width:100%'>
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
    </table>

</html>";
$headers = "From: xyz@email.com";
 if(isset($_POST['send'])){
    mail($to, $subject, $message, $headers);
}

?>