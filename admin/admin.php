<fieldset>
<legend>帳號管理</legend>
<form action="api/del_admin.php" method="post">
<table>
    <tr>
        <td>帳號</td>
        <td>密碼</td>
        <td>刪除</td>
    </tr>
    <?php
$rows=$Admin->all();
foreach($rows as $row){
    if($row['acc']!='admin'){
    ?>
    <tr>
        <td><?=$row['acc'];?></td>
        <td><?=str_repeat("*",strlen($row['pw']));?></td>
        <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
    </tr>
<?php }} ?>
</table>
<div class="ct">
    <button>確定刪除</button><button type="submit">清空選取</button>
</div>
</form>

<h2>新增會員</h2>
<h3 style="color:red">*請設定您要註冊的帳號及密碼(最長12個字元)</h3>
<form action="api/add.php" method="post">
<label for="acc">Step1:登入帳號<input type="text" name="acc"></label><br>
<label for="pw">Step2:登入密碼<input type="password" name="pw"></label><br>
<label for="pw2">Step3:再次確認密碼<input type="password" name="pw2"></label><br>
<label for="email">Step4:信箱（忘記密碼時使用）<input type="text" name="email"></label><br>
<button>新增</button><button type="reset">清除</button>
</form>
</fieldset>