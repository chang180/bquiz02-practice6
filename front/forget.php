<h3>請輸入信箱以查詢密碼</h3>
<input type="text" name="email" id="email"><br>
<div id="pw"></div>
<button id="search">尋找</button>
<script>
    $("#search").on("click",function(){
        $.post("api/chk_email.php",{'email':$("#email").val()},function(res){
$("#pw").html(res);
        })
    })
</script>