<!doctype html>
<html>

    <body>
    <?php
    $str = "visit hanoi city";
    $patten = "/hanoi/i";
    echo preg_match($patten, $str);
    ?>
    </body>
</html>
