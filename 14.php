<?php
    #LOOP (while)
    // เหมือน ภาษา C

    /*
    SYNTAX
        while (condition is true) {
            code to be executed;
        }
    */

    $x = 1;
    while($x <= 5) {
      echo "The number is: $x <br>";
      $x++;
    }

    #LOOP (do while)
    // เหมือน ภาษา C

    /*
    SYNTAX
        do {
            code to be executed;
        } while (condition is true);
    */
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x == 5);