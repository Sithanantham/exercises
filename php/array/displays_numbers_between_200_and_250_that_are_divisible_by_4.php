<?php

$range = range(200,250);
//print_r($range);
foreach($range as $ranges){
    if(($ranges % 4) == 0){
        echo $ranges .", ";
    }
}



?>