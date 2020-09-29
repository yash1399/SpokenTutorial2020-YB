<?php
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