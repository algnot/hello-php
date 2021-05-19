<?php
    #break
    //หยุด loop ไม่ทำต่อ
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
          break;
        }
        echo "The number is: $x <br>";
    }
    echo "<br>";

    $x = 0;
    while($x < 10) {
        if ($x == 4) {
          break;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<br>";

    #continue 
    //หยุดลูป แล้ว counter ต่อ 
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
    }
    echo "<br>";

    $x = 0;
    while($x < 10) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<br>";