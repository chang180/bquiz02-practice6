<?php
include_once "../base.php";
switch ($_POST['type']){
    case "1":
        $Log->save(['news'=>$_POST['id'],'user'=>$_POST['user']]);
        $news=$News->find($_POST['id']);
        $news['good']++;
        $News->save($news);
    break;
    case "2":
        $Log->del(['news'=>$_POST['id'],'user'=>$_POST['user']]);
        $news=$News->find($_POST['id']);
        $news['good']--;
        $News->save($news);
    break;
}