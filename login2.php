<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>會員登入-使用session</title>
    </head>
    <body>
        <h2>會員登入-使用session</h2>
    <?php
    session_start();

    if(!isset($_SESSION['login'])){

        if(isset($_SESSION['error'])){
            echo "<span style='color:red'>";
            echo $_SESSION['error'];
            echo "</span>";
            unset($_SESSION['error']);
        }
    ?>
    <form action="check2.php" method="post">
        <div>帳號:<input type="text" name="acc" id=""></div>
        <div>密碼:<input type="text" name="pw" id=""></div>
        <div><input type="submit" value="登入" id=""></div>
    </form>
    <?php
    }else{
        echo "登入成功 ";
        echo "<a href='center.php'>會員中心</a>";
        echo "<br>";
        echo "<a href='logout.php'>登出</a>";

    }
    ?>
</body>
</html>