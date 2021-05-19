<?php
    #function
    /*
    SYNTAX
        function functionName(parameter1 , parameter2) {
            code to be executed;
        }
    */

    # Pass by Value
    function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;
    }
    echo sum(4,5);
    echo "<br>";

    # Pass by Reference 
    function add_five(&$value) {
        $value += 5;
    } 
    $num = 2;
    add_five($num);
    echo $num;
    echo "<br>";