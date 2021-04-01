<?php

    $range = range(11,20);
    //print_r($range);
    shuffle($range);
    foreach($range as $ranges){
        echo $ranges." ";
    }
?>