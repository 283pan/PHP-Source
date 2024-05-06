<!doctype html>
<html>

    <body>
    <?php
    $str = "the rain in spain falls mainly on the splains";
    $patten = "/ain/i";
    echo preg_match_all($patten, $str);
    ?>
    </body>
</html>
