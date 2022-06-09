<?php
    session_start();

    $link=@mysqli_connect(
        'localhost',
        'root',
        '',
        'php'
    );
?>

<?php
    if(isset($_COOKIE["UID"])){
        $cookieID=$_COOKIE["UID"];
        echo "歡迎".$cookieID."再度光臨";
    }else{
        echo "恭喜發現本網站!!";
    }
?>
<html>
<head>
    <title>會員登入</title>
</head>
<body>
    <form action="" method="post" enctype="mutiport/form-data   ">
        帳號<input type="text" name="uaccount" placeholder="你的帳號"></br>
        密碼<input type="password" name="upsw" placeholder="你的密碼"></br>
        <input type="submit" value="登入">
        <input type="button" value="忘記帳號與密碼" onclick="javascript:location.href='forget.php'">
        <input type="button" value="註冊去！" onclick="javascript:location.href='register.php'" style="width: 5%;">
    </form>


<?php
//$aID="admin";
//$aPWD="5201314";


    if(isset($_POST["uaccount"])){
        if($_POST["uaccount"]!=null){
            $uId=$_POST["uaccount"];
            $uPwd=$_POST["upsw"];

            $SQL="SELECT * FROM user WHERE uName='$uId' AND uPwd='$uPwd'";

            $result=mysqli_query($link,$SQL);

            if(mysqli_num_rows($result)==1){
                $_SESSION["login"]="Yes";
                setcookie("UID",$uId,time()+17280);
                header('Location: register.php');
            }else{
                echo "帳號或密碼輸入錯誤";
            }
            //if($aID==$uId && $aPWD==$uPwd){
                //echo "登入成功";
               // $_SESSION["login"]="Yes";
              //  setcookie("UID",$uId,time()+17280);
             //   header('Location= register.php');
            //}else{
            //    echo "輸入錯誤";
            //}
        }else{
            echo "尚未輸入";
        }
    }else{
        echo "歡迎登入，請輸入帳密!";
    }
?>

</body>
</html>