

<?php

$side1 = $_GET['side1'];
$side2 = $_GET['side2'];
$side3 = $_GET['side3'];

if ( $side1 == $side2 && $side2 == $side3 ){
    echo "The triangle Equilateral";
}else if ( $side1 == $side2 || $side1 == $side3 || $side2 == $side3){
    echo "The triangle isosceles triangle";
}else {
    echo "The triangle is scalene triangle";
}
?>