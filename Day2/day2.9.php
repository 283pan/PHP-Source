<!doctype html>
<html>

    <body>
    <?php
    $carsA = array("volvo","bwm","toyota");
    unset($carsA[1]);
    echo $carsA[0],",",$carsA[2], "\n";
    echo $carsA[0], ",", $carsA[1];
    ?>
    </body>
</html>
