<?php
include_once "../base.php";

$chk = $Admin->find(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);
$chkacc = $Admin->find(['acc' => $_POST['acc']]);
// var_dump($chkacc);
if (empty($_POST['acc']) || empty($_POST['pw']) || empty($_POST['pw2']) || empty($_POST['email'])) {
    echo "<script>alert('不可空白');location.href='../index.php?do=reg';</script>";
    exit;
}
if (!empty($chkacc)) {
    echo "<script>alert('帳號重複');location.href='../index.php?do=reg';</script>";
    exit;
}
if ($_POST['pw'] != $_POST['pw2']) {
    echo "<script>alert('密碼錯誤');location.href='../index.php?do=reg';</script>";
    exit;
} else {
    $Admin->save(['acc' => $_POST['acc'], 'pw' => $_POST['pw'], 'email' => $_POST['email']]);
    echo "<script>alert('註冊完成，歡迎加入');location.href='../index.php?do=login';</script>";
}
