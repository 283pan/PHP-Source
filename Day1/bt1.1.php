<!doctype html>
<html>

    <body>
    <?php
    $ten= "Nguyen Mai Van";
    $gt= "nữ";
    $age= "20";

    if($age < "18"){
        echo "chào em";
    }
    elseif($age >= "18"){
        if($age <= "40"){
            if($gt = "nữ"){
                echo "xin chao chị ".$ten;
            }
        }
        elseif($age <= "60"){
            if($gt == "nam"){
                echo "xin chào chú";
            }else{
                echo "xin chào cô";
            }
        }else{
            if($gt == "nam"){
                echo "xin chào ông";
            }else{
                echo "xin chào bà"; 
            }
        }
    }
    ?>

    </body>
</html>
