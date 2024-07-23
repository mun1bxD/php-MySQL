<?php
    //normal variable
    $x=10;
    
    echo "the value is" . $x . "<br>";

    $x="hello";

    echo "type change to string ".$x;

    //constant variable
    //syntax: define(name,value,case-insensitive)
    define("num1",30);

    echo "Number is: " . num1;
?>