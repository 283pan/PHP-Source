<!doctype html>
<html>

    <body>
    <?php
    $x = 75;

    function myfunction(){
        global $x;
        echo $GLOBALS['x'];
        echo $x;
    }
    myfunction();
    ?>
    </body>
</html>
