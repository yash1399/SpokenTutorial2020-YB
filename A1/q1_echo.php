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

        switch ($alpha){
            case "a" || "A":
                echo "This letter $alpha is a <b>Vowel</b>";
            break;
            case "e" || "E" :
                echo "This letter  $alpha is a <b>Vowel</b>";
            break;
            case "i" || "I":
                echo "This letter  $alpha is a <b>Vowel</b>";
            break;
            case "o" || "O": 
                echo "This letter $alpha is a <b>Vowel</b>";
            break;
            case "u" || "U":
                echo "This letter $alpha is a <b>Vowel</b>";
            break;

            default: 
            echo "This letter $alpha is a <b>Consonant</b>";
        
        }
    }

    consvowel("I")


?>