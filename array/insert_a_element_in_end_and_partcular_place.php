<?php

    $array = array(1, 2, 3, 4, 5);
    // insert an element in end of an array
    array_push($array, "$");
    print_r($array);
    echo "<br>";

    $array1 = array(1, 2, 3, 4, 5);
    $insert = "$";
    //insert an element in particular place
    array_splice($array1, 3,0,$insert);
    print_r($array1);

?>