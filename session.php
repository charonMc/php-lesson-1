<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['name']='Charon';

    echo $_SESSION['name'];
    ?>

<a href="session_01.php">會員中心</a>
<a href="session_02.php">個人資料</a>

</body>
</html>