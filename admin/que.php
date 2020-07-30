<form action="api/que.php" method="post">
    <fieldset>
        <legend>新增問卷</legend>
        <label for="text">問卷名稱<input type="text" name="text"></label><br>
        <label for="opt" id="addHere">選項<input type="text" name="opt[]"></label><button type="button" onclick="moreOpt()">更多</button><br>
        <button>新增</button><button type="reset">清空</button>
    </fieldset>
</form>
<script>
    function moreOpt(){
        let el=`
        <br><label for="opt">選項<input type="text" name="opt[]"></label>
        `;
        $("#addHere").after(el);
    }
</script>