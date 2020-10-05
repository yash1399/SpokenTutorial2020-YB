

<?php
 
 $sub1 = $_POST['sub1'];
 $sub2 = $_POST['sub2'];
 $sub3 = $_POST['sub3'];
 $sub4 = $_POST['sub4'];
 $sub5 = $_POST['sub5'];

$name =$_POST['name'];  
$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$percentage = ($total/500) * 100;
?>
<html>
    
        <form action="q6_marksheet.php" method="post">
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
            <input type="submit" value="Submit"/><br/>
        </form>

        <p>Total Marks Obtained:<?php echo $total. "/500";?></p>
                <p>Total marks:500</p>
                <p>Name: <?php echo $name; ?></p>

                <p> Percentage:
                    <?php
                    
                         echo $percentage."%";
                         
                    ?>
                </p>
</html>



