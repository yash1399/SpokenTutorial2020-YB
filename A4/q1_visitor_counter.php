
<?php
//     $dbhost = 'localhost';
//     $dbuser ='root';
//     $dbpass = '';
//     $db = 'counter';
//     $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
//     mysqli_select_db($conn, $db);

  
//  $result = mysqli_query($conn, "UPDATE visitors set visitors = visitor + 1");
// $extract = mysqli_query($conn,"SELECT visitors FROM visitors");
//   $count = mysqli_fetch_row($extract);

//   while ($row = mysqli_fetch_assoc($extract)){

//       $visitors = $row['visitors'];

//       echo "You are our $visitors visitor  ";

//   }


// Connects to your Database 
$conn = mysqli_connect("localhost", "root", "") or die(mysqli_error()); 
mysqli_select_db($conn,"counter") or die(mysqli_error());
//Adds one to the counter
$query = mysqli_query($conn,"UPDATE visitor SET visitor = visitor + 1");
//Retrieves the current count
$count = mysqli_fetch_row(mysqli_query($conn,"SELECT visitor FROM visitor"));
//Displays the count on your site
echo "$count[0]"; 


?>




