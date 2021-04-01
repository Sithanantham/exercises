<?php

$json = '{"Title": "The Cuckoos Calling",
        "Author": "Robert Galbraith",
        "Detail": {
        "Publisher": "Little Brown"
        }}';

function jsonDecode($value,$key){
    echo "$key : $value.<br>";
}
    

    $a = json_decode($json, true);
    array_walk_recursive($a, jsonDecode);

?>