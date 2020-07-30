<style>
    .contain{
        display:flex;
    }
    .bar{
        width:55%;
        background:#ccc;
        height:20px;
        align-self: center;
    }
</style>

<fieldset>
        <legend>目前位置：首頁 > 問卷調查 > <?=$Que->find($_GET['id'])['text'];?></legend>
        <h3><?=$Que->find($_GET['id'])['text'];?></h3>
        <?php $rows=$Que->all(['parent'=>$_GET['id']]); 
        $parent=$_GET['id'];
        $total=$Que->find($parent)['count'];
        $total=($total==0)?1:$total;
        foreach($rows as $row){
            $count=$row['count'];
            $rate=$count/$total;
        ?>
<div class="contain">
    <div style="width:30%"><?=$row['text'];?></div>
    <div style="width:<?=round($rate*55);?>%" class="bar"></div>
    <div style="width:15%;align-self:center;"><?=$row['count'];?>票(<?=round($rate*100);?>%)</div>
</div>
    <?php } ?>
    <button class="cent" onclick="location.href='?do=que'">返回</button>
    </fieldset>