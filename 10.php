<?php
    # MATH
    # ฟังก์ชั่นที่เกี่ยวกับตัวเลข

    #เช็คว่าเป็นตัวเลขไหม
    echo var_dump(is_numeric("543"));
    echo "<br>";
    echo var_dump(is_numeric("HH"));
    echo "<br>";

    # pi() -> return ค่า pi
    echo pi();
    echo "<br>";

    # format ตัวเลข
    echo(number_format(4599356));
    echo "<br>";

    # min(เซต,array ของ ตัวเลข) -> return ค่าที่น้อยที่สุด
    echo(min(0, 150, 30, 20, -8, -200));
    echo "<br>";

    # max(เซต,array ของ ตัวเลข) -> return ค่าที่มากที่สุด
    echo(max(0, 150, 30, 20, -8, -200));
    echo "<br>";

    # abs(ตัวเลข) -> return ค่าบวกของตัวเลข 
    echo(abs(-6.7));
    echo "<br>";

    # sqrt(ตัวเลข) -> return รากที่สองของตัวเลข
    echo(sqrt(64));
    echo "<br>";

    # round(ตัวเลข) -> ปัดเศษ(>.5) ลดเศษ(<.5) 
    echo(round(0.60)); 
    echo "<br>";
    echo(round(0.49)); 
    echo "<br>";

    # ceil(ตัวเลข) -> ปัดเศษขึ้น
    echo(ceil(0.49)); 
    echo "<br>";

    # floor(ตัวเลข) -> ปัดเศษลง
    echo(ceil(0.49)); 
    echo "<br>";

    # rand() -> random ตัวเลขแบบสุ่ม
    echo(rand());
    echo "<br>";

    # rand(min,max) -> random ตัวเลขในช่วง min-max
    echo(rand(10, 100));
    echo "<br>";