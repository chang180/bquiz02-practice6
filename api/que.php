<?php
include_once "../base.php";
$Que->save(['text'=>$_POST['text']]);
$parent=$Que->find(['text'=>$_POST['text']])['id'];
foreach($_POST['opt'] as $o){
    $Que->save(['parent'=>$parent,'text'=>$o]);
}
to("../admin.php?do=que");