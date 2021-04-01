<?php

    $x = array(1, 2, 3, 4, 5);
    //  array_pop($x);
    var_dump($x);
    echo "<br>";
    unset($x[3]);
    $x = array_values($x);
    var_dump($x);

?>