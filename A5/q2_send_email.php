<?php


if(isset($_POST['submit'])){
    

    $subject= "Thank you for signing up!";
    $header ="From: admin@gmail.com";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

   $mail = mail( $email ,$subject, $feedback, $header);

    if( $mail == TRUE){
        echo"<script>console.log('Feedback sent successfully')</script>";
    }else{
        echo"<script>console.log('Feedback failed to be successfully')</script>";
    }


}



?>



<form action="q2_send_email.php" method="post">

<h1>Feedback form</h1>
<label for="name">Name:</label><br>
<input type="text" name="name" placeholder="Enter your name!"/><br>
<label for="email">Email:</label><br>
<input type="email" name="email" placeholder="Enter your email address"/><br>
<label for="feedback">Feedback:</label><br>
<textarea name="feedback" rows="3">
</textarea><br>

<input type="submit" name="submit"/>



</form>