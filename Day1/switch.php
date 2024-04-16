<!doctype html>
<html>

    <body>
    <?php
    $nhap = "t2";

        switch($nhap){
                case "t1":
                case "t3":
                case "t5":
                case "t7":
                case "t8":
                case "t10":
                case "t12":
                    echo "Tháng có 31 ngày";
                    break;
                
                case "t4":
                case "t6":
                case "t9":
                case "t11":
                    echo "thang co 30 ngay";
                break;
            case("t2"):
                echo "thang co 28 ngay";
                break;
        }
    ?>
    </body>
</html>
