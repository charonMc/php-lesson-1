<?php
$acc='charon';
$pw='123';

$formAcc=$_POST['acc'];
$formPw=$_POST['pw'];

if($acc==$formAcc && $pw==$formPw){
    // echo '登入正確';
    header("location:login.php?result=success");
}else{
    // echo '帳號或密碼錯誤，請重新輸入';
    header("location:login.php?result=fail");

}

?>