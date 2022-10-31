<?php
session_start();

$acc='charon';
$pw='123';

$formAcc=$_POST['acc'];
$formPw=$_POST['pw'];

if($acc==$formAcc && $pw==$formPw){
    // echo '登入正確';
    $_SESSION['login']=$formAcc;
}else{
    // echo '帳號或密碼錯誤，請重新輸入';
    $_SESSION['error']="帳號或密碼錯誤";


}

header("location:login2.php");

?>