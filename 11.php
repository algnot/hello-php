<?php
    # if elseif else
    // เหมือน ภาษา C
    
    /*
    SYNTAX
        if (condition) {
            code to be executed if this condition is true;
        } elseif (condition 2) {
            code to be executed if first condition is false and this condition 2 is true;
        } else {
            code to be executed if all conditions are false;
        }
    */
    $t = date("H"); // date("H") -> คืนค่าชั่วโมงเวลาปัจจุบัน
    if ($t < "10") {
      echo "Have a good morning!";
    } elseif ($t < "20") {
      echo "Have a good day!";
    } else {
      echo "Have a good night!";
    }
?>