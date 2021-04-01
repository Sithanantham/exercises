<?php

    $range = range(1,9);
    shuffle($range);
    
    for($i=1; $i<=6; $i++){
        echo $range[$i];
    }

?>