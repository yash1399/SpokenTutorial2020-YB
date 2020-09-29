<?php

$a1 = array( array ( 4,6), array(12, 5));
$a2 = array( array (5 ,8 ), array( 10, 14));

for ($i= 0 ; $i<2; $i++){
    for($j=0;$j<2;$j++){
        echo $a1[$i][$j]+$a2[$i][$j]. " ";
    }
    echo "<br>";
}

?>