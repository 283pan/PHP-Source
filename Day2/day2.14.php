<!doctype html>
<html>

    <body>
    <?php
    $str = "visit microsoft";
    $patten = "/microsoft/i";
    echo preg_replace($patten, "hanoi, $str");
    </body>
</html>
