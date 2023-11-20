<?php
include_once '../include/connect.php';

$acc=$_POST['acc'];
$pw=$_POST['pw'];

///testttttttttttttttt
// $sql="select * from users where `acc`='$acc' && `pw`='$pw'";
// $user=$pdo->query($sql)->fetch();

// echo "<pre>";
// print_r($user);
// exit;
// testttttttttttttttttttttttt
// if($user['acc']==$acc && $user['pw']==$pw){
//     $_SESSION['user']=$acc;
//     header("location:index.php");
// }else{
//     header('location:login_form.php?error=帳號密碼錯誤');
// }
$res=total('users',['acc'=>$acc,'pw'=>$pw]);
if($res){
    $_SESSION['user']=$acc;
    header("location:../index.php");
}else{
    header('location:../login_form.php?error=帳號密碼錯誤');
}


?>