<?php 
$dbhost = 'localhost';
$dbuser ='root';
$dbpass = '';
$db = 'results';

$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_select_db($dbconn,$db);



if ( isset($_POST['submit']) ){

$name = $_POST['name'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];

$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5; 
$percentage = ($total/500) * 100;

$insert= ("INSERT INTO class1 VALUES('','$name','$sub1','$sub2', '$sub3', '$sub4', '$sub5','$total', '500', '$percentage')");

if (mysqli_query($dbconn, $insert)){
    echo "<script>alert('Data sent to database');</script>";
}else{
    echo "<script>alert('Failed to insert');</script>";
}
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="q1.php" method="post">
            <label>Name of Student</label>
            <input type="text" name="name" placeholder="Enter your full name"><br/>
            <label>Marks in Each Subject:</label><br/>
            <label for="sub1">Subject 1:</label>
            <input name="sub1" type="text"/><br/>
            <label for="sub2">Subject 2:</label>
            <input name="sub2" type="text"/></br>
            <label for="sub1">Subject 3:</label>
            <input name="sub3" type="text"/><br/>
            <label for="sub1">Subject 4:</label>
            <input name="sub4" type="text"/><br/>
            <label for="sub1">Subject 5:</label>
            <input name="sub5" type="text"/><br/>
            <input type="submit" name="submit"value="Submit"/><br/>
    </form>
    <div>
    <p>Total Marks Obtained:<?php 
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];
    $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    
    echo $total. "/500";?></p>
                    <p>Total marks:500</p>
                    <p>Name: <?php 
                    $name = $_POST['name'];
    
                    echo $name; ?></p>
    
                    <p> Percentage:
                        <?php
                            $percentage = ($total/500) * 100;
                        
                             echo $percentage."%";
                             
                        ?>
                    </p>
    </div>
</body>
</html>


 