<!doctype html>
<html>

    <body>
    <?php
    //Sử dụng … trước tham số của hàm để cho phép chuyển vào của một mảng(tham số đc coi như một mảng)
    function sumMyNumbers(...$x){
        $n = 0;
        $len = count($x);
        for($i=0; $i<$len; $i++){
            $n += $x[$i];
        }
        return $n;
    }
    $a = sumMyNumbers(5, 2, 6, 7, 7);
    echo $a;
    ?>
    </body>
</html>
