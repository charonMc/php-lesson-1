<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果</title>
</head>
<body>
    <?php
    $height=$_GET['height'];
    $weight=$_GET['weight'];

    print_r($_GET) ;
    echo "<br>";
    echo $_GET['weight'];
    $bmi=number_format($weight/pow(($height/100),2),2);
    echo "<br>";

    echo $bmi;

    if($bmi<18.5){
        $result='體重過輕';
    }else if($bmi<24){
        $result='健康體位';
    }else if($bmi<27){
        $result='過重';
    }else if($bmi<30){
        $result='輕度肥胖';
    }else if($bmi<35){
        $result='中度肥胖';
    }else{
        $result='重度肥胖';
        }

    ?>

<h3>您的BMI計算結果為:<?php echo $bmi; ?></h3>
<div></div>
<div>您的體位判定為:<?php echo $result; ?></div>
<br><br>
<a href="./BMI.php" style="font-size:small ;">返回計算頁面</a>
    
</body>
</html>