<!doctype html>
<html>

    <body>
    <?php
    $carsA = array("volvo","bwm","toyota");
    array_splice($carsA, 1, 1);
    echo $carsA[0],",",$carsA[1];
    ?>
    </body>
</html>
