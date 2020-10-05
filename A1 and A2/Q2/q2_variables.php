<?php
function cal($n1 ,$n2, $ans){
    switch ($ans){
        case "+":
            $total = $n1 + $n2; 
            return $total;
        break; 
        case "-":
            $total = $n1 - $n2; 
            return $total;
        break;
        case "*":
            $total = $n1 * $n2;
            return $total; 
        break;
        case "/":
            $total = $n1 / $n2;
            return $total; 
        break;
        default:
        echo "Unknwn operator.";   
    }

}
echo cal(10,10, "+");
?>