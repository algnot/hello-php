<?php
    // VARIABLE SCOPE
    // VARIABLE SCOPE จะมีด้วยกัน 3 ประเภท ได้แก่ local global static
    // เหมือน JAVA C 

    $x = 6; //global scope
    static $pi = 3.1415; //static scope

    function fun1(){
        $y = 5; // local scope
    }

    echo $x;
    echo "<br>";
    echo $pi;
    echo "<br>";
    echo $y; // ตัวแปรนี้คอมไพร์จะมองไม่เห็น เพราะเป็นตัวแปร local ของ function fun1
    echo "<br>";


