<fieldset>
    <legend>目前位置：首頁 > 問卷調查</legend>
    <table>
        <tr>
            <td width="15%">編號</td>
            <td width="35%">問卷題目</td>
            <td width="15%">投票總數</td>
            <td width="15%">結果</td>
            <td width="15%">狀態</td>
        </tr>
        <?php
        $rows = $Que->all(['parent' => 0]);
        foreach ($rows as $k => $row) {
        ?>
            <tr>
                <td><?= ($k + 1); ?>.</td>
                <td><?= $row['text']; ?></td>
                <td><?= $row['count']; ?></td>
                <td><?= "<a href='?do=result&id=" . $row['id'] . "'>結果</a>"; ?></td>
                <td>
                    <?php
if(empty($_SESSION['login'])){
echo "請先登入";
}else{
    echo "<a href='?do=vote&id=".$row['id']."'>參與投票</a>";
}
                    ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</fieldset>