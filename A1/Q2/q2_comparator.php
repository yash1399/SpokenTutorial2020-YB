<?php
    function comp( $n1 , $n2){
        if ( $n1 > $n2 ){
            echo "$n1 is greater than $n2";
        }elseif( $n1 === $n2 ){
            echo "$n1 and $n2 are equal";
        }else {
            echo "$n1 is smaller than $n2";
        }
    }

    comp( 3,6);

?>