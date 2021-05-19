<?php
    // OPERATION
    $text = "Hello ";
    $x = 5;
    $y = 5.5;
    $z = TRUE;

    // เราสามารถเอา int,string,boolean(true=1 false=0) มา + - * / % กันได้เลยฃ
    echo $x+$y+$z;
    echo "<br>";

    // แต่ถ้าเป็น . จะเป็นการ CONCATENATE กันนะระวังดีๆ
    echo $x.$y.$z;
    echo "<br>";

    // แต่ว่า "5" ที่เป็น string มันก็เท่ากับ 5 ที่เป็น int ด้วย ความสวยงามเลยเกิดขึ้น!
    echo $x.$y+$z;  // $x.$y = "55.5" เท่ากับ 55.5 ยังไงละ 55.5+TRUE(1)=56.5
    echo "<br>";

    // แต่อย่าเอา string มาบวก string ที่มีตัวอักษรอยู่นะ TT
    // ลองถอดคอมเม้นข้างล่างดู
    // echo $text+$text;  // Uncaught TypeError
    // echo $text-$text;  // Uncaught TypeError
    // echo "<br>";
?>