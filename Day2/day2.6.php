<!doctype html>
<html>

    <body>
    <?php
    //thêm phần tử vào mảng
    $fruit1 = array("apple","banana","cherry");
    $fruit1[] = "orange";
    print_r($fruit1);
    //
    $cars = array("brand" => "ford", "model" => "mustang");
    $cars["color"] = "red";
    print_r($cars);
    ?>
    </body>
</html>
