<!doctype html>
<html>

    <body>
    <?php
    $x = 'Hello world';
    $y = "I love halongbay!";

    var_dump($x);
    echo "<br>";
    var_dump($y);

    //kiểu NULL
    $x= "hello";
    $x = null;
    var_dump($x);

    //kiểu xâu
    echo strlen("Hello world"); //hàm trả về đội dài của xâu
    echo str_word_count("hello world");//hàm đếm số từ
    echo strpos("hello",3);//hàm trả về vị trí của xâu
    //strtoupper, strolower, str_replace, strrec...

    $x = "Nguyen Minh Anh";
    //$x = str_replace("Minh", "Thanh", $x);
    //$x = strtoupper($x);
    echo strtoupper(str_replace("Minh", "Thanh", $x));

    //chuyển xâu thành mảng explode()
    $x = "hello world";
    $y = explode(" ", $x);
    print_r($y);

    //doi $
    $ten = "Nguyen,An,Ninh";
    $ten2 = explode(",", $ten);
    echo implode("<br>", $ten2);
    
    //
    $ten = "Nguyen Thanh An"
    ?>
    </body>
</html>
