<?php
    // STRING FUNCTION
    // มีฟังก์ชั่นเกี่ยวกับ string มากมายเลย!

    $hello = "Hello world!";

    // นับ index string 
    echo strlen($hello);
    echo "<br>";

    // นับจำนวนคำ
    echo str_word_count($hello);
    echo "<br>";

    // กลับ string 
    echo strrev($hello);
    echo "<br>";

    // หาคำใน string ใช้ strpos(string ที่หา,string ที่ต้องการหา) => return index
    echo strpos($hello,"world");
    echo "<br>";

    // แทนที่คำใน string ใช้ str_replace(คำที่ต้องการลบออก,แทนที่ด้วยคำนี้,string ที่หา)
    echo str_replace("world", "php",$hello);
    echo "<br>";

    // แปลง string เป็นตัวเล็กหมด
    echo strtolower("hello WorlD");
    echo "<br>";

    //แปลง string เป็นตัวใหญ่หมด
    echo strtoupper("hello WorlD");
    echo "<br>";

    // แปลงตัวแรกของ string เป็นตัวใหญ่ 
    echo ucfirst("hello world");
    echo "<br>";

    // แปลงตัวแรกของทุกประโยคใน string เป็นตัวใหญ่
    echo ucwords("hello world");
    echo "<br>";

    // ลบช่องว่าง หน้า-หลัง string
    echo trim("      hello world    ");
    echo "<br>";
