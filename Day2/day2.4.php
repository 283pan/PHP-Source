<!doctype html>
<html>

    <body>
    <?php 
    //chưa dùng từ khóa strict để loại bỏ một số lỗi không tương thích
    //function addNumbers(int $a, int $b){
    //    return $a + $b;
    //}
    //echo addNumbers(5, "5 days");
    //
    declare(strict_types=1); // dùng strict
    function addNumbers(float $a, float $b):float{
        return $a + $b;
    }
    echo addNumbers(1.2, 5.2);
    ?>
    </body>
</html>
