<?php
include_once "../base.php";
$chk=$Admin->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
$chkacc=$Admin->find(['acc'=>$_POST['acc']]);

if(!empty($chk)){
    $_SESSION['login']=$chk['acc'];
    if($chk['acc']=='admin'){
        to("../admin.php");
    }else{
        to("../index.php");
    }
}else{
    if(empty($chkacc)){
        echo "<script>alert('查無帳號');location.href='../index.php?do=login'</script>";
    }else{
        echo "<script>alert('密碼錯誤');location.href='../index.php?do=login'</script>";
    }
}