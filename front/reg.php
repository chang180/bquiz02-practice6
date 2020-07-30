<fieldset>
<legend>會員註冊</legend>
<h3 style="color:red">*請設定您要註冊的帳號及密碼(最長12個字元)</h3>
<form action="api/reg.php" method="post">
<label for="acc">Step1:登入帳號<input type="text" name="acc"></label><br>
<label for="pw">Step2:登入密碼<input type="password" name="pw"></label><br>
<label for="pw2">Step3:再次確認密碼<input type="password" name="pw2"></label><br>
<label for="email">Step4:信箱（忘記密碼時使用）<input type="text" name="email"></label><br>
<button>註冊</button><button type="reset">清除</button>
</form>
</fieldset>