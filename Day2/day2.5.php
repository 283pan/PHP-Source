<!doctype html>
<html>

    <body>
    <?php
    //tạo mảng
    $carsA = array("volvo","bwm","toyota");
    print_r($carsA);
    $carsB = ["volvo","bwm","toyota"];
    print_r($carsB);
    $carsC = [
        "volvo",
        "bwm",
        "toyota"
    ];
    print_r($carsC);
    $carsD = [
        0 => "volvo",
        1 => "bwm",
        2 => "toyota"
    ];
    print_r($carsD);
    $carsE = [];
    $carsE[0] = "volvo";
    $carsE[1] = "bwm";
    $carsE[2] = "toyota";
    print_r($carsE);

    $myArr = [];
    $myArr[0] = "apple";
    $myArr[1] = "bananas";
    $myArr["fruit"] = "Cherries";
    print_r($myArr);
    ?>
    </body>
</html>
