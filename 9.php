<?php
    # Array
    // array ใน php เป็น dynamic array(Stack)!!

    // เวลาเราจะประกาศ array เราจะประกาศแบบนี้
    $array = array('Hello world', 4 , 7.8); //index array 
    $arrayKey = array('name' => 'Thanawat' , 'age' => 20); //key array 
    // type ไม่จำเป็นต้องเหมือนกัน

    // เรียกแบบ index
    echo $array[0];
    echo "<br>";
    // เรียกแบบ key
    echo $arrayKey['name'];
    echo "<br>";

    // นับขนาด array
    echo count($array);
    echo "<br>";

    // แสดงค่า array
    print_r($array); // เเสดง index,ค่า
    echo "<br>";
    echo implode($array); // echo ค่า
    echo "<br>";

    // ใส่ค่าเพิ่ม (push) return ขนาดของ array ด้วย !!
    echo array_push($array,4);  //ใส่ 4 เพิ่ม 1 ค่า
    echo "<br>";
    echo array_push($array,5 , 'Hello');  //ใส่ 5 กับ Hello เพิ่ม 1 ค่า
    echo "<br>";

    // ลบค่า (pop)  array_splice(array,index,length) return array ที่ลบไป
    // หากไม่กำหนด length จะลบจนถึงตัวสุดท้าย
    print_r(array_splice($array,0,1));
    echo "<br>";
    print_r($array);
    echo "<br>";

    // ค้นหาค่าใน array
    // in_array(ตัวที่ต้องการหา,array) ค้นหาค่าใน array (คืนค่า True(1) เมื่อมีค่าใน array)
    echo in_array('Hello',$array);
    echo "<br>";

    // array_search(ตัวที่ต้องการหา,array) ค้นหาค่าใน array (คืนค่าที่ index เมื่อมีค่าใน array)
    echo array_search('Hello',$array);
    echo "<br>";

    // บวกค่าตัวเลขทั้งหมดใน array
    echo array_sum($array);
    echo "<br>";

    // sorting
    // sort a-z 
    $sorting = array('cat','Dog','apple','Banana');
    natcasesort($sorting);
    print_r($sorting);
    echo "<br>";
    // sort ascii
    sort($sorting);
    print_r($sorting);
    echo "<br>";

    // หาตัวซ้ำ
    print_r(array_intersect(array('cat','Dog','apple','Banana'),array('cat','apple','Mee ngo')));
    echo "<br>";

    // หาตัวที่มีใน array แรก แต่ไม่มีในตัวที่ สอง
    print_r(array_diff(array('cat','Dog','apple','Banana'),array('cat','apple','Mee ngo')));
    echo "<br>";