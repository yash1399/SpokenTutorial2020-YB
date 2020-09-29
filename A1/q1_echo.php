<?php
    function evenodd ($number){

        if ($number%2 == 0){
            echo "The number $number is an even number <br> ";
        }else{
            echo "The number $number is an odd number <br>"; 
        }

    };
    evenodd(11);


    function consvowel($alpha){

        if( $alpha == 'a' || $alpha == 'e' || $alpha == 'i' || $alpha == 'o'|| $alpha == 'u'){
            echo "The letter is $alpha is a vowel <br>";
        }else{
            echo "The letter $alpha is a consonant <br>";
        }
        
    }

    consvowel("b")


?>