<!doctype html>
<html>

    <body>
    <?php
    function add($value){
        $value +=5;
    }
    $num1 = 2;
    add($num1);
    echo $num1;
    //them &
    echo "<br>";
    //
    function add_five(&$value){
        $value +=5;
    }
    $num = 2;
    add_five($num);
    echo $num;
    ?>
    </body>
</html>
