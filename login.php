<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>會員登入</title>
    </head>
    <body>
    <h2>會員登入</h2>
    <?php
    $showform=true;

    if(isset($_GET['result'])){
        switch($_GET['result']){
            case 'success':
                echo "帳密正確，登入成功！";
                $showform=false;

            break;
            case 'fail':
                echo "帳號或密碼錯誤，登入失敗！";
                break;
        }
    }
    ?>


<?php
if($showform){
   ?> 


<a href="./index.php">回首頁</a>
<form action="check.php" method="post">
    <div>帳號:<input type="text" name='acc'></div>
    <div>密碼:<input type="text" name='pw'></div>
    <div><input type="submit" value="登入"></div>
</form>
<?php 
}
?>
</body>
</html>