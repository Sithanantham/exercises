<?php

    $array = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
    //find average temprature
    $convert_to_array = explode(",", $array);
    $avg = array_sum($convert_to_array)/count($convert_to_array);
    echo "average temparture is $avg <br>";

    //find 5 lowest temprature
    echo "5 Lowest Temprature is : ";
    sort($convert_to_array);
    for($i=0; $i<5; $i++){
       print_r($convert_to_array[$i].', ');
    }
    echo "<br>";
    //find 5 highest temprature
    echo "5 Highest Temprature is : ";
    for($i=(count($convert_to_array)-5); $i<count($convert_to_array); $i++){
        print_r($convert_to_array[$i].', ');
    }



?>