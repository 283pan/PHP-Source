<!doctype html>
<html>

    <body>
    <?php
    $x = 5; //global scope

    function myTest(){
        //using x inside thi function will generate an...
        echo "<p>Varible x inside function is: $x</p>";
    }

    myTest();
    echo "<p>Varible x inside function is: $x</p>";

    //để truy cập biến toàn cục trong một hàm thì người ta dùng biến global
    $y =5;
    $z = 10;
    function myTest2(){
        global $z, $y;
        $z = $y + $z;
    }
    myTest();
    echo $z;
    
    
    ?>
    </body>
</html>
