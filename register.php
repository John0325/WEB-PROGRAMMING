<?php
session_start();
if(isset($_SESSION['login'])){
    if($_SESSION['login']=='Yes'){
        echo "<a href='logout.php'>登出</a>";
    }else{
        echo "非法";
        exit();
    }
}else{
    echo "非法";
    exit();
}
?>
<html>
    <head>
        <title>會員註冊</title>

    </head>
    
    <body>
        <form action="rinfo.php" method="post" enctype="multipart/form-data">
            帳號<input type="text" name="uaccount" placeholder="設定你的帳號"><br/>
            密碼<input type="password" name="upsw" placeholder="設定你的密碼"><br/>
            姓名<input type="text" name="uname"><br/>
            E-mail<input type="email" name="uemail"><br/>
            生日<input type="date" name="ubir"><br/>
            性別<input type="radio" name="usex" value="1">男<input type="radio" name="usex" value="2">女<input type="radio" name="usex" value="3">不方便透漏<br/>
            建議:<br/><textarea cols='30' rows='30' name="comment"></textarea><br/>
            <input type="submit" value="提交">
        </form>
    </body>

</html>