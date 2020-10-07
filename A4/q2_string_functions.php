
<?php
$from = "ie";
$to = "ol";
if(isset($_POST['submit'])){
    $string = $_POST['string'];
    $length = strlen($string);
    $explode = explode(' ',$string);
    $reverse = strrev($string);
    $lower = strtolower($string);
    $upper = strtoupper($string);
    $substring = strtr($string, $from, $to);
    $imploded = implode( $explode, " ");
    
    
    
    echo "Your string contains $length<br>
    Exploded: $explode<br>
    Imploded: $imploded<br>
    Reverse: $reverse<br>
    Upper: $upper<br>
    Lower:$lower<br>
    Substring: $substring";
}

?>
<form action="q2_string_functions.php" method="POST">
<input type="text" name="string"/>
<input type="submit" value="submit" name="submit"/>
</form>