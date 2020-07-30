<form action="api/vote.php" method="post">
    <fieldset>
        <legend>目前位置：首頁 > 問卷調查 > <?=$Que->find($_GET['id'])['text'];?></legend>
        <h3><?=$Que->find($_GET['id'])['text'];?></h3>
        <?php $rows=$Que->all(['parent'=>$_GET['id']]); 
        foreach($rows as $row){
        ?>
    <input type="radio" name="id" value="<?=$row['id'];?>"><?=$row['text'];?><br>
    <?php } ?>
    <input type="hidden" name="parent" value="<?=$_GET['id'];?>">
    <button class="cent">我要投票</button>
    </fieldset>
</form>