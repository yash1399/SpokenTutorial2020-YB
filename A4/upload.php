<!-- <?php

if (isset($_POST['submit'])){
    $name=  $_FILES["myfile"]["name"];
    $type = $_FILES["myfile"]["type"];
    $size = $_FILES["myfile"]["size"];
    $temp = $_FILES["myfile"]["tmp_name"];
    $error = $_FILES["myfile"]["error"];
    
    if ( $error > 0){
        die ("Error uploading file! Code $error");

    }else{

        move_uploaded_file($temp,"uploaded/".$name);
        echo "Upload complete!";
    }


}



?> -->