<?php

    $color = array(4 => 'white', 6 => 'green', 11=> 'red');
    echo "First element is ". reset($color) . "<br>";
    echo "Current element is ". current($color) . "<br>";
    echo "Next element is ".next($color) . "<br>";
    echo "Prev element is ".prev($color). "<br>";
    echo "Last element is ".end($color);

?>