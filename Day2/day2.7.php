<!doctype html>
<html>

    <body>
    <?php
    $fruits = array("apple", "banana","cherry");
    array_push($fruits, "orange","kiwi", "lemon");
    print_r($fruits);

    $cars = array("barnd"=> "ford", "model" => "mustang");
    $cars += ["color" => "red", "year"=> 1964];
    print_r($cars)
    ?>
    </body>
</html>
