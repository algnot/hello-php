<?php
    #LOOP (for)
    // เหมือน ภาษา C

    /*
    SYNTAX
        for (init counter; test counter; increment counter) {
            code to be executed for each iteration;
        }
    */

    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

    #LOOP (foreach)
    /*
    SYNTAX (index array)
        foreach ($array as $value) {
            code to be executed;
        }

    SYNTAX (key array)
        foreach($age as $x => $val) {
            echo "$x = $val<br>";
        }
    */
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
      echo "$value <br>";
    }

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $val) {
      echo "$x = $val<br>";
    }