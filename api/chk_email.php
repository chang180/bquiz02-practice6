<?php
include_once "../base.php";
$chk=$Admin->find(['email'=>$_POST['email']]);
if(!empty($chk)){
    echo "您的密碼為：".$chk['email'];
}else{
    echo "查無此資料";
}