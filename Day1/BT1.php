<!doctype html>
<html>

    <body>
    <?php
    //đưa vào họ tên giới tính tuổi,đưa ra lời xin chào, biết rằng nếu tuổi < 18 thì đưa là chào em, nếu >=18 <=40 (anh chị), >=40 <=60 (bác) ,>=60 ông or bà
    $ten= "Nguyen Mai Van";
    $gt= "nữ";
    $age= "20";

    if($age < "18"){
        echo "chao em";
    }
    elseif($age >= "18" && $age <= "40"){
        if($gt == "nam"){
            echo "xin chao anh";
        }
        else{
        echo "xin chao chị";}
    }
    elseif($age >= "40" && $age <= "60"){
        if($gt == "nam"){
            echo "xin chao chú";
        }
        else{
        echo "xin chao cô";}
    }
    elseif($age >60 && $gt == "nam"){
        echo "chào ông";
    }
    else{
        echo "chào bà";
    }
    ?>

    </body>
</html>
