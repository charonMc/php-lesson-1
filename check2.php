<?php
session_start();

// $acc='charon';
// $pw='123';

$users=[
    [
    "name" => "charon",
    "pw"   => "123",
    "level"=> "admin"
    ],
    [
    "name" => "ib",
    "pw"   => "456",
    "level"=> "user"
    ],
    [
    "name" => "garry",
    "pw"   => "789",
    "level"=> "guest"
    ],

];


$formAcc=$_POST['acc'];
$formPw=$_POST['pw'];

// if($acc==$formAcc && $pw==$formPw){
//     // echo '登入正確';
//     $_SESSION['login']=$formAcc;
// }else{
//     // echo '帳號或密碼錯誤，請重新輸入';
//     $_SESSION['error']="帳號或密碼錯誤";
// }
$chk=false;

foreach($users as $user){
    if($user["name"]==$formAcc && $user["pw"]==$formPw){
        $chk=true;
        $_SESSION['level']=$user["level"];
    }
}

if($chk){
    // echo '登入正確';
    $_SESSION['login']=$formAcc;
}else{
    // echo '帳號或密碼錯誤，請重新輸入';
    $_SESSION['error']="帳號或密碼錯誤";
}


header("location:login2.php");

?>