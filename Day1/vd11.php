<!doctype html>
<html>

    <body>
    <?php
    $t = date("H");
    echo "<p> Theo hour (of the server) is".$t;
    echo ", and will give the following message:</p>";

    if ($t < "10"){
        echo "have a good morning";
    }elseif ($t < "20"){
        echo "have a good day";
    }else{
        echo "have a good night";
    }
    ?>
    </body>
</html>
