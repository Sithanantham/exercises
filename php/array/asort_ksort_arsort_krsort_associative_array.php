<?php

    $array = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
    echo "ascending order sort by value <br>";
    asort($array);
    foreach($array as $key => $value){
        echo "Age of $key is : $value <br>";
    }

    echo "<br>ascending order sort by Key <br>";
    ksort($array);
    foreach($array as $key => $value){
        echo "Age of $key is : $value <br>";
    }

    echo "<br>descending order sorting by Value <br>";
    arsort($array);
    foreach($array as $key => $value){
        echo "Age of $key is : $value <br>";
    }

    echo "<br>descending order sorting by Key <br>";
    krsort($array);
    foreach($array as $key => $value){
        echo "Age of $key is : $value <br>";
    }
    
?>